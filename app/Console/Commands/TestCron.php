<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = DB::table('users')
            ->join('subscriptions', 'subscriptions.user_id', '=', 'users.id')
            ->join('plans', 'plans.plan_id', '=', 'subscriptions.name')->select('users.*', 'subscriptions.name as plan_name', 'subscriptions.updated_at as subscribe_date', 'plans.interval_count', 'plans.billing_method')->get();
        foreach ($data as $data) {
            if ($data->billing_method == 'week') {
                $days = $data->interval_count * 7;
                $PackageEndingDate = date('Y-m-d', strtotime($data->subscribe_date . $days));
                if ($data('Y-m-d')< $PackageEndingDate) {
                    // edhr mail send ka code likhna hy
                    $data = array('data' => 'Cron Testing');
                    Mail::send('mail', $data, function ($message) {
                        $message->to('zohashahid604@gmail.com')
                            ->subject('Cron jobs testing example');
                    });
                    // mail end
                }
            }
            if ($data->billing_method == 'month') {
                $days = $data->interval_count * 30;
                $PackageEndingDate = date('Y-m-d', strtotime($data->subscribe_date . $days));
                if ($data('Y-m-d')< $PackageEndingDate) {
                    // edhr mail send ka code likhna hy
                }
            }
            if ($data->billing_method == 'year') {
                $days = $data->interval_count * 365;
                $PackageEndingDate = date('Y-m-d', strtotime($data->subscribe_date . $days));
                if ($data('Y-m-d')< $PackageEndingDate) {
                    // edhr mail send ka code likhna hy
                }
            }
        }

        // $data = array('data' => 'Cron Testing');
        // Mail::send('mail', $data, function ($message) {
            //     $message->to('zohashahid604@gmail.com')
            //         ->subject('Cron jobs testing example');
        // });
        // Mail::send('admin.email.theme.theme2')->to('Zohashahid604@gmail.co}
    }
}
