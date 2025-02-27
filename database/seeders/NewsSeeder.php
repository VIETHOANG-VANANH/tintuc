<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("news")->insert([
            ['title' => 'Tin Tức 1', 'content' => 'Nội dung tin tức 1'],
            ['title' => 'Tin tức 2', 'content' => 'Nội dung tin tức 2' ],
        ]);
    }
}
