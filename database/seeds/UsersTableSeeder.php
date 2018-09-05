<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->update([
            'name'      => 'xcyz360',
            'email'     => 'xcyz360@yeah.net',
            'password'  => bcrypt('password'),
            'is_admin'  => true,
            'activated' => true,
        ]);

        $user = User::find(2);
        $user->update([
            'name'     => 'summer',
            'email'    => 'summer@yousails.com',
            'password' => bcrypt('password')
        ]);
    }
}
