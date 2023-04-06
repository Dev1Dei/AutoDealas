<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutMeController extends Controller
{
    // ...
    
    public function index(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return Inertia::render('AboutMe', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'country' => $user->country,
                'city' => $user->city,
                'phone' => $user->phone,
            ],
        ]);
    }
    
    
}