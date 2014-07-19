<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        LM\Models\User::create(
            array(
                'email' => 'info@laravelmyanmar.com',
                'username' => 'Admin',
                'profile_url' => 'admin',
                'password' => Hash::make('adminPassword'),
                'active' => '1',
            )
        );
    }

}