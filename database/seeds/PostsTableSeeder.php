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
                'post_date' => '2017-02-18',
                'link' => 'http://www.rtvdrenthe.nl/nieuws/118757/Voormalige-Emmer-camping-wordt-experimenteerbuurt',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/tdxD6sP32yU',
                'created_at' => '2017-06-29 09:39:39',
                'updated_at' => '2018-03-25 14:51:37',
            ),
            1 => 
            array (
                'id' => 14,
                'title' => 'De meest vernieuwende buurt van heel Nederland in Emmen',
                'content' => 'Artikel in Dagblad van het Noorden - 18 februari 2017',
                'post_date' => '2017-02-18',
                'link' => 'https://drive.google.com/open?id=0B1hgdKOfrvXneDE5UkZ4dUdFTVgzMnh6bHdHWldnWENmcGxN',
                'image' => 'posts/March2018/Q0Xz8eYvou5mjBOddSUm.png',
                'youtube_embed' => 'https://www.youtube.com/embed/tdxD6sP32yU',
                'created_at' => '2017-07-18 13:02:52',
                'updated_at' => '2018-03-25 14:54:09',
            ),
            2 => 
            array (
                'id' => 16,
                'title' => 'Vlog De Emmense uitdaging',
            'content' => 'Er zijn altijd bedrijven/mensen die in de pioniersfase al hun nek durven uitsteken. Dank aan #deRooWegenbouw (voor het vele werk verzetten) en De Emmense Uitdaging (voor de match). Het pad is dus nu geplaveid voor andere mensen die iets vernieuwends willen doen. Vertel het ons!',
                'post_date' => '2017-07-25',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/280506829091078/',
                'image' => 'posts/March2018/2lMf5SV7s3Gfy26xFVev.png',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:26:38',
                'updated_at' => '2018-03-25 14:52:22',
            ),
            3 => 
            array (
                'id' => 17,
                'title' => 'Drenthe in Transitie - De experimenteerbuurt in Emmen',
                'content' => 'Met het gevoel dat er te weinig experimenteerruimte is op het gebied van innovatie en duurzaamheid in Drenthe, sloegen ondernemers Alya Assen en Diem Do de handen ineen. Het resultaat? Nederlands eerste ‘Experimenteerbuurt’ in Emmen.',
                'post_date' => '2017-07-25',
                'link' => 'http://www.ditenergie.nl/initiatief/de-experimenteerbuurt-emmen',
                'image' => 'posts/March2018/eQOk6UbIGSy6aa0UohFK.png',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:32:08',
                'updated_at' => '2018-03-25 14:52:38',
            ),
            4 => 
            array (
                'id' => 18,
                'title' => 'Vlog - Hoge nood',
                'content' => 'Wie heeft een goede toilet oplossing?',
                'post_date' => '2017-07-25',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/271855213289573/',
                'image' => 'posts/March2018/9VOyd82nnw3ebjxet1Cf.png',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:36:59',
                'updated_at' => '2018-03-25 14:52:54',
            ),
            5 => 
            array (
                'id' => 19,
                'title' => 'Onthulling plaatsnaambord',
                'content' => 'De Experimenteerbuurt bestaat echt',
                'post_date' => '2017-07-25',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/268627280279033/',
                'image' => 'posts/March2018/GgdasEtAUoiMTqy1yAgp.gif',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:42:18',
                'updated_at' => '2018-03-25 14:53:06',
            ),
            6 => 
            array (
                'id' => 20,
                'title' => 'Vlog - Tiny House',
                'content' => 'Wie komt met zijn zelfvoorzienend Tiny House tijdelijk in Emmen wonen?',
                'post_date' => '2017-07-25',
                'link' => 'https://www.facebook.com/Experimenteerbuurt/videos/283785092096585/',
                'image' => 'posts/March2018/RypNY77H3b68YUuE6fTC.png',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:48:08',
                'updated_at' => '2018-03-25 14:53:16',
            ),
            7 => 
            array (
                'id' => 21,
                'title' => 'Pioniers mogen aankloppen bij de experimenteerbuurt',
                'content' => 'Geplaatst op 8 mei 2017 in Emmen.nu ‘Het lijkt net of ze met Lego bouwen of niet’, Alya Assen kijkt samen met compagnon Diem Do naar de bouwvakkers die hun Cubestee in elkaar puzzelen op het voormalige terrein van Camping Emmen.',
                'post_date' => '2017-07-25',
                'link' => 'https://www.emmen.nu/nieuws/emmen/493390/pioniers-mogen-aankloppen-bij-experimenteerbuurt.html',
                'image' => 'posts/March2018/l4zZcXh56461GXfi2dxV.png',
                'youtube_embed' => '',
                'created_at' => '2017-07-25 09:57:36',
                'updated_at' => '2018-03-25 14:53:50',
            ),
        ));
        
        
    }
}