<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
use Illuminate\Support\Str;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i<10; $i++){
            $video = new Video();

            $video->fill([
                'title' => Str::random(10),
                'author' => Str::random(10),
                'description' => Str::random(100),
                'img' => 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1280,h_720/https://blog.snappa.com/wp-content/uploads/2019/01/YouTube-Thumbnail-Dimensions.jpg',
                'like' => rand(0,1000),
                'dislike'=>rand(0,1000)
            ])->save();
        }
    }
}
