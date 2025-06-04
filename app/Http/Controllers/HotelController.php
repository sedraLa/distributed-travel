<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;


class HotelController extends Controller
{
    //index
    public function index(Request $request) {

        //search

        $search = $request->query('search');

        $hotels = Hotel::query();
    
        if ($search) {
            $hotels->where('name', 'LIKE', "%$search%") //يبحث عن قيمة من search في رابط الطلب
                   ->orWhere('location', 'LIKE', "%$search%");
        }
        return response()->json($hotels->get(), 200);
    }

    //store
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        $hotel = Hotel::create($validated);
        return response()->json($hotel,201);
    }

    //update
    public function update(Request $request, $id) {
        $hotel = Hotel::find($id);
        if (!$hotel) {
            return response()->json(['message'=>'hotel not found'],404);
        }
        $validated = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);
        $hotel->update($validated);
        return response()->json(['message'=>'hotel updated successfully'], 200);
    }


}
