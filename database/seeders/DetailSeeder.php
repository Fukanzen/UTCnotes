<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        $post_id = Post::pluck("id");
        $CountId = count($post_id);
        for($i=0; $i<$CountId; $i++){
            Detail::create([
                "post_id" => $post_id[$i],
                "date" => $faker->dateTime(),
                "author" => $faker->name(),
                "body" => $faker->paragraph()            
            ]);
        }
    }
}
