<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categoryies')->insert([
            [
                'name' => 'キッズファッション',
                'sort_order' => 1,
            ]
            ]);
    }
}
