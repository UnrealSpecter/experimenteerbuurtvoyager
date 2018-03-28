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
                'youtube_embed' => '',
                'created_at' => '2017-02-18 00:00:00',
                'updated_at' => '2017-02-18 00:00:00',
            ),
            1 => 
            array (
                'id' => 14,
                'title' => 'De meest vernieuwende buurt van heel Nederland in Emmen',
                'content' => 'Artikel in Dagblad van het Noorden - 18 februari 2017',
                'post_date' => '2017-02-18',
                'link' => 'https://drive.google.com/open?id=0B1hgdKOfrvXneDE5UkZ4dUdFTVgzMnh6bHdHWldnWENmcGxN',
                'image' => 'posts/March2018/Q0Xz8eYvou5mjBOddSUm.png',
                'youtube_embed' => '',
                'created_at' => '2017-02-18 00:00:00',
                'updated_at' => '2017-02-18 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
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
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            8 => 
            array (
                'id' => 22,
                'title' => 'Vlog #3 Wie komt met zijn Tiny House tijdelijk in Emmen wonen?',
                'content' => '',
                'post_date' => '2017-07-25',
                'link' => 'https://www.youtube.com/watch?v=E2aE4hPfM8M',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/E2aE4hPfM8M',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            9 => 
            array (
                'id' => 23,
                'title' => 'Vlog #1 Hogenood',
                'content' => 'Iemand een wc????',
                'post_date' => '2017-07-25',
                'link' => 'https://www.youtube.com/watch?v=tvgg37z9Xt0',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/tvgg37z9Xt0',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            10 => 
            array (
                'id' => 24,
                'title' => 'Vlog #5 Kom langs 15 september : BYO BBQ',
                'content' => '',
                'post_date' => '2017-09-02',
                'link' => 'https://www.youtube.com/watch?v=ZD0hxFj1C4Q',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/ZD0hxFj1C4Q',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            11 => 
            array (
                'id' => 25,
                'title' => 'Meld je aan!',
                'content' => '',
                'post_date' => '2017-09-19',
                'link' => 'https://www.youtube.com/watch?v=0ndHBwyg60M',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/0ndHBwyg60M',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            12 => 
            array (
                'id' => 26,
                'title' => 'Vlog #4 Nieuws uit de buurt',
                'content' => '',
                'post_date' => '2017-09-19',
                'link' => 'https://www.youtube.com/watch?v=LzFBFC2t2es',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/LzFBFC2t2es',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            13 => 
            array (
                'id' => 27,
                'title' => 'Vlog #6 Inspiratie excursie Tiny Houses Almere!',
                'content' => '',
                'post_date' => '2017-09-27',
                'link' => 'https://www.youtube.com/watch?v=BNGctYyhWxM',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/BNGctYyhWxM',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            14 => 
            array (
                'id' => 28,
                'title' => 'Vlog #7 De Stagiaires!',
                'content' => '',
                'post_date' => '2017-10-10',
                'link' => 'https://www.youtube.com/watch?v=40ro9eaB4m4',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/40ro9eaB4m4',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            15 => 
            array (
                'id' => 29,
                'title' => 'Vlog #8 Hans Over De Tiny house Expo Almere',
                'content' => '',
                'post_date' => '2017-10-11',
                'link' => 'https://www.youtube.com/watch?v=w0x8yjGojh0',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/w0x8yjGojh0',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            16 => 
            array (
                'id' => 30,
                'title' => 'Vlog #9 Het Net opgehaald en nu?',
                'content' => '',
                'post_date' => '2017-10-27',
                'link' => 'https://www.youtube.com/watch?v=zLrTpi_JJd4',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/zLrTpi_JJd4',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            17 => 
            array (
                'id' => 31,
                'title' => 'Experimenteerbuurt Emmen: Zie jij het al voor je? En waar?',
                'content' => '',
                'post_date' => '2018-03-27',
                'link' => 'https://www.youtube.com/watch?v=IqT1fVd8148',
                'image' => 'posts/March2018/dvNDU8J1xT7wUeLhAWo0.jpg',
                'youtube_embed' => 'https://www.youtube.com/embed/IqT1fVd8148',
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2017-07-25 00:00:00',
            ),
            18 => 
            array (
                'id' => 32,
                'title' => 'Experimenteerbuurt moet op zoek naar een nieuwe locatie',
                'content' => 'Emmen – Een domper voor de organisatie van de Experimenteerbuurt. De door hun beoogde plek op het voormalige terrein van Camping Emmen langs de Boermarkeweg blijkt geen haalbare kaart te zijn. De initiatiefnemers moeten op zoek naar een nieuwe plek.',
                'post_date' => '2018-03-27',
                'link' => 'http://www.emmen.nu/nieuws/emmen/532555/experimenteerbuurt-moet-op-zoek-naar-een-nieuwe-locatie.html',
                'image' => 'posts/March2018/ADZTjekKw01cAHBRwbQ3.png',
                'youtube_embed' => NULL,
                'created_at' => '2017-07-25 00:00:00',
                'updated_at' => '2018-03-28 08:47:29',
            ),
            19 => 
            array (
                'id' => 33,
                'title' => 'Experimenteerbuurt moet op zoek naar een nieuwe locatie',
                'content' => 'EMMEN - Initiatiefnemers Alya Assen en Diem Do uit Emmen moeten met hun plannen voor de experimenteerbuurt ergens anders naartoe.',
                'post_date' => '2018-03-27',
                'link' => 'http://www.rtvdrenthe.nl/nieuws/132928/Experimenteerbuurt-Emmen-moet-noodgedwongen-op-zoek-naar-andere-locatie',
                'image' => 'posts/March2018/SSXdL2QkjlzjGDRHtDTs.png',
                'youtube_embed' => NULL,
                'created_at' => '2018-03-28 08:14:16',
                'updated_at' => '2018-03-28 08:46:43',
            ),
        ));
        
        
    }
}