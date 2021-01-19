<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        $projects = Project::all();
        return view('admin.dashboard', compact('pages', 'projects'));
    }
    public function faq()
    {
        $pages = 'faq';
        return view('admin.faq', compact('pages'));
    }
}
