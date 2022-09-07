<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use App\Models\Stripeconfig;

class StripeconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nnn
         $Stripeconfig = [
            [
                DB::table('stripeconfigs')->insert([
                    'stripe_id'=>'1',
                    'stripe_status'=>'Active',

                ])

            ],
        ];

    }
}
