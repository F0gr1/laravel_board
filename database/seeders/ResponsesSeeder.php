<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Response;
class ResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Response::create([
                'name' => 'name' . $i,
                'thread_id'=> $i,
                'message' => 'message' . $i,
                'ip_addr' => $i,
                'posted_at'=> '2021-12-21 15:38:'.$i
            ]);
        }
    }
}
