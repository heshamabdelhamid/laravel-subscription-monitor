<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::factory(10)->create();
    }
}
