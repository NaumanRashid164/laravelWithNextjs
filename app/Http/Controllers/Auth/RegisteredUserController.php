<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Notifications\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Laravel\Facades\Image;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            "avatar" => ["nullable", "image"]
        ]);
        if ($request->hasFile("avatar")) {
            $avatar  = $request->file("avatar");
            $filename = request("name") . "-" . time() . "." . $avatar->getClientOriginalExtension();
            $image = Image::read($avatar)->scale(200, 200)->encode();
            $path = 'avatar/' . $filename;
            Storage::disk('public')->put($path, $image);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            "avatar" => $filename ?? "default.png"
        ]);

        event(new Registered($user));

        \Notification::send(User::find(1), new RegisteredUser($user));

        Auth::login($user);

        return redirect(to: RouteServiceProvider::HOME);
    }
}
