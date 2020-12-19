<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        if(Auth::user()->detailable_type == "App\Staff"){
            $info = Staff::find(Auth::user()->detailable_id);
        } else if(Auth::user()->detailable_type == "App\Lecturer"){
            $info = Lecturer::find(Auth::user()->detailable_id);
        }
        return view('supervisor.dashboard', compact('pages','info'));
    }
}
