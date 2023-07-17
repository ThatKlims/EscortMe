<?php

namespace Database\Seeders;

use App\Models\BoobaSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoobaSize::create(['booba_size' => 'Natural A cups']);
        BoobaSize::create(['booba_size' => 'Natural B cups']);
        BoobaSize::create(['booba_size' => 'Natural C cups']);
        BoobaSize::create(['booba_size' => 'Natural D cups']);
        BoobaSize::create(['booba_size' => 'Natural E cups']);
        BoobaSize::create(['booba_size' => 'Natural Beyond E cups']);
        BoobaSize::create(['booba_size' => 'Enhanced To C cups']);
        BoobaSize::create(['booba_size' => 'Enhanced To D cups']);
        BoobaSize::create(['booba_size' => 'Enhanced To E cups']);
        BoobaSize::create(['booba_size' => 'Enhanced Beyond E cups']);
    }
}
