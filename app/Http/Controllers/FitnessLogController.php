<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FitnessLog;

class FitnessLogController extends Controller
{
    // Store fitness log data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'exercise' => 'required|string',
            'duration' => 'required|integer',
            'calories_burned' => 'required|integer',
        ]);

        $progress = new FitnessLog([
            'user_id' => auth()->id(),
            'date' => $validated['date'],
            'exercise' => $validated['exercise'],
            'duration' => $validated['duration'],
            'calories_burned' => $validated['calories_burned'],
        ]);

        $progress->save();

        return response()->json(['success' => 'Fitness log saved successfully.']);
    }

    // Fetch fitness log data
    public function index()
    {
        $user = auth()->user();
        $fitnessLogs = FitnessLog::where('user_id', $user->id)->get();

        return response()->json($fitnessLogs);
    }
}

