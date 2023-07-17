<?php

namespace Database\Seeders;

use App\Models\Ethnicity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ethnicity::create(['ethnicity' => 'African American']);
        Ethnicity::create(['ethnicity' => 'Afrikaners']);
        Ethnicity::create(['ethnicity' => 'Arabs']);
        Ethnicity::create(['ethnicity' => 'Arawak People']);
        Ethnicity::create(['ethnicity' => 'Asian American']);
        Ethnicity::create(['ethnicity' => 'Balinese']);
        Ethnicity::create(['ethnicity' => 'Bantu People']);
        Ethnicity::create(['ethnicity' => 'Basques']);
        Ethnicity::create(['ethnicity' => 'Cajuns']);
        Ethnicity::create(['ethnicity' => 'Catalans']);
        Ethnicity::create(['ethnicity' => 'Caucasian']);
        Ethnicity::create(['ethnicity' => 'Cebuano']);
        Ethnicity::create(['ethnicity' => 'Cherokee']);
        Ethnicity::create(['ethnicity' => 'Han Chinese']);
        Ethnicity::create(['ethnicity' => 'Hispanic/Latino']);
        Ethnicity::create(['ethnicity' => 'Hutu People']);
        Ethnicity::create(['ethnicity' => 'Ilocano People']);
        Ethnicity::create(['ethnicity' => 'Kongo People']);
        Ethnicity::create(['ethnicity' => 'Kurds']);
        Ethnicity::create(['ethnicity' => 'Maori']);
        Ethnicity::create(['ethnicity' => 'Middle Eastern']);
        Ethnicity::create(['ethnicity' => 'Mixed']);
        Ethnicity::create(['ethnicity' => 'Native American']);
        Ethnicity::create(['ethnicity' => 'Pacific Islander']);
        Ethnicity::create(['ethnicity' => 'Samoans']);
        Ethnicity::create(['ethnicity' => 'Sioux']);
    }
}
