<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create three sample posts
        Post::create([
            'title' => 'Getting Started with Laravel',
            'content' => 'Learn the basics of Laravel framework and build your first application.',
        ]);

        Post::create([
            'title' => 'Understanding Eloquent ORM',
            'content' => 'Dive deeper into Laravel\'s Eloquent ORM and learn how to work with databases efficiently.',
        ]);

        Post::create([
            'title' => 'Building RESTful APIs',
            'content' => 'A comprehensive guide to building RESTful APIs using Laravel with proper routing and controllers.',
        ]);
    }
}
