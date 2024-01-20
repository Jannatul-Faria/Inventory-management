<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.Pages.dashboard.admin');
    }

    public function task()
    {
        return view('backend.Pages.dashboard.task');
    }

    public function imageUplode()
    {
        return view('backend.Pages.dashboard.images');
    }

    public function calender()
    {
        return view('backend.Pages.dashboard.calender');
    }

    public function icons()
    {
        return view('backend.Pages.dashboard.icons');
    }

    public function forms()
    {
        return view('backend.Pages.dashboard.forms');
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
