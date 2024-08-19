<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Return a view or data for the admin dashboard
        return view('admin.index'); // Adjust according to your setup
    }
}
