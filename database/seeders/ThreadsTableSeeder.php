<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;
class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) {
            Thread::create([
                'name' => 'name' . $i,
                'body' => 'えっち' . $i,
            ]);
}
    }
}
