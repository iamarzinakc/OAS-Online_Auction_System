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
        DB::table('users')->insert([
            'name' => 'Bibek',
            'email' => 'admin@gmail.com',
            'user_role_id' => 1,
            'per_address' => 'Butwal',
            'phone' => '9826365147',
            'password' => bcrypt('123456789'),
        ]);
    }
}
