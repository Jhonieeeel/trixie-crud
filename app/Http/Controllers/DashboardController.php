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

        $hotels = Hotel::query();

        if (request()->has('search')) {
            $searchTerm = request()->get('search', '');
            $hotels->where('hotel_name', 'like', '%' . $searchTerm . '%');
        }
    
        $hotels = $hotels->get();
        $wishlistItems = Wishlist::all(); 
        $user = Auth::user();
        
        return view('dashboard', compact('hotels', 'wishlistItems', 'user'));
    }

    public function update(UpdateStateRequest $request):RedirectResponse {
        $user = Auth::user();

        $request->user()->fill($request->validated());
        $request->user()->save();

        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }
    
 
}
