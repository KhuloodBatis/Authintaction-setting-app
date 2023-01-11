<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 1,
        ]);

        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 1,
        ]);

        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 1,
        ]);

        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 2,
        ]);

        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 2,
        ]);

        DB::table('replies')->insert([
            'body' => 'kool',
            'user_id' => 4,
            'conversation_id' => 2,
        ]);
    }
}
