<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class FacebookSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToFB(Request $request)
    {
        $section = $request->all()['section'];

        if ($section === 'review') {
            $prevUrl = '/review' . str_replace(url('/'), '', url()->previous());

            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        } elseif ($section === 'login') {
            $prevUrl = '/dashboard';
            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        } else {
            $prevUrl = str_replace(url('/'), '', url()->previous()) . '?section=questions';
            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        }
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $findUser = User::where('email', $user->email)->first();
            if ($findUser) {

                Auth::login($findUser);

                return redirect(session('url.intended'));
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'profile_photo_path' => $user->user['picture'],
                    'password' => encrypt('password')
                ]);

                Auth::login($newUser);
                return redirect(session('url.intended'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
