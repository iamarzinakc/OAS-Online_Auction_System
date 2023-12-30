<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'role' => 'Admin',
            'status' => 'On',
            
        ]);
    
        DB::table('user_roles')->insert([
            'role' => 'User',
            'status' => 'On',
            
        ]);
    }
}
