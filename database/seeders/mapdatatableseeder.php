<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mapdatatableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('map-data')->insert([
            'poligon' => 'red',
            'latitude' => '-6.2',
            'longitude' => '106.816666',
        ]);

        DB::table('map-data')->insert([
            'poligon' => 'red',
            'latitude' => '-6.25',
            'longitude' => '106.816666',
        ]);
    }
}
