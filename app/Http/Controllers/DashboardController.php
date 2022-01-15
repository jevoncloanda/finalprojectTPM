<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getDashboardPage()
    {
        return view('dashboard.schedule');
    }

    public function getTeamPage($id)
    {
        $members = Member::where('group_id', $id)->get();
        return view('dashboard.team', ['members' => $members]);
    }

    public function getPaymentPage()
    {
        return view('dashboard.payment');
    }

    public function getTeamAddPage()
    {
        $id = Auth::user()->id;
        $leader = User::find($id);
        // dd($leader);
        return view('dashboard.team-add', ['leader' => $leader]);
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
