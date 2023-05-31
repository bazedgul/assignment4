<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert([
            [
                'title' => 'Assignment 4',
                'description' => 'Hello I am Bazed Gul From UOL',
                'start_date' => '2023-06-01',
                'end_date' => '2023-06-07',
                'submission_type' => 'online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data here
        ]);
    }
}
