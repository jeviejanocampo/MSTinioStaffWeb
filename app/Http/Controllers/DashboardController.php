<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('staff.sections.main'); 
    }
    public function products()
    {
        return view('staff.sections.products'); // Create this view later
    }
}
