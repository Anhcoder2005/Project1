<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('home');
    }

    public function PageReadbook(){
        return view('readbook/readbook');
    }


}
