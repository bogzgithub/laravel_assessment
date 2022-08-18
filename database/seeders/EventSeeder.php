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
                'name' => 'sample name1',
                'slug' => 'sample slug1',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-16 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name2',
                'slug' => 'sample slug2',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-17 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name3',
                'slug' => 'sample slug3',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-18 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name4',
                'slug' => 'sample slug4',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-19 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'sample name5',
                'slug' => 'sample slug5',
                'startAt' => '2022-08-15 11:30:00',
                'endAt' => '2022-08-20 11:30:00',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ]);
    }
}
