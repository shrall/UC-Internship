<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        $pages = 'dash';
        return view('admin.dashboard', compact('pages'));
    }
}
