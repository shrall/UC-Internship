<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        return view('student.dashboard', compact('pages'));
    }
}
