<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return View('layouts.master');
    }

    public function dashboard()
    {
        return View('layouts.dashboard');
    }
}