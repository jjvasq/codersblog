<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=50; $i++){
            Image::create([
                'url' => 'posts/'.$i.'.png',
                'imageable_id' => $i,
                'imageable_type' => Post::class,
            ]);
        }
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->tags()->attach([
                rand(1, 4),
                rand(5, 8),
            ]);
        }
    }
}
