<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample1.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample2.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample3.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample4.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => '',
                'filename' => 'sample5.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample6.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample7.jpg',   
            ],
            [
                'owner_id' => 1,
                'title' => 'ここに店名が入ります',
                'filename' => 'sample8.jpg'],   
            ]);
    }
}
