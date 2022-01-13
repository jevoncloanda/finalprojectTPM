<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardPage()
    {
        return view('dashboard.schedule');
    }

    public function getTeamPage()
    {
        return view('dashboard.team');
    }

    public function getPaymentPage()
    {
        return view('dashboard.payment');
    }
}
