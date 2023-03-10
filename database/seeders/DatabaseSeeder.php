<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Conversation;
use App\Models\Reply;
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
        // $this->call([
        //     \App\Models\User::factory(5)->create(),
        //     \App\Models\Conversation::factory(5)->create(),
        //     \App\Models\Reply::factory(5)->create()
        // ]);


        // \App\Models\Reply::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ConversationSeeder::class,
            UserSeeder::class,
            ReplySeeder::class,
        ]);
    }
}
