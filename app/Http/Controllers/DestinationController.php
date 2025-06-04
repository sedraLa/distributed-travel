<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    //index
    public function index() {
        return response()->json(Destination::all(),200);
    }

    //store

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $destination = Destination::create($validated);
        return response()->json($destination, 201);
    }

    //delete

    public function destroy($id) {
        $destination = Destination::find($id);
        if (!$destination) {
            return response()->json(['message' => 'destination not found.'], 404); //404 means not found
        }

        $destination->delete();

        return response()->json(['message' => 'destination deleted successfully.'], 200);
    }
    
}
