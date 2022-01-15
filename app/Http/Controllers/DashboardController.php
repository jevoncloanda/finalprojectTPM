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
        $members = Member::where('group_id', $id);
        return view('dashboard.team', ['members' => $members]);
    }

    public function getPaymentPage()
    {
        return view('dashboard.payment');
    }

    public function getTeamAddPage()
    {
        return view('dashboard.team-add');
    }

    public function getLeaderProfilePage()
    {
        return view('dashboard.profileLeader');
    }

    public function getProfilePage($id){
        $member = Member::find($id);
        return view('dashboard.profile',['member'=>$member]);
    }
}
