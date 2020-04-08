<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = factory(\App\User::class, 30)->create();
       $user = $users[0];
       $user->name = 'YSH';
       $user->email = '786975768@qq.com';
       $user->save();
    }
}
