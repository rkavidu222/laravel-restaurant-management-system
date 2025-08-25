<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->user_type;

            if($usertype === 'admin')
            {
                return view('dashboard');
            }
            else
            {
                return view('admin.index');
            }
        }


    }
}
