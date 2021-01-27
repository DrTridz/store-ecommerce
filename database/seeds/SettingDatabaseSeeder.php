<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale'=>'ar',
            'default_timezone'=>'Asia/Riyadh',
            'reviews_enabled'=>'true',
            'auto_approve_reviews'=>'true',
            'supported_currencies'=> ['USD','LE','SAR'],
            'default_currency'=>'USD',
            'store_email'=>'admin@ecommerce.test',
            'search_engine'=>'mysql',
            'local_shipping_cost'=>0,
            'outer_shipping cost'=>0,
            'free shipping_cost'=>0,
            'translatable'=>[
                'store_name'=>'متجري',
                'free_shipping_label' => 'توصيل مجاني',
                'Local_label'=>'توصيل داخلي',
                'outer_label'=>'توصيل خارجي',
            ],

        ]);
    }
}
