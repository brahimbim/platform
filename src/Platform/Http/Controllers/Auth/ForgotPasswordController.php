<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Orchid\Platform\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return Factory|View
     */
    public function showLinkRequestForm()
    {
        return view('platform::auth.passwords.email');
    }
}
