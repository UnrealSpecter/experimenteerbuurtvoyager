<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 8,
                'title' => 'Voormalige Emmer camping wordt experimenteerbuurt',
                'content' => 'Artikel RTV Drenthe - 18 februari 2017',
                'link' => 'http://www.rtvdrenthe.nl/nieuws/118757/Voormalige-Emmer-camping-wordt-experimenteerbuurt',
                'image' => '8.jpg',
                'created_at' => '2017-06-29 09:39:39',
                'updated_at' => '2017-06-29 09:39:39',
                'post_date' => '2017-02-18',
            ),
            1 => 
            array (
                'id' => 14,
                'title' => 'De meest vernieuwende buurt van heel Nederland in Emmen',
                'content' => 'Artikel in Dagblad van het Noorden - 18 februari 2017',
                'link' => 'https://drive.google.com/open?id=0B1hgdKOfrvXneDE5UkZ4dUdFTVgzMnh6bHdHWldnWENmcGxN',
                'image' => '14.png',
                'created_at' => '2017-07-18 13:02:52',
                'updated_at' => '2017-07-25 09:21:20',
                'post_date' => '2017-02-18',
            ),
            2 => 
            array (
                'id' => 16,
                'title' => 'Vlog De Emmense uitdaging',
            'content' => 'Er zijn altijd bedrijven/mensen die in de pioniersfase al hun nek durven uitsteken. Dank aan #deRooWegenbouw (voor het vele werk verzetten) en De Emmense Uitdaging (voor de match). Het pad is dus nu geplaveid voor andere mensen die iets vernieuwends willen doen. Vertel het ons!',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/280506829091078/',
                'image' => '16.png',
                'created_at' => '2017-07-25 09:26:38',
                'updated_at' => '2017-07-25 09:34:52',
                'post_date' => '2017-07-25',
            ),
            3 => 
            array (
                'id' => 17,
                'title' => 'Drenthe in Transitie - De experimenteerbuurt in Emmen',
                'content' => 'Met het gevoel dat er te weinig experimenteerruimte is op het gebied van innovatie en duurzaamheid in Drenthe, sloegen ondernemers Alya Assen en Diem Do de handen ineen. Het resultaat? Nederlands eerste ‘Experimenteerbuurt’ in Emmen.',
                'link' => 'http://www.ditenergie.nl/initiatief/de-experimenteerbuurt-emmen',
                'image' => '17.png',
                'created_at' => '2017-07-25 09:32:08',
                'updated_at' => '2017-07-25 09:32:08',
                'post_date' => '2017-07-25',
            ),
            4 => 
            array (
                'id' => 18,
                'title' => 'Vlog - Hoge nood',
                'content' => 'Wie heeft een goede toilet oplossing?',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/271855213289573/',
                'image' => '18.png',
                'created_at' => '2017-07-25 09:36:59',
                'updated_at' => '2017-07-25 09:39:11',
                'post_date' => '2017-07-25',
            ),
            5 => 
            array (
                'id' => 19,
                'title' => 'Onthulling plaatsnaambord',
                'content' => 'De Experimenteerbuurt bestaat echt',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/268627280279033/',
                'image' => '19.gif',
                'created_at' => '2017-07-25 09:42:18',
                'updated_at' => '2017-07-25 09:42:18',
                'post_date' => '2017-07-25',
            ),
            6 => 
            array (
                'id' => 20,
                'title' => 'Vlog - Tiny House',
                'content' => 'Wie komt met zijn zelfvoorzienend Tiny House tijdelijk in Emmen wonen?',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/283785092096585/',
                'image' => '20.png',
                'created_at' => '2017-07-25 09:48:08',
                'updated_at' => '2017-07-25 09:48:09',
                'post_date' => '2017-07-25',
            ),
            7 => 
            array (
                'id' => 21,
                'title' => 'Pioniers mogen aankloppen bij de experimenteerbuurt',
                'content' => 'Geplaatst op 8 mei 2017 in Emmen.nu ‘Het lijkt net of ze met Lego bouwen of niet’, Alya Assen kijkt samen met compagnon Diem Do naar de bouwvakkers die hun Cubestee in elkaar puzzelen op het voormalige terrein van Camping Emmen.',
                'link' => 'https://www.emmen.nu/nieuws/emmen/493390/pioniers-mogen-aankloppen-bij-experimenteerbuurt.html',
                'image' => '21.png',
                'created_at' => '2017-07-25 09:57:36',
                'updated_at' => '2017-07-25 09:57:36',
                'post_date' => '2017-07-25',
            ),
        ));
        
        
    }
}