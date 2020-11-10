<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = auth()->user()->competitions;
 
        return response()->json([
            'success' => true,
            'data' => $competitions
        ]);
    }
 
    public function show($id)
    {
        $competitions = auth()->user()->competitions()->find($id);
 
        if (!$competitions) {
            return response()->json([
                'success' => false,
                'message' => 'Competition not found '
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $competitions->toArray()
        ], 400);
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
 
        $competitions = new Competition();
        $competitions->title = $request->title;
        $competitions->description = $request->description;
 
        if (auth()->user()->competitions()->save($competitions)) {
            return response()->json([
                'success' => true,
                'data' => $competitions->toArray()
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Competition not added'
            ], 500);
        }
            
    }
 
    public function update(Request $request, $id)
    {
        $competitions = auth()->user()->competitions()->find($id);
 
        if (!$competitions) {
            return response()->json([
                'success' => false,
                'message' => 'Competition not found'
            ], 400);
        }
        
        $updated = $competitions->fill($request->all())->save();
 
        if ($updated){ 
            return response()->json([
                'success' => true
            ]); 
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Competition can not be updated'
            ], 500);
        }
    }
 
    public function destroy($id)
    {
        $competitions = auth()->user()->competitions()->find($id);
 
        if (!$competitions) {
            return response()->json([
                'success' => false,
                'message' => 'Competition not found'
            ], 400);
        }
 
        if ($competitions->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Competition can not be deleted'
            ], 500);
        }
    }
}
