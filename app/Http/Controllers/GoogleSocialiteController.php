<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle(Request $request)
    {
        $section = $request->all()['section'];
        if($section === 'review') {
            $prevUrl = '/review'.str_replace(url('/'), '', url()->previous());

            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        }elseif($section === 'login') {
            $prevUrl = '/dashboard';
            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        }else {
            $prevUrl = str_replace(url('/'), '', url()->previous()).'?section=questions';
            if (!session()->has('url.intended')) {
                session(['url.intended' => $prevUrl]);
            }
        }
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $findUser = User::where('email', $user->email)->first();
            if ($findUser) {

                Auth::login($findUser);

                return redirect(session('url.intended'));
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
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
