<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //index
    public function index() {
        //get all users
        return response()->json(User::all(),200);  //200 means success
    }

    //store
    public function store(Request $request) {
        //create new user
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users'
        ]);

        $user = User::create($validated);
        return response()->json($user,201); //201 means created successfully
    }
}
