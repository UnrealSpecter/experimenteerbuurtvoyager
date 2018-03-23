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
                'id' => 3,
                'name' => 'Vrije inloop vrijdag',
                'description' => 'Voor iedereen die meer wil weten over de Experimenteerbuurt zijn we op locatie tussen 15 en 20 uur. Welkom iedereen!',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-05-12',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '3.jpg',
                'created_at' => '2017-05-07 06:56:58',
                'updated_at' => '2017-05-07 06:58:55',
            ),
            1 =>
            array (
                'id' => 4,
                'name' => 'Vrije inloop vrijdag',
                'description' => 'Voor iedereen die meer wil weten over de Experimenteerbuurt zijn we op locatie tussen 15 en 20 uur. Welkom iedereen!',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-05-19',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '4.jpg',
                'created_at' => '2017-05-07 06:58:12',
                'updated_at' => '2017-05-07 06:58:34',
            ),
            2 =>
            array (
                'id' => 5,
                'name' => 'Early Birds bijeenkomst',
                'description' => 'Deze besloten bijeenkomst is speciaal voor de Early Birds: mensen die zich al gemeld hadden om aan de slag te gaan.',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-05-09',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '5.jpg',
                'created_at' => '2017-05-07 07:09:18',
                'updated_at' => '2017-05-07 07:09:18',
            ),
            3 =>
            array (
                'id' => 6,
                'name' => 'Opbouw Cubestee op locatie',
                'description' => 'Een mijlpaal: de vrachtwagen komt voorrijden en de opbouw begint.
Deze Cubestee is de uitvalsbasis voor de Experimenteerbuurt.
We zijn maandag 8 mei met koffie/thee en lekkers op de bouwplaats.',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-05-08',
                'event_time' => '12:00',
                'eventbrite_url' => NULL,
                'background_image' => '6.jpg',
                'created_at' => '2017-05-07 07:13:31',
                'updated_at' => '2017-05-08 16:47:21',
            ),
            4 =>
            array (
                'id' => 7,
                'name' => 'Inspiratie \'Bouw je eigen tiny house\'',
                'description' => 'Linde en Kjeld bouwden hun eigen Tiny House. Deze middag vertellen ze hierover en er is tijd om vragen te stellen en kennis te maken.
Het verhaal is inspirerend en je ontmoet mensen die ook hierin geïnteresseerd zijn. Mooie gesprekken gegarandeerd!
Er zijn maximaal 25 plekken, dus meld je snel aan.',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-06-28',
                'event_time' => '15:30',
                'eventbrite_url' => 'https://www.eventbrite.nl/e/tickets-inspiratie-ontmoeting-bouw-je-eigen-tiny-house-35611211091?aff=ehomecard',
                'background_image' => '7.jpg',
                'created_at' => '2017-06-22 21:07:53',
                'updated_at' => '2017-06-22 21:16:33',
            ),
            5 =>
            array (
                'id' => 8,
                'name' => 'Vrije inloop vrijdag 15-17 uur',
            'description' => 'Kom langs om kennis te maken, te sparren over jouw experiment, het plaatsnaambord te bekijken of .... (vul zelf in).',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-06-23',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '8.jpg',
                'created_at' => '2017-06-22 21:20:06',
                'updated_at' => '2017-06-22 21:20:08',
            ),
            6 =>
            array (
                'id' => 9,
                'name' => 'Informatie avond Cubestee',
                'description' => 'Het prototype van de zogenaamde Cubestee staat in de Experimenteerbuurt. Deze avond kun je alles te weten komen over het product Cubestee. Meld je aan om één van de 25 beschikbare plekken te veroveren.',
                'gift' => 1,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-07-04',
                'event_time' => '19:30',
                'eventbrite_url' => 'https://www.eventbrite.nl/e/tickets-informatieavond-over-het-product-cubestee-35612582192?aff=ehomecard',
                'background_image' => '9.JPG',
                'created_at' => '2017-06-22 21:56:34',
                'updated_at' => '2017-06-22 21:56:36',
            ),
            7 =>
            array (
                'id' => 10,
                'name' => 'Vrije inloop vrijdag',
                'description' => 'Voor iedereen die meer wil weten over de Experimenteerbuurt zijn we op locatie tussen 15 en 17 uur. Welkom iedereen!',
                'gift' => 0,
                'active' => 0,
                'cost' => '0.00',
                'event_date' => '2017-07-21',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '10.JPG',
                'created_at' => '2017-07-18 15:06:07',
                'updated_at' => '2017-07-18 15:06:09',
            ),
            8 =>
            array (
                'id' => 11,
                'name' => 'Inspiratie excursie \'Tiny Houses\'',
                'description' => 'Op zoek naar inspiratie en contact met anderen? Ga mee in de bus naar de Tiny Houses Jamboree in Almere.

Interessant voor bedrijven en particulieren die meer willen weten. De bus en entree is gratis, dus meld je aan via info@experimenteerbuurt.nl

Onze top-stagiaire Marieke en DOENer in de dop Hans van Woerden organiseren deze mooie excursie!',
                'gift' => 0,
                'active' => 0,
                'cost' => '0.00',
                'event_date' => '2017-10-07',
                'event_time' => '09:00',
                'eventbrite_url' => 'https://www.eventbrite.nl/e/tickets-inspiratie-excursie-naar-tiny-houses-jamboree-almere-38303251055?aff=ehomecard',
                'background_image' => '11.jpg',
                'created_at' => '2017-09-26 21:16:31',
                'updated_at' => '2017-09-27 09:30:55',
            ),
            9 =>
            array (
                'id' => 12,
                'name' => 'Ontwerpsessie',
                'description' => 'Met een groep gaan we aan de slag om een ontwerp te maken voor de buurt. Hoe ziet een vernieuwend ontwerp eruit. Hoe passen we experimenten in die zich al gemeld hebben? Hoe houdt de Experimenteerbuurt ruimte voor experimenten in de toekomst?

Voor deze bijeenkomst zijn specifiek mensen gevraagd. Wil je ook meedoen? Zoek dan even contact!',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-11-16',
                'event_time' => '15:00',
                'eventbrite_url' => NULL,
                'background_image' => '12.jpg',
                'created_at' => '2017-11-11 22:38:12',
                'updated_at' => '2017-11-11 22:42:19',
            ),
            10 =>
            array (
                'id' => 13,
                'name' => 'Vrije inloop vrijdag 14-17 uur',
                'description' => 'De eerste bouwers komen in beeld, het ontwerp krijgt vorm, we broeden over het juiste vervolg. Input en sparren gewenst!
Kom langs om bij te praten, vragen te stellen en mee te denken!
Er is ook drinken en lekkers.',
                'gift' => 0,
                'active' => 0,
                'cost' => NULL,
                'event_date' => '2017-11-24',
                'event_time' => '14:00',
                'eventbrite_url' => NULL,
                'background_image' => '13.jpg',
                'created_at' => '2017-11-11 22:44:06',
                'updated_at' => '2017-11-11 22:44:48',
            ),
        ));


    }
}
