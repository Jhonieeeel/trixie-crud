<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class WishlistController extends Controller
{
    

    public function index()
    {
        $user = Auth::user();
        $wishlistItems = Wishlist::with('hotel')->where('user_id', $user->id)->get();
        // $wishlistItems = Wishlist::with('hotel')->get();

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

        $user = Auth::user();

        Wishlist::create([
            'hotel_id' => $request->input('hotel_id'),
            'user_id' =>  $user->id
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
