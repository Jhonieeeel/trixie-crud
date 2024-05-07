<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStateRequest;
use App\Models\Hotel;
use App\Models\Wishlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        $wishlistItems = Wishlist::all(); 

        $user = Auth::user();
        // dd($user);
        return view('dashboard', compact('hotels', 'wishlistItems', 'user'));
    }

    public function update(UpdateStateRequest $request):RedirectResponse {
        $user = Auth::user();

        $request->user()->fill($request->validated());
        $request->user()->save();

        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }
    
 
}
