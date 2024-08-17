<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse; //default Laravel response type for JSON responses.
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Mentor;
use App\Models\Video;

class AdminController extends Controller
{
    
    public function getUserCount(): JsonResponse {
        try {
            $userCount = User::count();
            return response()->json(['userCount' => $userCount]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function getVideoCount(): JsonResponse {
        try {
            $videoCount = Video::count();
            return response()->json(['videoCount' => $videoCount]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function getUsers(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }

    public function getMentors()
    {
        return Mentor::all();
    }

    public function getWorkoutVideos()
    {
        return Video::all();
    }

}
