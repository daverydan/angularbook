<?php

use App\Image;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

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
        $imageLinks = array(
	        "images/img1",
	        "images/img2",
	        "images/img3",
	        "images/img4",
	        "images/img5",
	        "images/img6",
	        "images/img7",
	        "images/img8",
        );

        foreach($imageLinks as $imageLink) {
	        Image::create([
		        'title' => $faker->text(80),
		        'description' => $content = $faker->paragraph(18),
		        'thumbnail' => $imageLink.".jpg",
		        'imageLink' => $imageLink."-l.jpg",
		        'user_id' => $faker->numberBetween($min = 1, $max = 5),
	        ]);
        }
    }
}