<?php

namespace Database\Seeders;

use App\Models\HairColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HairColor::create(['hair_color' => 'Shade of Yellow']);
        HairColor::create(['hair_color' => 'Black']);
        HairColor::create(['hair_color' => 'Blue']);
        HairColor::create(['hair_color' => 'Shade of Blue']);
        HairColor::create(['hair_color' => 'Brown']);
        HairColor::create(['hair_color' => 'Shade of Brown']);
        HairColor::create(['hair_color' => 'Green']);
        HairColor::create(['hair_color' => 'Shade of Green']);
        HairColor::create(['hair_color' => 'Grey']);
        HairColor::create(['hair_color' => 'Shade of Grey']);
        HairColor::create(['hair_color' => 'Gradient']);
        HairColor::create(['hair_color' => 'Purple']);
        HairColor::create(['hair_color' => 'Orange']);
        HairColor::create(['hair_color' => 'Shade of Purple']);
        HairColor::create(['hair_color' => 'Pink']);
        HairColor::create(['hair_color' => 'Shade of Pink']);
        HairColor::create(['hair_color' => 'Red']);
        HairColor::create(['hair_color' => 'Shade of Red']);
        HairColor::create(['hair_color' => 'White']);
        HairColor::create(['hair_color' => 'Mixed Pattern']);#20

        HairColor::create(['hair_color' => 'Magenta']);
        HairColor::create(['hair_color' => 'Cyan']);
        HairColor::create(['hair_color' => 'goofy ahh multicolor pattern']);
        HairColor::create(['hair_color' => 'Hazel']);
        HairColor::create(['hair_color' => 'other']);


    }
}
