<?php

namespace App\Console\Commands;

use App\Jobs\SendSubscriptionExpiryMessageJob;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SubscriptionExpiryNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:expiry-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check which subscriped users has been expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subscriptions = Subscription::with('customer')
            ->where('end_date', '<', Carbon::now())
            ->get();

        foreach ($subscriptions as $subscription) {
            dispatch(new SendSubscriptionExpiryMessageJob($subscription));
        }
    }
}
