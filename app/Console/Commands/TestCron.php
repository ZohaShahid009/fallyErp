<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Illuminate\Http\Request;


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
        $data=array('data'=>'Cron Testing');
        Mail::send('mail',$data,function($message){
            $message->to('zohashahid604@gmail.com')
            ->subject('Cron jobs testing example');
        });
        // Mail::send('admin.email.theme.theme2')->to('Zohashahid604@gmail.com');

    }
}
