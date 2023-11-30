<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Other methods...

    public function showLoginForm()
    {
        return view('auth.login'); // Adjust the view path as needed
    }

    // Other methods...
}
