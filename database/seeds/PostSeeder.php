<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create();

        $colors = [ // https://via.placeholder.com/150/0000FF/FFFFFF/?text=Digital.com
            'FFFFFF', //White
            '000000', //Black
            'FF0000', //Red
            '0000FF', //Blue
            'FFFFFF', //Yellow
            '008000', //Green
        ];
        $max_colors_index = count($colors) -1;

        foreach (range(1, 100) as $k)
        {
            $title      = 'Post '. $k .' Title '. $faker->sentence(2);
            $color      = $colors[rand(0, $max_colors_index)];
            $image_url  = "https://via.placeholder.com/150/0000FF/${color}/?text=${title}";

            $post = [
                'title'  => $title,
                'image'  => $image_url,
                'body'   => $faker->sentence(10),
            ];

            Post::updateOrCreate(
                ['title' => $post['title']],
                $post,
            );
        }
    }
}
