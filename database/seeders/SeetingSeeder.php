<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use App\Models\GlobalSettings;
class SeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GlobalSettings = [
            [
                DB::table('global_settings')->insert([
                    'company_name'=>'AUDI AG',
                    'company_contact'=>'03008864',
                    'company_address'=>'Germany',
                    'company_city'=>'uk',
                    'country'=>'paris',
                    'company_phone'=>'03008864',
                    'company_email'=>'AUDI@gmail.com',
                    'company_domain'=>'inet',
                    'invoice_detail'=>'pay',
                    'tax'=>'1',
                    'second_tax'=>'400',
                    'vat_number'=>'03008',
                    'default_currency'=>'3',
                    'date_formate'=>'3-7-2022',
                    'time_formate'=>'2:13',
                    'timezone'=>'413',
                    'money_formate'=>'10,000',
                    'currency_position'=>'curr',
                    'company_logo'=>'../assets/images/image1.png',
                    'footer_logo'=>'../assets/images/image2.png',
                    'auth_logo'=>'../assets/images/image3.png',
                    'admin_logo'=>'../assets/images/image4.png',
                    'invoice_logo'=>'../assets/images/image5.png',
                ])

            ],
        ];


}
}

