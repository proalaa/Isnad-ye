<?php

namespace App\Console\Commands;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Console\Command;

class checkOrderStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check order status and change it if needed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $share_done = Order::all()->where('share_end_at' , '<=' , Carbon::now())->where('status' , '==' , '2')->pluck('id');
        Order::whereIn('id' ,$share_done)->update(['status' => '3']);

        $offering_done = Order::all()->where('offering_end_at' , '<=' , Carbon::now())->where('status' , '==' , '3')->pluck('id');
        Order::whereIn('id',$offering_done)->update(['status' => '4']);

        $vote_done = Order::all()->where('vote_end_at' , '<=' , Carbon::now())->where('status' , '==' , '4')->pluck('id');
         Order::whereIn('id',$vote_done)->update(['status' => '5']);

         $this->info('order has been checked successfully');

    }
}
