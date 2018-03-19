<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organisation' => 'Stichting Experimenteerbuurt',
                'address' => 'Baander 4',
                'zipcodeandcity' => '7811 HJ Emmen',
                'email' => 'info@experimenteerbuurt.nl',
                'phonenumber' => '0621-680689',
                'created_at' => '2018-03-16 14:43:41',
                'updated_at' => '2018-03-16 14:44:50',
            ),
        ));
        
        
    }
}