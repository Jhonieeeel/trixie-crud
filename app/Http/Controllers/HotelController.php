<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $wishlistItems = Wishlist::all(); 

        return view('pages.hotels', compact('wishlistItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'hotel_name' => ['required', 'string', 'max:255'],
            'ratings' => ['required', 'decimal', 'max:5' ],
            'reviews' => ['required', 'numeric'],
            'price' => ['required', 'string'],
            'image' => ['image', 'mimes:jpeg,png', 'max:2048'],
            'state' => ['required', 'in:luzon,visayas,mindanao'],
        ]);

        // Create a new hotel
        $data = Hotel::create([
            'hotel_name' => $request->hotel_name,
            'ratings' => $request->ratings,
            'reviews' => $request->reviews,
            'price' => $request->price,
            'image' => $request->image,
            'state' => $request->state,
        ]);

 
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
