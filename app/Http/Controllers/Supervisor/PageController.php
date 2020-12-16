<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        return view('supervisor.dashboard', compact('pages'));
    }
}
