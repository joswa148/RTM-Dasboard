<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    private const MAX_ATTEMPTS = 5;
    private const DECAY_SECONDS = 60;

    public function showLogin()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => ['required', 'string', 'email:rfc', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:128'],
        ]);

        $remember = $request->boolean('remember');
        $throttleKey = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($throttleKey, self::MAX_ATTEMPTS)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            throw ValidationException::withMessages([
                'email' => "Too many login attempts. Please try again in {$seconds} seconds.",
            ]);
        }

        if (! Auth::attempt($credentials, $remember)) {
            RateLimiter::hit($throttleKey, self::DECAY_SECONDS);

            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        if (! Auth::user()->is_admin) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            throw ValidationException::withMessages([
                'email' => 'This account does not have admin access.',
            ]);
        }

        RateLimiter::clear($throttleKey);
        $request->session()->regenerate();

        Auth::user()->forceFill([
            'last_login_at' => now(),
            'last_login_ip' => $request->ip(),
        ])->save();

        return redirect()
            ->intended(route('admin.dashboard'))
            ->with('success', 'Welcome back, ' . Auth::user()->name . '.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('success', 'You have been signed out.');
    }

    private function throttleKey(Request $request): string
    {
        return Str::transliterate(
            Str::lower((string) $request->input('email')) . '|' . $request->ip()
        );
    }
}
