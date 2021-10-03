<?php

namespace Database\Seeders;

use App\Models\comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        comment::create([
            'content'=>'this is conentnttt',
                'product_id'=>1,
                'user_id'=>1,
        ]);
        comment::create([
            'content'=>'this is conentnttt',
                'product_id'=>1,
                'user_id'=>2,
        ]);
        comment::create([
            'content'=>'this is conentnttt',
                'product_id'=>2,
                'user_id'=>2,
        ]);
        comment::create([
            'content'=>'this is conentnttt',
                'product_id'=>2,
                'user_id'=>1,
        ]);
    }
}
