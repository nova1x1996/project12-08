<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Type::factory()->create([
            "name" => "Men",

        ]);
        \App\Models\Type::factory()->create([
            "name" => "Women",

        ]);
    }
}
