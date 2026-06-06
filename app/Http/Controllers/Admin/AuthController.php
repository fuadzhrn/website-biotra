<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    // TODO: Pindahkan kredensial ini ke database dan gunakan Hash::check() untuk keamanan produksi.
    private const ADMIN_EMAIL    = 'admin@biotra.co.id';
    private const ADMIN_PASSWORD = 'admin123';

    public function showLoginForm(): View|RedirectResponse
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.admin-login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        if (
            $request->email === self::ADMIN_EMAIL &&
            $request->password === self::ADMIN_PASSWORD
        ) {
            $request->session()->regenerate();

            session([
                'admin_logged_in' => true,
                'admin_email'     => $request->email,
            ]);

            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()
            ->withErrors(['login' => 'Email atau password admin tidak sesuai.'])
            ->withInput($request->only('email'));
    }

    public function logout(Request $request): RedirectResponse
    {
        session()->forget(['admin_logged_in', 'admin_email']);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
