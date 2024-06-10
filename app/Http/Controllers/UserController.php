<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignAdminRole(Request $request)
    {
        $userIds = $request->input('user_ids', [2,3]); // Get user IDs from request

        // Retrieve the admin role
        $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            return response()->json(['error' => 'Admin role not found'], 404);
        }

        foreach ($userIds as $userId) {
            $user = User::find($userId);
            if ($user) {
                // Assign admin role to user if not already assigned
                $user->roles()->syncWithoutDetaching([$adminRole->id]);
            }
        }

        return response()->json(['message' => 'Admin roles assigned successfully']);
    }

    public function checkUserRole($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Check if the user has the admin role
        $hasAdminRole = $user->roles()->where('name', 'admin')->exists();
        
        return response()->json(['hasAdminRole' => $hasAdminRole]);
    }
}
