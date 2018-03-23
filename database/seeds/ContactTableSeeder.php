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
            'organisation' => 'Stichting Experimenteerbuurt',
            'address' => 'Baander 4',
            'zipcodeandcity' => '7811 HJ Emmen',
            'email' => 'info@experimenteerbuurt.nl',
            'phonenumber' => '0621-680689',
        ]]);
    }
}
