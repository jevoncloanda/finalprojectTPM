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

    //VIEW TEAM DATA (ADMIN)
    public function getTeamData(Request $request)
    {
        if ($request->input('search')) {
            $users = User::where('group_name', 'like', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }

        //$sortnya itu kek ASC atau DESC
        if ($request->input('sort')) {
            $users = User::orderBy('group_name', request('sort'))->get();
        }

        //Filter
        if ($request->input('Verificationfilter')) {
            $users = User::where('verification_status', 'like', '%' . request('Verificationfilter') . '%')->get();
        }

        if ($request->input('Statusfilter')) {
            $users = User::where('status', 'like', '%' . request('Statusfilter') . '%')->get();
        }

        //cara lain pake $appliers = DB::table('appliers')->get();
        return view('admin', ['users' => $users]);
    }
}
