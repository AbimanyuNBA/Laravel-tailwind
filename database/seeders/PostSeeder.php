<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title'  => 'Judul Artikel 1',
            'slug'   => 'judul-artikel-1',
            'author' => 'Vivin Mahat Putri',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                         Quam harum ea ex magni eligendi cumque.',
        ]);

        Post::create([
            'title'  => 'Judul Artikel 2',
            'slug'   => 'judul-artikel-2',
            'author' => 'Vivin Mahat Putri',
            'body'   => 'Repudiandae accusamus dolores nemo veniam blanditiis eius 
                         autem eligendi quasi neque dolorem necessitatibus.',
        ]);

        Post::create([
            'title'  => 'Judul Artikel 3',
            'slug'   => 'judul-artikel-3',
            'author' => 'Budi Santoso',
            'body'   => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                         accusantium doloremque laudantium totam rem aperiam.',
        ]);
    }
}
