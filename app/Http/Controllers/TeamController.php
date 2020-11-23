<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ]);
    }

    public function show($id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'team' => $team->toArray()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'competition_id' => 'required',
        ]);

        $team = new Team();
        $team->title = $request->title;
        $team->description = $request->description;
        $team->competition_id = $request->competition_id;

        if (auth()->user()->teams()->save($team)) {
            return response()->json([
                'success' => true,
                'team' => $team->toArray()
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Team not added'
            ], 500);
        }
            
    }

    public function update(Request $request, $id)
    {
        $teams = auth()->user()->teams()->find($id);

        if (!$teams) {
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }
        
        $updated = $teams->fill($request->all())->save();

        if ($updated){ 
            return response()->json([
                'success' => true
            ]); 
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Team can not be updated'
            ], 500);
        }
    }

    public function delete($id)
    {
        $teams = auth()->user()->teams()->find($id);

        if (!$teams) {
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }

        if ($teams->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Team can not be deleted'
            ], 500);
        }
    }

    public function threadsById($id)
    {
        $team = Team::find($id);

        if (!$team) {
            return response()->json([
                'success' => false,
                'message' => 'Team not found'
            ], 404);
        }

        $threads = $team->threads()->get();

        return response()->json([
            'success' => true,
            'threads' => $threads
        ], 200);
    }
}
