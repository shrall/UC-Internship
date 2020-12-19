<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        $info = Student::find(Auth::user()->detailable_id);
        return view('student.dashboard', compact('pages', 'info'));
    }
}
