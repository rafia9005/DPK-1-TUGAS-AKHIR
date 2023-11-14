<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            $title = "Data Alumni";
            return view('data.alumni', compact('title'));
        } else {
            return redirect('/login');
        }
    }
}
