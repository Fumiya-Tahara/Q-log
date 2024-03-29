<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('user_info', compact('user'));
    }
}
