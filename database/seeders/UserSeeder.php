<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<=5 ;$i++){
            $user=User::factory()->create();
            $profile = Profile::factory()->for($user)->has(Group::factory())->create();
            Post::factory()->for($profile)->create();
        }
    }
}
