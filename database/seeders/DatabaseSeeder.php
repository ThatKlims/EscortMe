<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		$this->call(LaratrustSeeder::class);
        $this->call(WillingToEscortSeeder::class);
        $this->call(EyeColorSeeder::class);
        $this->call(HairColorSeeder::class);
        $this->call(BoobaSeeder::class);
        $this->call(EthnicitySeeder::class);
        $this->call(AdminUserSeeder::class);
    }
}
