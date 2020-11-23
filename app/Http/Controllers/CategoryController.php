<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'success' => true,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'category' => $category->toArray()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;

        if ($category->save()) {
            return response()->json([
                'success' => true,
                'category' => $category->toArray()
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Category not added'
            ], 500);
        }
            
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }
        
        $category->name = $request->name;

        if ($category->save()){ 
            return response()->json([
                'success' => true
            ]); 
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Category can not be updated'
            ], 500);
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        if ($category->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Category can not be deleted'
            ], 500);
        }
    }

    public function competitionsById($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        $competitions = $category->competitions()->get();

        return response()->json([
            'success' => true,
            'competitions' => $competitions
        ], 200);
    }
}
