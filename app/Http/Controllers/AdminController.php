<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.admin');
    }

    public function task()
    {
        return view('backend.task');
    }

    public function imageUplode()
    {
        return view('backend.images');
    }

    public function calender()
    {
        return view('backend.calender');
    }

    public function icons()
    {
        return view('backend.icons');
    }

    public function forms()
    {
        return view('backend.forms');
    }

    // public function profile()
    // {
    //     return view('backend.profile');
    // }
    // public function register()
    // {
    //     return view('backend.register');
    // }
    // public function reset()
    // {
    //     return view('backend.reset');
    // }
    public function tables()
    {
        return view('backend.tables');
    }
}
