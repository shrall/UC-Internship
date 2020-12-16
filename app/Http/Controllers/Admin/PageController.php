<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        return view('admin.dashboard', compact('pages'));
    }
}
