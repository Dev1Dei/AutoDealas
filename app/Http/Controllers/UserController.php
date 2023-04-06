<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
 
class UserController extends Controller
{
   
    // ...
    
    public function update(Request $request, $id)
    {
        $request->validate(['_method' => 'POST']);
        $user = User::findOrFail($id);
    
        $validatedData = $request->validate([
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        
        $user->update([
            'country' => $validatedData['country'],
            'city' => $validatedData['city'],
            'phone' => $validatedData['phone'],
        ]);
    
        return response()->json(['message' => 'Profile updated successfully!']);
    }
    
    
}
