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

    public function updateLeaderData(Request $request, $id){
        $user = User::find($id);

        $file = $request->leader_CV;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->leader_CV->move('storageCV', $filename);

        $file2 = $request->leader_card;
        $filename2 = time() . '.' . $file2->getClientOriginalExtension();
        $request->leader_card->move('storageCard', $filename2);

        $user->update([
            'group_name' => $request->group_name,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'leader_name' => $request->leader_name,
            'leader_email' => $request->leade_email,
            'leader_wa_number' => $request->leader_wa_number,
            'leader_line_id' => $request->leader_line_id,
            'leader_github' => $request->leader_github,
            'leader_genre' => $request->leader_genre,
            'leader_birth_place' => $request->leader_birth_place,
            'leader_birth_date' => $request->leader_birth_date,
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

        $file = $request->CV;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->CV->move('storageCV', $filename);

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
            'CV' => $filename,
            'card' => $filename2,
        ]);

        return redirect(route('getData'));
    }

    public function getTeamPayment(){
        $users = User::all();
        return view('adminPayment',['users'=>$users]);
    }
}
