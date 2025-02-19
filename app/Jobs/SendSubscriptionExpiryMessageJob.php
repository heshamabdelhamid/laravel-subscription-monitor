<?php

namespace App\Jobs;

use App\Enums\SubscriptionEnum;
use App\Models\Subscription;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendSubscriptionExpiryMessageJob implements ShouldQueue
{
    use Queueable;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $backoff = 5;

    /**
     * Create a new job instance.
     */
    public function __construct(public Subscription $subscription)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->subscription->update(["status" => SubscriptionEnum::CANCELD]);

        // Mail::to($this->subscription->customer->email)
        //     ->send(new SubscriptionMail($this->subscription));
    }

    //this for job failed
    // public function failed(\Exception $exception)
    // {
    // }

    // php artisan queue:retry all this command to retry all job failed
    // php artisan queue:retry 5 this to retry special job failed
    // php artisan queue:flush this to delete all job failed

}
