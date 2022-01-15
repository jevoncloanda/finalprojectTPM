<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $users = User::where('verification_status', 'like', request('Verificationfilter'))->get();
        }

        if ($request->input('Statusfilter')) {
            $users = User::where('status', 'like', request('Statusfilter'))->get();
        }

        //cara lain pake $appliers = DB::table('appliers')->get();
        return view('admin', ['users' => $users]);
    }

    public function getData($id){
        $user = User::find($id);
        $members = Member::where('group_id',$id)->get();

        return view('adminTeamData',['user'=>$user , 'members'=>$members]);
    }

    public function deleteTeam($id){
        User::destroy($id);
        return redirect(route('getTeamData'));
    }

    public function getLeaderData($id){
        $user = User::find($id);
        return view('adminLeaderData',['user'=>$user]);
    }

    public function updateLeaderData(array $data, $id){
        $user = User::find($id);

        $file = $data['leader_CV'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data['leader_CV']->move('storageCV', $filename);

        $file2 = $data['leader_card'];
        $filename2 = time() . '.' . $file2->getClientOriginalExtension();
        $data['leader_card']->move('storageCard', $filename2);

        $user->update([
            'group_name' => $data['group_name'],
            'password' => Hash::make($data['password']),
            'status' => $data['status'],
            'leader_name' => $data['leader_name'],
            'leader_email' => $data['leade_email'],
            'leader_wa_number' => $data['leader_wa_number'],
            'leader_line_id' => $data['leader_line_id'],
            'leader_github' => $data['leader_github'],
            'leader_genre' => $data['leader_genre'],
            'leader_birth_place' => $data['leader_birth_place'],
            'leader_birth_date' => $data['leader_birth_date'],
            'leader_CV' => $filename,
            'leader_card' => $filename2,
        ]);

        return redirect(route('getData'));
    }

    public function getMemberData($id){
        $member = Member::find($id);
        return view('adminMemberData',['member'=>$member]);
    }

    public function updateMemberData(MemberRequest $request, $id){
        $member = Member::find($id);

        $file = $request->cv;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->cv->move('storageCV', $filename);

        $file2 = $request->card;
        $filename2 = time() . '.' . $file2->getClientOriginalExtension();
        $request->card->move('storageCard', $filename2);

        $member->update([
            'name' => $request->name,
            'email' => $request->email,
            'wa_number' => $request->wa_number,
            'line_id' => $request->line_id,
            'github' => $request->github,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'cv' => $filename,
            'card' => $filename2,
        ]);

        return redirect(route('getData'));
    }
}
