<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'group_name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'status' => ['required', 'string'],
            'leader_name' => ['required', 'string', 'max:255'],
            'leader_birth_place' => ['required', 'string', 'max:255'],
            'leader_birth_date' => ['required', 'date'],
            'leader_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'leader_wa_number' => ['required', 'string', 'min:9', 'max:20', 'unique:users'],
            'leader_line_id' => ['required', 'string', 'max:255', 'unique:users'],
            'leader_github' => ['required', 'string', 'max:255'],
            'leader_CV' => ['required', 'max:10000', 'mimes:pdf,jpg,jpeg,png'],
            'leader_card' => ['required', 'max:10000', 'mimes:pdf,jpg,jpeg,png'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    //CREATE DATA

    protected function create(array $data)
    {
        return User::create([
            'group_name' => $data['group_name'],
            'password' => Hash::make($data['password']),
            'status' => $data['status'],
            'leader_name' => $data['leader_name'],
            'leader_birth_place' => $data['leader_birth_place'],
            'leader_birth_date' => $data['leader_birth_date'],
            'leader_email' => $data['leader_email'],
            'leader_wa_number' => $data['leader_wa_number'],
            'leader_line_id' => $data['leader_line_id'],
            'leader_github' => $data['leader_github'],
            'leader_CV' => $data['leader_CV'],
            'leader_card' => $data['leader_card'],
        ]);
    }


    //VIEW TEAM DATA (ADMIN)

    public function getLeaderData(Request $request)
    {

        if ($request->input('search')) {
            $users = User::where('group_name', 'like', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }

        //$sortnya itu kek ASC atau DESC
        if ($request->input('sort')) {
            $users = User::orderBy('name', request('sort'))->get();
        }

        //Filter
        if ($request->input('filter')) {
            $users = User::where('verification_status', 'like', '%' . request('filter') . '%')->get();
        }

        //cara lain pake $appliers = DB::table('appliers')->get();
        return view('view', ['users' => $users]);
    }


    //UPDATE

    public function getLeaderDataById($id)
    {
        $user = User::find($id);
        return view('update', ['user' => $user]);
    }

    public function updateLeaderData(array $data, $id)
    {
        $user = User::find($id);

        $user->update([
            'group_name' => $data['group_name'],
            'password' => Hash::make($data['password']),
            'status' => $data['status'],
            'leader_name' => $data['leader_name'],
            'leader_email' => $data['leade_email'],
            'leader_wa_number' => $data['leader_wa_number'],
            'leader_line_id' => $data['leader_line_id'],
            'leader_github' => $data['leader_github'],
            'leader_birth_place' => $data['leader_birth_place'],
            'leader_birth_date' => $data['leader_birth_date'],
            'leader_CV' => $data['leader_CV'],
            'leader_card' => $data['leader_card'],
        ]);

        return redirect(route('silahkandiisi'));
    }


    //DELETE TEAM

    public function deleteTeam($id)
    {
        User::destroy($id);
        return redirect(route('bebas'));
    }
}
