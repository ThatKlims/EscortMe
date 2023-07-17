<?php

namespace Database\Seeders;

use App\Models\EyeColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EyeColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EyeColor::create(['eye_color' => 'Natural Amber']);
        EyeColor::create(['eye_color' => 'Natural Brown']);
        EyeColor::create(['eye_color' => 'Natural Gray']);
        EyeColor::create(['eye_color' => 'Natural Green']);
        EyeColor::create(['eye_color' => 'Natural Hazel']);
        EyeColor::create(['eye_color' => 'Natural Red']);
        EyeColor::create(['eye_color' => 'Natural Mixed']);

        EyeColor::create(['eye_color' => 'Amber Lens']);
        EyeColor::create(['eye_color' => 'Brown Lens']);
        EyeColor::create(['eye_color' => 'Gray Lens']);
        EyeColor::create(['eye_color' => 'Green Lens']);
        EyeColor::create(['eye_color' => 'Hazel Lens']);
        EyeColor::create(['eye_color' => 'Red Lens']);
        EyeColor::create(['eye_color' => 'Pink Lens']);
        EyeColor::create(['eye_color' => 'Purple Lens']);
        EyeColor::create(['eye_color' => 'White Lens']);
        EyeColor::create(['eye_color' => 'Black Lens']);
        EyeColor::create(['eye_color' => 'Yellow Lens']);
        EyeColor::create(['eye_color' => 'Orange Lens']);
        EyeColor::create(['eye_color' => 'Scarlet Lens']);
        EyeColor::create(['eye_color' => 'Magenta Lens']);
        EyeColor::create(['eye_color' => 'Cyan Lens']);
        EyeColor::create(['eye_color' => 'Navy Lens']);


        EyeColor::create(['eye_color' => 'goofy ahh multicolor pattern Lens']);
        EyeColor::create(['eye_color' => 'Mixed Lens']);
        EyeColor::create(['eye_color' => 'Multicolor Lens']);
        EyeColor::create(['eye_color' => 'other']);
    }
}
