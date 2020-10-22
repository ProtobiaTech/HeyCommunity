<?php

namespace Database\Seeders;

use App\Models\Timeline;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Ramsey\Uuid\Type\Time;

class TimelineCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $userIds = \App\Models\User::pluck('id')->toArray();
        $timelineIds = \App\Models\Timeline::pluck('id')->toArray();

        foreach (range(1, 500) as $index) {
            $data[] = [
                'floor_number'  =>  1,

                'user_id'       =>  $faker->randomElement($userIds),
                'entity_type'   =>  Timeline::class,
                'entity_id'     =>  $faker->randomElement($timelineIds),

                'content'       =>  implode('', $faker->paragraphs(random_int(1, 3))),

                'created_at'    =>  $faker->dateTimeThisMonth(),
                'updated_at'    =>  $faker->dateTimeThisMonth(),
            ];
        }

        \App\Models\Common\Comment::insert($data);
    }
}
