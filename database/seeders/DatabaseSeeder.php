<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\Post;
use App\Models\Recommend;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //  ContactMessage::factory(10)->create();
        // Post::factory(20)->create();
        Recommend::factory(3)->create();
    }
}
