<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '1'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '2'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '3'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '4'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '3',
            'uci_user_id' => '5'
        ]);

        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '6'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '7'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '8'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '9'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '3',
            'uci_user_id' => '10'
        ]);

        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '11'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '1',
            'uci_user_id' => '12'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '13'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '2',
            'uci_user_id' => '14'
        ]);
        DB::table('uci_role_user')->insert([
            'uci_role_id' => '3',
            'uci_user_id' => '15'
        ]);
    }
}
