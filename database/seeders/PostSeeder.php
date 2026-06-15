<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title' => 'Belajar Laravel 11 untuk Pemula', 'slug' => 'belajar-laravel-11-untuk-pemula', 'author' => 'Vivin Mahat Putri', 'body'=>'lorem ipsun', 'category' => 'Programming', 'published_at' => '2024-05-10'],
            ['title' => 'Resep Nasi Goreng Spesial', 'slug' => 'resep-nasi-goreng', 'author' => 'Abimanyu','body'=>'Hello World', 'category' => 'Kuliner', 'published_at' => '2024-05-12'],
            ['title' => 'Review Laptop M3 Terbaru', 'slug' => 'review-laptop-m3-terbaru', 'author' => 'David','body'=>'Hello World', 'category' => 'Teknologi', 'published_at' => '2024-05-15'],
            ['title' => 'Tips Liburan Murah ke Bali', 'slug' => 'tips-liburan-murah-ke-bali', 'author' => 'Amiril', 'body'=>'Lorem ipsum' , 'category' => 'Travel', 'published_at' => '2024-05-18'],
            ['title' => 'Manfaat Olahraga Pagi', 'slug' => 'manfaat-olahraga-pagi', 'author' => 'Hawari', 'body'=>'Olahraga itu sehat', 'category' => 'Kesehatan', 'published_at' => '2024-05-20']
        ];

        foreach($posts as $post) {
            Post::create($post); 
        }        
    }
}
