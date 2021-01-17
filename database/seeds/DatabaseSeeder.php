<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'emp_id' => '1',
            'firstname' => 'Admin',
            'middlename' => '',
            'lastname' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'position' => 'MIS',
            'division' => 1,
            'unit' => 1,
            'role' => 1,
            'gender' => '-',
        ]
    }
}
