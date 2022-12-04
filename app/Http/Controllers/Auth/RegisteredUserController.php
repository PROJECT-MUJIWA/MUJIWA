<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render(
            'auth/register'
        );
    }

    public function store(): RedirectResponse|ValidationException
    {
        Request::validate([
            'username' => ['required', 'min:8', 'max:64', Rule::unique(User::class, 'username')],
            'email' => ['required', 'email:rfc,dns,strict,spoof', Rule::unique(User::class, 'email')],
            'password' => ['required', 'confirmed', Password::min(12)->uncompromised()],
            'accept_eula' => ['required', 'accepted']
        ]);

        $user = User::create(Request::only(['username', 'email', 'password', 'accept_eula']));

        Event::dispatch(new Registered($user));

        return Redirect::route('login');
    }
}
