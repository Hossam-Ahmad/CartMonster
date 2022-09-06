<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class IsyolSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('isyol_settings')->delete();
        
        \DB::table('isyol_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'home_default_currency',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-16 01:35:52',
                'updated_at' => '2019-01-28 01:26:53',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'system_default_currency',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-16 01:36:58',
                'updated_at' => '2020-01-26 04:22:13',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'currency_format',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-17 03:01:59',
                'updated_at' => '2018-10-17 03:01:59',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'symbol_format',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-17 03:01:59',
                'updated_at' => '2019-01-20 02:10:55',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'no_of_decimals',
                'value' => '2',
                'lang' => NULL,
                'created_at' => '2018-10-17 03:01:59',
                'updated_at' => '2020-03-04 00:57:16',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'product_activation',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 01:38:37',
                'updated_at' => '2019-02-04 01:11:41',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'vendor_system_activation',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:44:16',
                'updated_at' => '2019-02-04 01:11:38',
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'show_vendors',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:44:47',
                'updated_at' => '2019-02-04 01:11:13',
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 'paypal_payment',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:45:16',
                'updated_at' => '2019-01-31 05:09:10',
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 'stripe_payment',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:45:47',
                'updated_at' => '2022-07-17 17:24:53',
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 'cash_payment',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:46:05',
                'updated_at' => '2019-01-24 03:40:18',
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 'payumoney_payment',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2018-10-28 07:46:27',
                'updated_at' => '2019-03-05 05:41:36',
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'best_selling',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2018-12-24 08:13:44',
                'updated_at' => '2019-02-14 05:29:13',
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 'paypal_sandbox',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-01-16 12:44:18',
                'updated_at' => '2019-01-16 12:44:18',
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 'sslcommerz_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-01-16 12:44:18',
                'updated_at' => '2019-03-14 00:07:26',
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 'sslcommerz_payment',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-01-24 09:39:07',
                'updated_at' => '2019-01-29 06:13:46',
            ),
            16 => 
            array (
                'id' => 17,
                'type' => 'vendor_commission',
                'value' => '20',
                'lang' => NULL,
                'created_at' => '2019-01-31 06:18:04',
                'updated_at' => '2019-04-13 06:49:26',
            ),
            17 => 
            array (
                'id' => 18,
                'type' => 'verification_form',
                'value' => '[{"type":"text","label":"Your name"},{"type":"text","label":"Shop name"},{"type":"text","label":"Email"},{"type":"text","label":"License No"},{"type":"text","label":"Full Address"},{"type":"text","label":"Phone Number"},{"type":"file","label":"Tax Papers"}]',
                'lang' => NULL,
                'created_at' => '2019-02-03 11:36:58',
                'updated_at' => '2019-02-16 06:14:42',
            ),
            18 => 
            array (
                'id' => 19,
                'type' => 'google_analytics',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-02-06 12:22:35',
                'updated_at' => '2022-07-26 04:51:27',
            ),
            19 => 
            array (
                'id' => 20,
                'type' => 'facebook_login',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-02-07 12:51:59',
                'updated_at' => '2019-02-08 19:41:15',
            ),
            20 => 
            array (
                'id' => 21,
                'type' => 'google_login',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-02-07 12:52:10',
                'updated_at' => '2019-02-08 19:41:14',
            ),
            21 => 
            array (
                'id' => 22,
                'type' => 'twitter_login',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-02-07 12:52:20',
                'updated_at' => '2019-02-08 02:32:56',
            ),
            22 => 
            array (
                'id' => 23,
                'type' => 'payumoney_payment',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-03-05 11:38:17',
                'updated_at' => '2019-03-05 11:38:17',
            ),
            23 => 
            array (
                'id' => 24,
                'type' => 'payumoney_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-03-05 11:38:17',
                'updated_at' => '2019-03-05 05:39:18',
            ),
            24 => 
            array (
                'id' => 36,
                'type' => 'facebook_chat',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-04-15 11:45:04',
                'updated_at' => '2019-04-15 11:45:04',
            ),
            25 => 
            array (
                'id' => 37,
                'type' => 'email_verification',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-04-30 07:30:07',
                'updated_at' => '2019-04-30 07:30:07',
            ),
            26 => 
            array (
                'id' => 38,
                'type' => 'wallet_system',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-05-19 08:05:44',
                'updated_at' => '2022-07-14 15:18:32',
            ),
            27 => 
            array (
                'id' => 39,
                'type' => 'coupon_system',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-06-11 09:46:18',
                'updated_at' => '2022-07-14 15:18:30',
            ),
            28 => 
            array (
                'id' => 40,
                'type' => 'current_version',
                'value' => '6.1.2',
                'lang' => NULL,
                'created_at' => '2019-06-11 09:46:18',
                'updated_at' => '2019-06-11 09:46:18',
            ),
            29 => 
            array (
                'id' => 41,
                'type' => 'instamojo_payment',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-07-06 09:58:03',
                'updated_at' => '2019-07-06 09:58:03',
            ),
            30 => 
            array (
                'id' => 42,
                'type' => 'instamojo_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2019-07-06 09:58:43',
                'updated_at' => '2019-07-06 09:58:43',
            ),
            31 => 
            array (
                'id' => 43,
                'type' => 'razorpay',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-07-06 09:58:43',
                'updated_at' => '2019-07-06 09:58:43',
            ),
            32 => 
            array (
                'id' => 44,
                'type' => 'paystack',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-07-21 13:00:38',
                'updated_at' => '2019-07-21 13:00:38',
            ),
            33 => 
            array (
                'id' => 45,
                'type' => 'pickup_point',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 11:50:39',
                'updated_at' => '2019-10-17 11:50:39',
            ),
            34 => 
            array (
                'id' => 46,
                'type' => 'maintenance_mode',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 11:51:04',
                'updated_at' => '2019-10-17 11:51:04',
            ),
            35 => 
            array (
                'id' => 47,
                'type' => 'voguepay',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 11:51:24',
                'updated_at' => '2019-10-17 11:51:24',
            ),
            36 => 
            array (
                'id' => 48,
                'type' => 'voguepay_sandbox',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2019-10-17 11:51:38',
                'updated_at' => '2019-10-17 11:51:38',
            ),
            37 => 
            array (
                'id' => 50,
                'type' => 'category_wise_commission',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-01-21 07:22:47',
                'updated_at' => '2020-01-21 07:22:47',
            ),
            38 => 
            array (
                'id' => 51,
                'type' => 'conversation_system',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-01-21 07:23:21',
                'updated_at' => '2020-01-21 07:23:21',
            ),
            39 => 
            array (
                'id' => 52,
                'type' => 'guest_checkout_active',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-01-22 07:36:38',
                'updated_at' => '2020-01-22 07:36:38',
            ),
            40 => 
            array (
                'id' => 53,
                'type' => 'facebook_pixel',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-01-22 11:43:58',
                'updated_at' => '2020-01-22 11:43:58',
            ),
            41 => 
            array (
                'id' => 55,
                'type' => 'classified_product',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-05-13 13:01:05',
                'updated_at' => '2022-07-14 15:18:31',
            ),
            42 => 
            array (
                'id' => 56,
                'type' => 'pos_activation_for_seller',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-06-11 09:45:02',
                'updated_at' => '2020-06-11 09:45:02',
            ),
            43 => 
            array (
                'id' => 57,
                'type' => 'shipping_type',
                'value' => 'area_wise_shipping',
                'lang' => NULL,
                'created_at' => '2020-07-01 13:49:56',
                'updated_at' => '2020-07-01 13:49:56',
            ),
            44 => 
            array (
                'id' => 58,
                'type' => 'flat_rate_shipping_cost',
                'value' => '10',
                'lang' => NULL,
                'created_at' => '2020-07-01 13:49:56',
                'updated_at' => '2020-07-01 13:49:56',
            ),
            45 => 
            array (
                'id' => 59,
                'type' => 'shipping_cost_admin',
                'value' => '10',
                'lang' => NULL,
                'created_at' => '2020-07-01 13:49:56',
                'updated_at' => '2020-07-01 13:49:56',
            ),
            46 => 
            array (
                'id' => 60,
                'type' => 'payhere_sandbox',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-07-30 18:23:53',
                'updated_at' => '2020-07-30 18:23:53',
            ),
            47 => 
            array (
                'id' => 61,
                'type' => 'payhere',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-07-30 18:23:53',
                'updated_at' => '2020-07-30 18:23:53',
            ),
            48 => 
            array (
                'id' => 62,
                'type' => 'google_recaptcha',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-08-17 07:13:37',
                'updated_at' => '2020-08-17 07:13:37',
            ),
            49 => 
            array (
                'id' => 63,
                'type' => 'ngenius',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2020-09-22 10:58:21',
                'updated_at' => '2020-09-22 10:58:21',
            ),
            50 => 
            array (
                'id' => 64,
                'type' => 'header_logo',
                'value' => '1548',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:18:43',
            ),
            51 => 
            array (
                'id' => 65,
                'type' => 'show_language_switcher',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            52 => 
            array (
                'id' => 66,
                'type' => 'show_currency_switcher',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            53 => 
            array (
                'id' => 67,
                'type' => 'header_stikcy',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            54 => 
            array (
                'id' => 68,
                'type' => 'footer_logo',
                'value' => '1549',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:18:23',
            ),
            55 => 
            array (
                'id' => 69,
                'type' => 'about_us_description',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            56 => 
            array (
                'id' => 70,
                'type' => 'contact_address',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            57 => 
            array (
                'id' => 71,
                'type' => 'contact_phone',
                'value' => '00905362775997',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            58 => 
            array (
                'id' => 72,
                'type' => 'contact_email',
                'value' => 'info@isyol.com',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            59 => 
            array (
                'id' => 73,
                'type' => 'widget_one_labels',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            60 => 
            array (
                'id' => 74,
                'type' => 'widget_one_links',
                'value' => '["https:\\/\\/isyol.com\\/privacy-policy","https:\\/\\/isyol.com\\/support-policy","https:\\/\\/isyol.com\\/return-policy","https:\\/\\/isyol.com\\/terms","https:\\/\\/isyol.com\\/distance-sales-contract"]',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-07-14 17:11:13',
            ),
            61 => 
            array (
                'id' => 75,
                'type' => 'widget_one',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            62 => 
            array (
                'id' => 76,
                'type' => 'frontend_copyright_text',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            63 => 
            array (
                'id' => 77,
                'type' => 'show_social_links',
                'value' => 'on',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            64 => 
            array (
                'id' => 78,
                'type' => 'facebook_link',
                'value' => 'https://facebook.com/isyolcom',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            65 => 
            array (
                'id' => 79,
                'type' => 'twitter_link',
                'value' => 'https://twitter.com/isyolcom',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            66 => 
            array (
                'id' => 80,
                'type' => 'instagram_link',
                'value' => 'https://instagram.com/isyolcom',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            67 => 
            array (
                'id' => 81,
                'type' => 'youtube_link',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            68 => 
            array (
                'id' => 82,
                'type' => 'linkedin_link',
                'value' => 'https://www.linkedin.com/company/isyolcom',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            69 => 
            array (
                'id' => 83,
                'type' => 'payment_method_images',
                'value' => '83,84,85,86,87',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            70 => 
            array (
                'id' => 90,
                'type' => 'home_categories',
                'value' => '["22","23"]',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-07-16 00:44:06',
            ),
            71 => 
            array (
                'id' => 91,
                'type' => 'top10_categories',
                'value' => '["4","5","24","6","7","8","9","3","42","43"]',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-07-21 20:28:09',
            ),
            72 => 
            array (
                'id' => 92,
                'type' => 'top10_brands',
                'value' => '["1","2","3","4","6","8","10","11","13","42"]',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            73 => 
            array (
                'id' => 93,
                'type' => 'website_name',
                'value' => 'isyol',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            74 => 
            array (
                'id' => 94,
                'type' => 'site_motto',
                'value' => 'Turkish Brands To The World',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            75 => 
            array (
                'id' => 95,
                'type' => 'site_icon',
                'value' => '1550',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:23:26',
            ),
            76 => 
            array (
                'id' => 96,
                'type' => 'base_color',
                'value' => '#050a30',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:02:09',
            ),
            77 => 
            array (
                'id' => 97,
                'type' => 'base_hov_color',
                'value' => '#4bfb35',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:02:09',
            ),
            78 => 
            array (
                'id' => 98,
                'type' => 'meta_title',
                'value' => 'ازيول - الماركات التركية للعالم',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            79 => 
            array (
                'id' => 99,
                'type' => 'meta_description',
                'value' => 'منصة ازيول أكبر منصة تداول تجمع جميع المنتجات في تركيا
مع خدمة الشحن السريع لجميع دول العالم',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            80 => 
            array (
                'id' => 100,
                'type' => 'meta_keywords',
                'value' => 'إزيول ، Isyol ، أونلاين ، تركي ، سوق ، موقع ، ملابس ، تركية ، تركية',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            81 => 
            array (
                'id' => 101,
                'type' => 'meta_image',
                'value' => '89',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            82 => 
            array (
                'id' => 102,
                'type' => 'site_name',
                'value' => 'ISYOL MARKETPLACE',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-07-15 20:50:07',
            ),
            83 => 
            array (
                'id' => 103,
                'type' => 'system_logo_white',
                'value' => '1549',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:18:36',
            ),
            84 => 
            array (
                'id' => 104,
                'type' => 'system_logo_black',
                'value' => '1548',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-08-15 10:18:36',
            ),
            85 => 
            array (
                'id' => 105,
                'type' => 'timezone',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2020-11-16 07:26:36',
            ),
            86 => 
            array (
                'id' => 106,
                'type' => 'admin_login_background',
                'value' => '1243',
                'lang' => NULL,
                'created_at' => '2020-11-16 07:26:36',
                'updated_at' => '2022-07-17 15:06:25',
            ),
            87 => 
            array (
                'id' => 107,
                'type' => 'iyzico_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-12-30 16:45:56',
                'updated_at' => '2020-12-30 16:45:56',
            ),
            88 => 
            array (
                'id' => 108,
                'type' => 'iyzico',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-12-30 16:45:56',
                'updated_at' => '2020-12-30 16:45:56',
            ),
            89 => 
            array (
                'id' => 109,
                'type' => 'decimal_separator',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2020-12-30 16:45:56',
                'updated_at' => '2020-12-30 16:45:56',
            ),
            90 => 
            array (
                'id' => 110,
                'type' => 'nagad',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2021-01-22 10:30:03',
                'updated_at' => '2021-01-22 10:30:03',
            ),
            91 => 
            array (
                'id' => 111,
                'type' => 'bkash',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2021-01-22 10:30:03',
                'updated_at' => '2021-01-22 10:30:03',
            ),
            92 => 
            array (
                'id' => 112,
                'type' => 'bkash_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-01-22 10:30:03',
                'updated_at' => '2021-01-22 10:30:03',
            ),
            93 => 
            array (
                'id' => 113,
                'type' => 'header_menu_labels',
                'value' => '["Home","All Categories","Flash Sale","Coupons"]',
                'lang' => NULL,
                'created_at' => '2021-02-16 02:43:11',
                'updated_at' => '2022-08-03 05:56:10',
            ),
            94 => 
            array (
                'id' => 114,
                'type' => 'header_menu_links',
                'value' => '["https:\\/\\/isyol.com","https:\\/\\/isyol.com\\/categories","https:\\/\\/isyol.com\\/flash-deals","https:\\/\\/isyol.com\\/coupons"]',
                'lang' => NULL,
                'created_at' => '2021-02-16 02:43:11',
                'updated_at' => '2022-08-03 05:56:10',
            ),
            95 => 
            array (
                'id' => 115,
                'type' => 'proxypay',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-06-20 11:25:42',
                'updated_at' => '2021-06-20 11:25:42',
            ),
            96 => 
            array (
                'id' => 116,
                'type' => 'proxypay_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-06-20 11:25:42',
                'updated_at' => '2021-06-20 11:25:42',
            ),
            97 => 
            array (
                'id' => 117,
                'type' => 'google_map',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-07-27 15:49:39',
                'updated_at' => '2022-07-28 04:22:17',
            ),
            98 => 
            array (
                'id' => 118,
                'type' => 'google_firebase',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-07-27 15:49:39',
                'updated_at' => '2022-07-28 07:32:51',
            ),
            99 => 
            array (
                'id' => 119,
                'type' => 'authorizenet_sandbox',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2021-02-16 02:43:11',
                'updated_at' => '2021-06-14 05:00:23',
            ),
            100 => 
            array (
                'id' => 120,
                'type' => 'min_order_amount_check_activat',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-04-17 06:57:17',
                'updated_at' => '2022-04-17 06:57:17',
            ),
            101 => 
            array (
                'id' => 121,
                'type' => 'minimum_order_amount',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-04-17 06:57:17',
                'updated_at' => '2022-04-17 06:57:17',
            ),
            102 => 
            array (
                'id' => 122,
                'type' => 'club_point_convert_rate',
                'value' => '10',
                'lang' => NULL,
                'created_at' => '2019-03-12 05:58:23',
                'updated_at' => '2022-08-04 11:46:23',
            ),
            103 => 
            array (
                'id' => 123,
                'type' => 'refund_request_time',
                'value' => '3',
                'lang' => NULL,
                'created_at' => '2019-03-12 09:58:23',
                'updated_at' => '2019-03-12 09:58:23',
            ),
            104 => 
            array (
                'id' => 124,
                'type' => 'product_query_activation',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2022-07-14 15:18:22',
                'updated_at' => '2022-07-21 01:01:48',
            ),
            105 => 
            array (
                'id' => 125,
                'type' => 'seller_wholesale_product',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2022-07-14 15:18:24',
                'updated_at' => '2022-07-14 15:18:24',
            ),
            106 => 
            array (
                'id' => 126,
                'type' => 'seller_auction_product',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2022-07-14 15:18:25',
                'updated_at' => '2022-07-14 15:18:25',
            ),
            107 => 
            array (
                'id' => 127,
                'type' => 'product_approve_by_admin',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2022-07-14 15:18:27',
                'updated_at' => '2022-07-14 15:18:27',
            ),
            108 => 
            array (
                'id' => 128,
                'type' => 'product_manage_by_admin',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2022-07-14 15:18:29',
                'updated_at' => '2022-07-16 22:02:36',
            ),
            109 => 
            array (
                'id' => 129,
                'type' => 'telegram_link',
                'value' => 'https://t.me/isyolcom',
                'lang' => NULL,
                'created_at' => '2022-07-14 20:00:21',
                'updated_at' => '2022-07-14 20:00:21',
            ),
            110 => 
            array (
                'id' => 130,
                'type' => 'app_gallery_link',
                'value' => 'https://appgallery.huawei.com/app/C106105643',
                'lang' => NULL,
                'created_at' => '2022-07-14 20:00:21',
                'updated_at' => '2022-07-14 20:00:21',
            ),
            111 => 
            array (
                'id' => 131,
                'type' => 'about_us_description',
                'value' => '<span style="user-select: none; font-weight: bolder;">Isyol</span>&nbsp;- the largest trading platform in Turkey that brings together Turkish sellers and brands at wholesale and retail prices - with fast shipping service to all countries of the world',
                'lang' => 'en',
                'created_at' => '2022-07-14 17:07:02',
                'updated_at' => '2022-07-14 17:07:02',
            ),
            112 => 
            array (
                'id' => 132,
                'type' => 'play_store_link',
                'value' => 'https://play.google.com/store/apps/details?id=customer.isyol.com',
                'lang' => NULL,
                'created_at' => '2022-07-14 17:07:02',
                'updated_at' => '2022-07-29 09:03:30',
            ),
            113 => 
            array (
                'id' => 133,
                'type' => 'app_store_link',
                'value' => '#',
                'lang' => NULL,
                'created_at' => '2022-07-14 17:07:02',
                'updated_at' => '2022-07-14 17:07:02',
            ),
            114 => 
            array (
                'id' => 134,
                'type' => 'contact_address',
                'value' => 'Yeni Bosna / Istanbul',
                'lang' => 'en',
                'created_at' => '2022-07-14 17:10:14',
                'updated_at' => '2022-07-14 17:10:14',
            ),
            115 => 
            array (
                'id' => 135,
                'type' => 'widget_one',
                'value' => 'QUICK LINKS',
                'lang' => 'en',
                'created_at' => '2022-07-14 17:11:13',
                'updated_at' => '2022-07-14 17:11:13',
            ),
            116 => 
            array (
                'id' => 136,
                'type' => 'widget_one_labels',
                'value' => '["Privacy Policy","Support Policy","Return Policy","Terms & Conditions","Distance Sales Contract"]',
                'lang' => 'en',
                'created_at' => '2022-07-14 17:11:13',
                'updated_at' => '2022-07-14 17:11:13',
            ),
            117 => 
            array (
                'id' => 137,
                'type' => 'frontend_copyright_text',
                'value' => '©&nbsp;<b>ISYOL</b>&nbsp;2022&nbsp;| All Rights Reserved',
                'lang' => 'en',
                'created_at' => '2022-07-14 17:14:39',
                'updated_at' => '2022-08-15 10:20:22',
            ),
            118 => 
            array (
                'id' => 138,
                'type' => 'about_us_description',
            'value' => '<span style="user-select: none; font-weight: bolder;">إزيول (isyol)</span><span style="user-select: none; font-weight: bolder;"> </span>- أكبر منصة تجارية في تركيا تجمع البائعين والماركات التركية في تركيا بأسعار رمزية وبمنتجات الجملة والمفرق - مع خدمة شحن سريعة إلى جميع دول العالم',
                'lang' => 'sa',
                'created_at' => '2022-07-14 17:15:50',
                'updated_at' => '2022-07-24 18:35:51',
            ),
            119 => 
            array (
                'id' => 139,
                'type' => 'contact_address',
                'value' => 'يني بوسنا / اسطنبول',
                'lang' => 'sa',
                'created_at' => '2022-07-14 17:15:58',
                'updated_at' => '2022-07-14 17:15:58',
            ),
            120 => 
            array (
                'id' => 140,
                'type' => 'widget_one',
                'value' => 'روابط سريعة',
                'lang' => 'sa',
                'created_at' => '2022-07-14 17:16:39',
                'updated_at' => '2022-07-14 17:16:39',
            ),
            121 => 
            array (
                'id' => 141,
                'type' => 'widget_one_labels',
                'value' => '["\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629","\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062f\\u0639\\u0645","\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0626\\u062f\\u0627\\u062a","\\u0627\\u0644\\u0623\\u062d\\u0643\\u0627\\u0645 \\u0648\\u0627\\u0644\\u0634\\u0631\\u0648\\u0637","\\u0639\\u0642\\u062f \\u0627\\u0644\\u0645\\u0628\\u064a\\u0639\\u0627\\u062a \\u0639\\u0646 \\u0628\\u0639\\u062f"]',
                'lang' => 'sa',
                'created_at' => '2022-07-14 17:16:39',
                'updated_at' => '2022-07-14 17:16:39',
            ),
            122 => 
            array (
                'id' => 142,
                'type' => 'frontend_copyright_text',
                'value' => '<span style="user-select: none;"><b>إزيول</b>&nbsp;</span>2022 © | جميع الحقوق محفوظة',
                'lang' => 'sa',
                'created_at' => '2022-07-14 17:17:09',
                'updated_at' => '2022-08-15 10:19:59',
            ),
            123 => 
            array (
                'id' => 143,
                'type' => 'contact_address',
                'value' => 'Yeni Bosna / İstanbul',
                'lang' => 'tr',
                'created_at' => '2022-07-14 17:17:22',
                'updated_at' => '2022-07-14 17:17:22',
            ),
            124 => 
            array (
                'id' => 144,
                'type' => 'about_us_description',
                'value' => '<span style="user-select: none; font-weight: bolder;">isyol&nbsp;</span>- Türk satıcı ve markalarını toptan ve perakende fiyatlarla buluşturan Türkiye\'nin en büyük ticaret platformu İsyol, dünyanın tüm ülkelerine hızlı sevkiyat hizmeti ile',
                'lang' => 'tr',
                'created_at' => '2022-07-14 17:17:30',
                'updated_at' => '2022-07-14 17:17:30',
            ),
            125 => 
            array (
                'id' => 145,
                'type' => 'widget_one',
                'value' => 'Hızlı Linkler',
                'lang' => 'tr',
                'created_at' => '2022-07-14 17:18:08',
                'updated_at' => '2022-07-14 17:18:08',
            ),
            126 => 
            array (
                'id' => 146,
                'type' => 'widget_one_labels',
                'value' => '["Gizlilik Politikas\\u0131","Destek Politikas\\u0131","\\u0130ade Politikas\\u0131","\\u015eartlar & Ko\\u015fullar","Mesafeli Sat\\u0131\\u015f S\\u00f6zle\\u015fmesi"]',
                'lang' => 'tr',
                'created_at' => '2022-07-14 17:18:08',
                'updated_at' => '2022-07-14 17:18:08',
            ),
            127 => 
            array (
                'id' => 147,
                'type' => 'frontend_copyright_text',
                'value' => '© <b>İSYOL</b> | Tüm Hakları Saklıdır',
                'lang' => 'tr',
                'created_at' => '2022-07-14 17:19:38',
                'updated_at' => '2022-08-15 10:20:35',
            ),
            128 => 
            array (
                'id' => 148,
                'type' => 'top10_categories',
                'value' => '["1","2","3","4","5","24","6","7","8","9"]',
                'lang' => 'en',
                'created_at' => '2022-07-14 19:21:01',
                'updated_at' => '2022-07-14 19:21:01',
            ),
            129 => 
            array (
                'id' => 149,
                'type' => 'top10_brands',
                'value' => '["1","2","3","4","6","8","10","11","13","42"]',
                'lang' => 'en',
                'created_at' => '2022-07-14 19:21:01',
                'updated_at' => '2022-07-14 19:21:01',
            ),
            130 => 
            array (
                'id' => 150,
                'type' => 'home_slider_images',
                'value' => '["1386","1389","1392","1391","1390","1388","1385","1387"]',
                'lang' => 'en',
                'created_at' => '2022-07-14 19:21:31',
                'updated_at' => '2022-07-23 06:49:07',
            ),
            131 => 
            array (
                'id' => 151,
                'type' => 'home_slider_links',
                'value' => '["https:\\/\\/isyol.com\\/category\\/women","https:\\/\\/isyol.com\\/category\\/men","https:\\/\\/isyol.com\\/category\\/kids","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/mens-accessories","https:\\/\\/isyol.com\\/category\\/womens-accessories"]',
                'lang' => 'en',
                'created_at' => '2022-07-14 19:21:31',
                'updated_at' => '2022-07-23 06:49:07',
            ),
            132 => 
            array (
                'id' => 152,
                'type' => 'home_slider_images',
                'value' => '["1381","1379","1383","1382","1384","1378","1377","1380"]',
                'lang' => 'sa',
                'created_at' => '2022-07-14 19:21:41',
                'updated_at' => '2022-07-23 06:45:46',
            ),
            133 => 
            array (
                'id' => 153,
                'type' => 'home_slider_links',
                'value' => '["https:\\/\\/isyol.com\\/category\\/women","https:\\/\\/isyol.com\\/category\\/men","https:\\/\\/isyol.com\\/category\\/kids","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/mens-accessories","https:\\/\\/isyol.com\\/category\\/womens-accessories"]',
                'lang' => 'sa',
                'created_at' => '2022-07-14 19:21:41',
                'updated_at' => '2022-07-23 06:45:46',
            ),
            134 => 
            array (
                'id' => 158,
                'type' => 'home_slider_images',
                'value' => '["1396","1397","1399","1398","1400","1394","1393","1395"]',
                'lang' => 'tr',
                'created_at' => '2022-07-14 21:56:12',
                'updated_at' => '2022-07-23 06:53:18',
            ),
            135 => 
            array (
                'id' => 159,
                'type' => 'home_slider_links',
                'value' => '["https:\\/\\/isyol.com\\/category\\/women","https:\\/\\/isyol.com\\/category\\/men","https:\\/\\/isyol.com\\/category\\/kids","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/shoes-and-bags","https:\\/\\/isyol.com\\/category\\/mens-accessories","https:\\/\\/isyol.com\\/category\\/womens-accessories"]',
                'lang' => 'tr',
                'created_at' => '2022-07-14 21:56:12',
                'updated_at' => '2022-07-23 06:53:18',
            ),
            136 => 
            array (
                'id' => 162,
                'type' => 'home_categories',
                'value' => '["22","23"]',
                'lang' => 'sa',
                'created_at' => '2022-07-14 22:06:18',
                'updated_at' => '2022-07-14 22:06:18',
            ),
            137 => 
            array (
                'id' => 163,
                'type' => 'topbar_banner',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-07-16 00:33:40',
                'updated_at' => '2022-07-16 00:33:40',
            ),
            138 => 
            array (
                'id' => 164,
                'type' => 'topbar_banner_link',
                'value' => NULL,
                'lang' => NULL,
                'created_at' => '2022-07-16 00:33:40',
                'updated_at' => '2022-07-16 00:33:40',
            ),
            139 => 
            array (
                'id' => 165,
                'type' => 'helpline_number',
                'value' => '00905362775997',
                'lang' => NULL,
                'created_at' => '2022-07-16 00:33:40',
                'updated_at' => '2022-07-16 00:33:40',
            ),
            140 => 
            array (
                'id' => 166,
                'type' => 'website_name',
                'value' => 'Isyol',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:02:35',
                'updated_at' => '2022-07-16 01:04:04',
            ),
            141 => 
            array (
                'id' => 167,
                'type' => 'site_motto',
                'value' => 'Turkish Brands To The World',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:02:35',
                'updated_at' => '2022-07-16 01:02:35',
            ),
            142 => 
            array (
                'id' => 168,
                'type' => 'website_name',
                'value' => 'ازيول',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:02:50',
                'updated_at' => '2022-07-21 20:28:59',
            ),
            143 => 
            array (
                'id' => 169,
                'type' => 'site_motto',
                'value' => 'بوابة المنتجات التركية للعالم',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:02:50',
                'updated_at' => '2022-07-21 20:28:59',
            ),
            144 => 
            array (
                'id' => 170,
                'type' => 'website_name',
                'value' => 'İsyol',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:03:10',
                'updated_at' => '2022-07-16 01:04:15',
            ),
            145 => 
            array (
                'id' => 171,
                'type' => 'site_motto',
                'value' => 'Türk Markaları Dünyaya',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:03:10',
                'updated_at' => '2022-07-16 01:03:10',
            ),
            146 => 
            array (
                'id' => 172,
                'type' => 'meta_title',
                'value' => 'İsyol - Türk Markaları Dünyaya',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:15:39',
                'updated_at' => '2022-07-16 01:15:39',
            ),
            147 => 
            array (
                'id' => 173,
                'type' => 'meta_description',
                'value' => 'İsyol - Türk satıcı ve markalarını toptan ve perakende fiyatlarla buluşturan Türkiye\'nin en büyük ticaret platformu İsyol, dünyanın tüm ülkelerine hızlı sevkiyat hizmeti ile',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:15:39',
                'updated_at' => '2022-07-16 01:19:07',
            ),
            148 => 
            array (
                'id' => 174,
                'type' => 'meta_keywords',
                'value' => 'Isyol, İsyol, Türk Markaları, İhracat, E ticaret, Online, Satış, Yurtdışına satış',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:15:39',
                'updated_at' => '2022-07-16 01:15:39',
            ),
            149 => 
            array (
                'id' => 175,
                'type' => 'meta_image',
                'value' => '1241',
                'lang' => 'tr',
                'created_at' => '2022-07-16 01:15:39',
                'updated_at' => '2022-07-16 01:15:39',
            ),
            150 => 
            array (
                'id' => 176,
                'type' => 'meta_title',
                'value' => 'Isyol - Turkish Brands To The World',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:17:17',
                'updated_at' => '2022-07-16 01:17:17',
            ),
            151 => 
            array (
                'id' => 177,
                'type' => 'meta_description',
                'value' => 'Isyol  - the largest trading platform in Turkey that brings together Turkish sellers and brands at wholesale and retail prices - with fast shipping service to all countries of the world',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:17:17',
                'updated_at' => '2022-07-16 01:17:17',
            ),
            152 => 
            array (
                'id' => 178,
                'type' => 'meta_keywords',
                'value' => 'isyol, Isyol marketplace, turkish brands, b2b, b2c, products, ecommerce',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:17:17',
                'updated_at' => '2022-07-16 01:17:17',
            ),
            153 => 
            array (
                'id' => 179,
                'type' => 'meta_image',
                'value' => '1241',
                'lang' => 'en',
                'created_at' => '2022-07-16 01:17:17',
                'updated_at' => '2022-07-16 01:17:17',
            ),
            154 => 
            array (
                'id' => 180,
                'type' => 'meta_title',
                'value' => 'ازيول الماركات التركية للعالم',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:20:53',
                'updated_at' => '2022-07-21 03:17:34',
            ),
            155 => 
            array (
                'id' => 181,
                'type' => 'meta_description',
                'value' => 'منصة ازيول بوابة المنتجات التركية للعالم بالجملة والمفرق مع الشحن السريع لكافة أنحاء العالم',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:20:53',
                'updated_at' => '2022-07-21 20:29:23',
            ),
            156 => 
            array (
                'id' => 182,
                'type' => 'meta_keywords',
                'value' => 'ازيول, أونلاين, تركي, سوق, موقع, ملابس, تركية, الماركات, التركية, للعالم, منصة, بوابة',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:20:53',
                'updated_at' => '2022-07-21 03:18:21',
            ),
            157 => 
            array (
                'id' => 183,
                'type' => 'meta_image',
                'value' => '1241',
                'lang' => 'sa',
                'created_at' => '2022-07-16 01:20:53',
                'updated_at' => '2022-07-16 01:20:53',
            ),
            158 => 
            array (
                'id' => 184,
                'type' => 'vendor_commission_activation',
                'value' => '1',
                'lang' => NULL,
                'created_at' => '2022-07-16 03:12:51',
                'updated_at' => '2022-07-16 03:12:51',
            ),
            159 => 
            array (
                'id' => 185,
                'type' => 'minimum_seller_amount_withdraw',
                'value' => '100',
                'lang' => NULL,
                'created_at' => '2022-07-16 03:12:56',
                'updated_at' => '2022-07-16 03:12:56',
            ),
            160 => 
            array (
                'id' => 186,
                'type' => 'ornek_verification_form',
                'value' => '[{"type":"text","label":"Adınız"},{"type":"text","label":"Mağaza adı"},{"type":"text","label":"E-posta"},{"type":"text","label":"Lisans No"},{"type":"text","label":"Açık adres"},{"type":"text","label":"Telefon numarası"},{"type":"file","label":"Vergi Belgeleri"}]',
                'lang' => 'tr',
                'created_at' => '2022-07-16 03:15:57',
                'updated_at' => '2022-07-16 03:15:57',
            ),
            161 => 
            array (
                'id' => 187,
                'type' => 'ornek_verification_form',
                'value' => '[{"type":"text","label":"اسمك"},{"type":"text","label":"اسم المحل"},{"type":"text","label":"البريد الإلكتروني"},{"type":"text","label":"رقم الرخصة"},{"type":"text","label":"العنوان الكامل"},{"type":"text","label":"رقم الهاتف"},{"type":"file","label":"الأوراق الضريبية"}]',
                'lang' => 'sa',
                'created_at' => '2022-07-16 03:15:57',
                'updated_at' => '2022-07-16 03:15:57',
            ),
            162 => 
            array (
                'id' => 188,
                'type' => 'home_banner3_images',
                'value' => '["1331","1332"]',
                'lang' => 'sa',
                'created_at' => '2022-07-23 08:08:50',
                'updated_at' => '2022-07-23 08:08:50',
            ),
            163 => 
            array (
                'id' => 189,
                'type' => 'home_banner3_links',
                'value' => '["https:\\/\\/isyol.com\\/affiliate","https:\\/\\/isyol.com\\/shops\\/create"]',
                'lang' => 'sa',
                'created_at' => '2022-07-23 08:08:50',
                'updated_at' => '2022-07-23 08:08:50',
            ),
            164 => 
            array (
                'id' => 190,
                'type' => 'home_banner3_images',
                'value' => '["1333","1334"]',
                'lang' => 'en',
                'created_at' => '2022-07-23 08:10:15',
                'updated_at' => '2022-07-23 08:10:15',
            ),
            165 => 
            array (
                'id' => 191,
                'type' => 'home_banner3_links',
                'value' => '["https:\\/\\/isyol.com\\/affiliate","https:\\/\\/isyol.com\\/shops\\/create"]',
                'lang' => 'en',
                'created_at' => '2022-07-23 08:10:15',
                'updated_at' => '2022-07-23 08:10:15',
            ),
            166 => 
            array (
                'id' => 192,
                'type' => 'home_banner3_images',
                'value' => '["1335","1336"]',
                'lang' => 'tr',
                'created_at' => '2022-07-23 08:10:47',
                'updated_at' => '2022-07-23 08:10:47',
            ),
            167 => 
            array (
                'id' => 193,
                'type' => 'home_banner3_links',
                'value' => '["https:\\/\\/isyol.com\\/affiliate","https:\\/\\/isyol.com\\/shops\\/create"]',
                'lang' => 'tr',
                'created_at' => '2022-07-23 08:10:47',
                'updated_at' => '2022-07-23 08:10:47',
            ),
            168 => 
            array (
                'id' => 194,
                'type' => 'home_banner1_images',
                'value' => '["1342","1341"]',
                'lang' => 'tr',
                'created_at' => '2022-07-23 12:25:22',
                'updated_at' => '2022-07-23 13:30:43',
            ),
            169 => 
            array (
                'id' => 195,
                'type' => 'home_banner1_links',
                'value' => '["https:\\/\\/isyol.com\\/flash-deals","https:\\/\\/isyol.com\\/coupons"]',
                'lang' => 'tr',
                'created_at' => '2022-07-23 12:25:22',
                'updated_at' => '2022-07-23 13:30:43',
            ),
            170 => 
            array (
                'id' => 196,
                'type' => 'home_banner1_images',
                'value' => '["1339","1340"]',
                'lang' => 'en',
                'created_at' => '2022-07-23 12:25:42',
                'updated_at' => '2022-07-23 13:28:13',
            ),
            171 => 
            array (
                'id' => 197,
                'type' => 'home_banner1_links',
                'value' => '["https:\\/\\/isyol.com\\/flash-deals","https:\\/\\/isyol.com\\/coupons"]',
                'lang' => 'en',
                'created_at' => '2022-07-23 12:25:42',
                'updated_at' => '2022-07-23 13:28:13',
            ),
            172 => 
            array (
                'id' => 198,
                'type' => 'home_banner1_images',
                'value' => '["1338","1337"]',
                'lang' => 'sa',
                'created_at' => '2022-07-23 12:25:45',
                'updated_at' => '2022-07-23 13:20:08',
            ),
            173 => 
            array (
                'id' => 199,
                'type' => 'home_banner1_links',
                'value' => '["https:\\/\\/isyol.com\\/flash-deals","https:\\/\\/isyol.com\\/coupons"]',
                'lang' => 'sa',
                'created_at' => '2022-07-23 12:25:45',
                'updated_at' => '2022-07-23 13:20:08',
            ),
            174 => 
            array (
                'id' => 200,
                'type' => 'delivery_boy_payment_type',
                'value' => 'commission',
                'lang' => NULL,
                'created_at' => '2022-07-28 04:48:50',
                'updated_at' => '2022-07-28 04:48:50',
            ),
            175 => 
            array (
                'id' => 201,
                'type' => 'delivery_boy_salary',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2022-07-28 04:48:50',
                'updated_at' => '2022-07-28 04:48:50',
            ),
            176 => 
            array (
                'id' => 202,
                'type' => 'delivery_boy_commission',
                'value' => '3',
                'lang' => NULL,
                'created_at' => '2022-07-28 04:48:50',
                'updated_at' => '2022-07-28 04:48:50',
            ),
            177 => 
            array (
                'id' => 203,
                'type' => 'disable_image_optimization',
                'value' => '0',
                'lang' => NULL,
                'created_at' => '2022-08-10 12:12:29',
                'updated_at' => '2022-08-10 12:12:31',
            ),
        ));
        
        
    }
}