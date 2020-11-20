<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::all();

        return response()->json([
            'success' => true,
            'threads' => $threads
        ]);
    }

    public function show($id)
    {
        $thread = Thread::find($id);

        if (!$thread) {
            return response()->json([
                'success' => false,
                'message' => 'Thread not found '
            ], 400);
        }

        return response()->json([
            'success' => true,
            'thread' => $thread->toArray()
        ], 400);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'team_id' => 'required',
        ]);

        $thread = new Thread();
        $thread->content = $request->content;
        $thread->team_id = $request->team_id;

        if (auth()->user()->threads()->save($thread)) {
            return response()->json([
                'success' => true,
                'thread' => $thread->toArray()
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Thread not added'
            ], 500);
        }
            
    }

    public function update(Request $request, $id)
    {
        $threads = auth()->user()->threads()->find($id);

        if (!$threads) {
            return response()->json([
                'success' => false,
                'message' => 'Thread not found'
            ], 400);
        }
        
        $updated = $threads->fill($request->all())->save();

        if ($updated){ 
            return response()->json([
                'success' => true
            ]); 
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Thread can not be updated'
            ], 500);
        }
    }

    public function delete($id)
    {
        $threads = auth()->user()->threads()->find($id);

        if (!$threads) {
            return response()->json([
                'success' => false,
                'message' => 'Thread not found'
            ], 400);
        }

        if ($threads->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Thread can not be deleted'
            ], 500);
        }
    }
}
