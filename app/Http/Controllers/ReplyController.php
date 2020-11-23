<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ReplyController extends Controller
{
    public function index()
    {
        $replies = Reply::all();

        return response()->json([
            'success' => true,
            'replies' => $replies
        ]);
    }

    public function show($id)
    {
        $reply = Reply::find($id);

        if (!$reply) {
            return response()->json([
                'success' => false,
                'message' => 'Reply not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'reply' => $reply->toArray()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'thread_id' => 'required',
        ]);

        $reply = new Reply();
        $reply->content = $request->content;
        $reply->thread_id = $request->thread_id;

        if (auth()->user()->replies()->save($reply)) {
            return response()->json([
                'success' => true,
                'reply' => $reply->toArray()
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Reply not added'
            ], 500);
        }
            
    }

    public function update(Request $request, $id)
    {
        $replies = auth()->user()->replies()->find($id);

        if (!$replies) {
            return response()->json([
                'success' => false,
                'message' => 'Reply not found'
            ], 404);
        }
        
        $updated = $replies->fill($request->all())->save();

        if ($updated){ 
            return response()->json([
                'success' => true
            ]); 
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Reply can not be updated'
            ], 500);
        }
    }

    public function delete($id)
    {
        $replies = auth()->user()->replies()->find($id);

        if (!$replies) {
            return response()->json([
                'success' => false,
                'message' => 'Reply not found'
            ], 404);
        }

        if ($replies->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Reply can not be deleted'
            ], 500);
        }
    }
}
