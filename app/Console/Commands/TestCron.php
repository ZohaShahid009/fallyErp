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
                strtotime($data->subscribe_date . $days);
                // dd( date('Y-m-d', strtotime($data->subscribe_date . $days)));
                //  dd (gettype($data->subscribe_date));
                // dd($days);
                $PackageEndingDate = date('Y-m-d', strtotime($data->subscribe_date ." + ". $days." days"));
                if (date('Y-m-d') < $PackageEndingDate)
                 {
                    $data = array('data' => 'Cron Testing');
                    Mail::send('mail', $data, function ($message)
                     {
                        $message->to('zohashahid604@gmail.com')
                           ->subject('Cron jobs testing example');
                    });

                    // mail end
                }
            }
            // next1
            if ($data->billing_method == 'month') {
                $days = $data->interval_count * 30;
                strtotime($data->subscribe_date . $days);
                $PackageEndingDate = date('Y-m-d', strtotime($data->subscribe_date ." + ". $days." days"));
                if (date('Y-m-d') < $PackageEndingDate)
                 {
                    $data = array('data' => 'Cron Testing');
                    Mail::send('mail', $data, function ($message)
                     {
                        $message->to('zohashahid604@gmail.com')
                           ->subject('Cron jobs testing example');
                    });

                    // mail end
                }
            }
            // next1 end
        }
    }
}



        // Mail::send('admin.email.theme.theme2')->to('Zohashahid604@gmail.com}
                //     $email_data = array(
                //         'name' => $data['name'],
                //         'email' => $data['email'],
                //     );
                //     Mail::send('welcome_email', $email_data, function ($message) use ($email_data) {
                //         $message->to($email_data['email'], $email_data['name'])
                //             ->subject('Welcome to MyNotePaper')
                //             ->from('info@mynotepaper.com', 'MyNotePaper');
                //     });


