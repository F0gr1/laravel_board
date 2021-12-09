<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ThreadContent;
class ThreadContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            ThreadContent::create([
                'body' => '有馬記念はエフフォーリアとクロノジェネシス' . $i,
            ]);
        }
    }
}