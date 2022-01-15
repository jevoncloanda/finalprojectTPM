<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function createMember(MemberRequest $request, $id){
        $file = $request->CV;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->CV->move('storageCV', $filename);

        $file2 = $request->card;
        $filename2 = time() . '.' . $file2->getClientOriginalExtension();
        $request->card->move('storageCard', $filename2);

        Member::create([
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
            'group_id' => $id,
        ]);

        return redirect(route('getTeamPage'));
    }

    public function viewMember(MemberRequest $request){
        $members = Member::all();

        return view('',['members' => $members]);
    }

    public function getMemberDataById($id)
    {
        $member = Member::find($id);
        return view('update', ['member' => $member]);
    }

    public function updateLeaderData(Request $request, $id)
    {
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

        return redirect(route(''));
    }

    public function deleteMember($id)
    {
        Member::destroy($id);
        return redirect(route('bebas'));
    }
}
