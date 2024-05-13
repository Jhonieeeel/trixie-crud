<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Rules\AlphaSpace;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255',new AlphaSpace],
            'lastname' => ['required', 'string', 'max:255',new AlphaSpace],
            'address' => ['required', 'string', 'max:255',new AlphaSpace],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class,'ends_with:@gmail.com'], 
            'state' => ['nullable', 'in:luzon,visayas,mindanao'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create a new user
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'email' => $request->email,
            
            'password' => Hash::make($request->password),
        ]);

        // Dispatch the registered event
        event(new Registered($user));

        // Log the user in
        Auth::login($user);

        // Redirect the user to the dashboard
        return redirect(route('dashboard', absolute: false));
    }
}
