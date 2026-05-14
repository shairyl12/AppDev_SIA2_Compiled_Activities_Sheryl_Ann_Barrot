<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // 📍 SHOW FORM PAGE
    public function create()
    {
        return view('form');
    }

    // 📍 HANDLE FORM SUBMISSION
    public function store(Request $request)
    {
        // 📍 VALIDATION RULES
        $request->validate([
            'client_name' => 'required|min:3',
            'email' => 'required|email',
            'workout_type' => 'required',
            'duration' => 'required|numeric|min:10',
            'intensity' => 'required',
        ], [
            // 📍 CUSTOM MESSAGES (BONUS)
            'client_name.required' => 'Name is required.',
            'email.email' => 'Enter a valid email.',
            'duration.min' => 'Workout duration must be at least 10 minutes.',
        ]);

        // 📍 SUCCESS MESSAGE + REDIRECT
        return back()->with('success', 'Workout log submitted successfully!');
    }
}