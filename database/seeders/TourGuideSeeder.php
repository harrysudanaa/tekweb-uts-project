<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('tour_guide')->increment('id');
        DB::table('tour_guide')->insert([
            'name' => 'Meli Sartika',
            'price' => '140000',
            'image' => 'meli.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Komang Ade',
            'price' => '120000',
            'image' => 'ade.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Caca Kuina',
            'price' => '170000',
            'image' => 'caca.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Krisna Gede',
            'price' => '240000',
            'image' => 'krisna.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Wahyu Sanjaya',
            'price' => '320000',
            'image' => 'wahyu.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Viona Indraswari',
            'price' => '290000',
            'image' => 'viona.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('tour_guide')->insert([
            'name' => 'Joe Han',
            'price' => '100000',
            'image' => 'joe.png',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
