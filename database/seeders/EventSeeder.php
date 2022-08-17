<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currentDateTime = date('Y-m-d H:i:s');
        DB::table('events')->insert([
            [
                'name' => 'sample name 1',
                'slug' => 'sample name 1',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-16 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name 2',
                'slug' => 'sample name 2',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-17 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name 3',
                'slug' => 'sample name 3',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-18 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name 4',
                'slug' => 'sample name 4',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-19 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name 5',
                'slug' => 'sample name 5',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-20 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ]);
    }
}
