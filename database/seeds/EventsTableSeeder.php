<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 15,
                'name' => 'Zoektocht nieuwe locatie!',
                'description' => 'Help jij ons met het vinden van goede grond voor de Experimenteerbuurt?',
                'active' => 1,
                'gift' => 0,
                'cost' => NULL,
                'event_date' => '2018-07-01',
                'event_time' => '12:00',
                'eventbrite_url' => NULL,
                'background_image' => 'events/March2018/ZY8vOMJgphCl9CS2UP1I.png',
                'created_at' => '2018-03-27 13:44:20',
                'updated_at' => '2018-03-27 14:46:00',
            ),
        ));
        
        
    }
}