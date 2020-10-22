<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [];

        $userIds = \App\Models\User::pluck('id')->toArray();

        foreach (range(1, 128) as $index) {
            $userId = $faker->randomElement($userIds);

            $data[] = [
                'user_id'       =>      $userId,
                'content'       =>      implode('', $faker->paragraphs(random_int(1, 6))),

                'created_at'    =>  $faker->dateTimeThisMonth(),
                'updated_at'    =>  $faker->dateTimeThisMonth(),
            ];
        }

        \App\Models\Timeline::insert($data);

        $timelineImageData = [];
        $timelineIds = range(1, 128);

        foreach ($timelineIds as $timelineId) {
            if (random_int(1, 10) <= 8) {
                foreach (range(1, random_int(1, 4)) as $index) {
                    $timelineImageData[] = [
                        'timeline_id'   =>  $timelineId,
                        'file_path'     =>  getImageFakerUrl(),
                    ];
                }
            }
        }

        \App\Models\TimelineImage::insert($timelineImageData);
    }
}
