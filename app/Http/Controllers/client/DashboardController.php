<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('client.dashboard.index');
    }
    public function profile()
    {
        return view('client.dashboard.profile');
    }
    public function order()
    {
        return view('client.dashboard.order');
    }
}
