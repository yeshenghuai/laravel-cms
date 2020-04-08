<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;

class AdminSeeder extends Seeder
{
    use HasRoles;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Admin::class, 6)->create();
        $user = $users[0];
        $user->name = 'admin';
        $user->nickname = 'YSH';
        $user->save();

        \Spatie\Permission\Models\Role::create([
            'title' => '站长',
            'name' => 'webmaster',
            'guard_name' => 'admin'
        ]);

        $user->assignRole('webmaster');
    }
}
