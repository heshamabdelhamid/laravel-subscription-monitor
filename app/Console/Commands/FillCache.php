<?php
namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class FillCache extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle() {
        $customers = Customer::select('id', 'name')->get();

        if (isset($customers)) {
            foreach ($customers as $customer) {
                Cache::set("customer_id_{$customer->id}", $customer->id);
            }
        }
    }
}
