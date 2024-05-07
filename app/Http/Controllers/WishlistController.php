<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    

    public function index()
    {
        $wishlistItems = Wishlist::with('hotel')->get();
        $count = $wishlistItems->count();

        return view('wishlist', compact('wishlistItems', 'count'));
     
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
     
        Wishlist::create([
            'hotel_id' => $request->input('hotel_id')
        ]);

        return redirect('/wishlist');  
    }

     
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();

        return redirect()->back();
    }
}
