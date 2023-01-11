<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'title' => 'koolfzr',
            'body' => 'kooool koolfzr ',
            'user_id' => 1,
            'best_reply_id' => null
        ]);

        DB::table('conversations')->insert([
            'title' => 'koolfzr1',
            'body' => 'kooool koolfzr ',
            'user_id' => 2,
            'best_reply_id' => null
        ]);

        DB::table('conversations')->insert([
            'title' => 'koolfzr2',
            'body' => 'kooool koolfzr ',
            'user_id' => 3,
            'best_reply_id' => null
        ]);
    }
}
