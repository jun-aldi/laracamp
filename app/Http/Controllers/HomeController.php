<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {

        switch (Auth::user()->is_admin == 1) {
            case 'value':
                return redirect(route('admin.dashboard'));
                break;

            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
