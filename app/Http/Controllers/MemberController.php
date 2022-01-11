<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function createMember(MemberRequest $request){

        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'wa_number' => $request->wa_number,
            'line_id' => $request->line_id,
            'github' => $request->github,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'cv' => $request->cv,
            'card' => $request->card,
        ]);

        return redirect(route(''));
    }

    public function viewMember(MemberRequest $request){
        $members = Member::all();

        return view('memberView',['members' => $members]);
    }
}
