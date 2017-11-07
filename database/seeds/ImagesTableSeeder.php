<?php

use Illuminate\Database\Seeder;

use App\Image;
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imageLinks = [
            "images/c1",
            "images/c2",
            "images/c3",
            "images/c4",
            "images/c5",
            "images/c6"
        ];
        foreach ($imageLinks as $imageLink) {
            Image::create([
               'title' => $faker->text(80),
                'description' => $content = $faker->paragraph(18),
                'imageLink' => $imageLink . ".jpg",
            ]);
        }
    }
}
