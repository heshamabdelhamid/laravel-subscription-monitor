<?php

use App\Console\Commands\SubscriptionExpiryNotification;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Schedule::command(SubscriptionExpiryNotification::class)->daily()->at('11:23');
