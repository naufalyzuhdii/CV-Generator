<?php

namespace Database\Seeders;

use App\Models\Cv;
use App\Models\User;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create()->each(function($user){

            Cv::factory()->count(2)->create(['user_id'=>$user->id])->each(function ($cv){

                Skill::factory()->count(3)->create(['cv_id'=>$cv->id]);

            });

        });

        Experience::factory()->count(30)->state(new Sequence(
            ['cv_id'=>1],
            ['cv_id'=>2],
            ['cv_id'=>3],
            ['cv_id'=>4],
            ['cv_id'=>5],
            ['cv_id'=>6],
            ['cv_id'=>7],
            ['cv_id'=>8],
            ['cv_id'=>9],
            ['cv_id'=>10],
        ))->create();

        $this->call([
            UserSeeder::class,
        ]);
    }


}
