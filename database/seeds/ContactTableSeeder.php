<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('contact')->insert([
            [
                'postal_code' => 'Stichting Experimenteerbuurt Baander 4, 7811 HJ Emmen',
                'email' => 'info@experimenteerbuurt.nl',
                'phonenumber' => '0621-680689',
                'kvk' => '67468519'
            ]
        ]);
    }
}
