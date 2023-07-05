<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }
    public function websites()
    {
        return view('services.websites');
    }
    public function bulksms()
    {
        return view('services.bulksms');
    }
    public function hosting()
    {
        return view('services.hosting');
    }
}
