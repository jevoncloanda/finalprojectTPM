<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
            'password' => ['required','confirmed',
            Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()],
            'status' => ['required', 'string'],
            'leader_name' => ['required', 'string', 'max:255'],
            'leader_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'leader_wa_number' => ['required', 'numeric', 'min:9', 'max:20', 'unique:users'],
            'leader_line_id' => ['required', 'string', 'max:255', 'unique:users'],
            'leader_github' => ['required', 'string', 'max:255'],
            'leader_birth_place' => ['required', 'string', 'max:255'],
            'leader_birth_date' => ['required', 'date'],
            'leader_CV' => ['required', 'max:10000', 'mimes:pdf,jpg,jpeg,png'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
