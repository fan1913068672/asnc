<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        'name'=>str_random(10),
        'email'=>'1913068672@qq.com',
        'password'=>bcrypt('admin'),
        'active'=>1,
        ]);
    }
}
