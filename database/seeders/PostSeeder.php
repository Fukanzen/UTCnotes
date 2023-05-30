<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i=0; $i<5; $i++){
            Post::create([
                "title" => $faker->sentence(),
                "desc" => $faker->sentence()
            ]);
        }

    }
}
