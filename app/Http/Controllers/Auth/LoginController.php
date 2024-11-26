<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
  public function login(Request $request)
  {
    $credentials = $request->validate(
      [
        'usuario' => ['required', 'string'],
        'password' => ['required', 'string'],
      ]
    );

    $remember = $request->filled('remember');

    $user = User::where('name', $credentials['usuario'])->first();

    if ($user && Auth::attempt(['email' => $user['email'], 'password' => $credentials['password']], $remember)) {
      $request->session()->regenerate();
      return redirect()->intended('home')->with('status', 'You are logged in OK');
    }

    throw ValidationException::withMessages(['usuario' => 'estas credenciales no coinciden con el registro']);
    // throw ValidationException::withMessages(['usuario' => __('auth.failed')]);
    return redirect('/login');
  }

  public function logout(Request $request, Redirector $redirect)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return $redirect->to('/login')->with('status', 'You are log out');
  }
}
