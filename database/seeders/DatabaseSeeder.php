<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CustomerFactory;
use Database\Factories\PlanFactory;
use Database\Factories\SubscriptionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CoustomerSeed::class,
            PlanSeed::class,
//            SubscriptionSeed::class,
        ]);

    }
}
