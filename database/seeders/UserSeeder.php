<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'group_name' => 'admin',
        //     'password' => 'Admin#123',
        // ]);

        DB::table('users')->insert([
            'group_name' => 'Eeve',
            'password' => 'Test#123',
            'status' => 'Binusian',
            'leader_name' => 'Ryan Febrian',
            'leader_birth_place' => 'Jakarta',
            'leader_birth_date' => "2003-02-22",
            'leader_email' => 'ryan22febrian@gmail.com',
            'leader_wa_number' => '082246584822',
            'leader_line_id' => 'ryan220203',
            'leader_github' => 'RyanFebrian2202',
            'leader_gender' => 'Male',
            'leader_CV' => 'dogdancing.png',
            'leader_card' => 'catdanginc.png',
        ]);
    }
}
