<?php

namespace App\Http\Controllers;

use App\Enums\SubscriptionEnum;
use App\Jobs\SendSubscriptionExpiryMessageJob;
use App\Models\Subscription;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function __invoke()
    {
        $subscriptions = Subscription::with(['customer', 'plan'])
            ->where('end_date', '<', Carbon::now())->get();

        foreach ($subscriptions as $subscription) {
            $subscription->update(["status" => SubscriptionEnum::CANCELD]);
            dispatch(new SendSubscriptionExpiryMessageJob($subscription))
                ->onQueue('subscription_expiry');
        }
    }
}
