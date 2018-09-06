<?php

use Illuminate\Database\Seeder;
use \App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 除id为1以外的全部用户
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // $user 关注除 1 以外的全部用户
        $user->follow($follower_ids);

        // 其他用户关注 1号用户
        foreach ($followers as $follower){
            $follower->follow($user_id);
        }
    }
}
