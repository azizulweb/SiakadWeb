<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function guru()
    {
        return view('dashboard.guru');
    }

    public function siswa()
    {
        return view('dashboard.siswa');
    }
}
