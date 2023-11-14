<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $title = "Dashboard";
            $user = auth()->user();
            $users = User::paginate(5);
            return view("dashboard", compact('title', 'user', 'users'));
        } else {
            return redirect('/login');
        }
    }
}
