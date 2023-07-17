<?php

namespace Database\Seeders;

use App\Models\WillingToEscort;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WillingToEscortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WillingToEscort::create(['willing_to_escort' => 'Men']);
        WillingToEscort::create(['willing_to_escort' => 'Women']);
        WillingToEscort::create(['willing_to_escort' => 'All']);
    }
}
