<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use Storage;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();

        return response()->json([
            'success' => true,
            'competitions' => $competitions
        ]);
    }

    public function show($id)
    {
        $competition = Competition::find($id);

        if (!$competition) {
            return response()->json([
                'success' => false,
                'message' => 'Competition not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'competition' => $competition->toArray()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $image_path = $image->store('competitions', 'public');

        $competition = new Competition();
        $competition->title = $request->title;
        $competition->description = $request->description;
        $competition->category_id = $request->category_id;
        $competition->imageURL = Storage::disk('public')->url($image_path);

        if (auth()->user()->competitions()->save($competition)) {
            return response()->json([
                'success' => true,
                'competition' => $competition->toArray()
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
        $competitions = Competition::find($id);

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

    public function delete($id)
    {
        $competitions = Competition::find($id);

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

    public function teamsById($id)
    {
        $competition = Competition::find($id);

        if (!$competition) {
            return response()->json([
                'success' => false,
                'message' => 'Competition not found'
            ], 400);
        }

        $teams = $competition->teams()->get();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ], 200);
    }
}
