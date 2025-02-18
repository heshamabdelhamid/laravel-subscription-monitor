<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::factory(10)->create();
    }
}
