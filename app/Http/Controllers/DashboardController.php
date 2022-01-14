<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardPage()
    {
        return view('dashboard.schedule');
    }

    public function getTeamPage($id)
    {
        $members = Member::where('group_id',$id);
        return view('dashboard.team',['members'=>$members]);
    }

    public function getPaymentPage()
    {
        return view('dashboard.payment');
    }
}
