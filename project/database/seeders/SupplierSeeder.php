<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Supplier::factory()->create([
            "name" => "Casio",
            "logo" => "Supplier\Casio.jpg"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Citizen",
            "logo" => "Supplier\Citizen.jpg"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Doxa",
            "logo" => "Supplier\Doxa.jpg"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Logines",
            "logo" => "Supplier\Logines.jpg"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Sieko",
            "logo" => "Supplier\Sieko.png"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Rolex",
            "logo" => "Supplier/rolox.png"
        ]);
        \App\Models\Supplier::factory()->create([
            "name" => "Omega",
            "logo" => "Supplier\omega.png"
        ]);
    }
}
