<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Registration Req
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        $token = $user->createToken('LaravelAuthApp')->accessToken;

        return response()->json([
            'success' => true,
            'token' => $token
        ], 200);
    }

    /**
     * Login Req
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json([
                'success' => true,
                'token' => $token
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    /**
     * Logout Req
     */
    public function logout(Request $request)
    {
        auth()->user()->token()->revoke();
        
        return response()->json([
            'success' => true,
            'message' => 'Successfully logged out'
        ], 200);
    }

    public function details(Request $request)
    {
        $user = auth()->user();

        return response()->json([
            'success' => true,
            'user' => $user
        ], 200);
    }

    public function detailsById($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "User Not Found"
            ], 404);
        }
        
        
    }

    public function showTeams(Request $request)
    {
        $teams = auth()->user()->teams()->get();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ], 200);
    }

    public function showTeamsById($id)
    {
        $user = User::find($id);

        if(!$user) {
            return response()->json([
                'success' => false,
                'message' => "User Not Found"
            ], 404);
        }

        $teams = $user->teams()->get();

        return response()->json([
            'success' => true,
            'teams' => $teams
        ], 200);
    }

    public function showThreads(Request $request)
    {
        $threads = auth()->user()->threads()->get();

        return response()->json([
            'success' => true,
            'threads' => $threads
        ], 200);
    }

    public function showThreadsById($id)
    {
        $user = User::find($id);

        if(!$user) {
            return response()->json([
                'success' => false,
                'message' => "User Not Found"
            ], 404);
        }

        $threads = $user->threads()->get();

        return response()->json([
            'success' => true,
            'threads' => $threads
        ], 200);
    }
}
