<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('faq')->delete();

        \DB::table('faq')->insert(array (
            0 =>
            array (
                'id' => 3,
                'question' => 'Waar komt de Experimenteerbuurt nu precies?',
                'answer' => 'Je vindt de Experimenteerbuurt aan het eind van de Angelsloerdijk in Emmen. de sportvelden, de bestrating van de Angelsloerdijk, het hek langs het fietspad langs het Scheperpark en de woningen in Angelslo aan de Entingehof.',
                'created_at' => '2017-05-07 07:53:53',
                'updated_at' => '2017-05-07 19:18:27',
            ),
            1 =>
            array (
                'id' => 4,
                'question' => 'Wat gaat er de komende tijd gebeuren?',
                'answer' => 'Iedereen die met zijn/haar experiment aan de slag wil kan zich aanmelden als DOENer. De komende maanden is er ruimte voor inspiratie, ontmoeten van andere DOENers, experts, vrijdenkers, omwonenden. Dit alles om experimenten nog verder aan het basisplan en actielijst voor de toekomst.',
                'created_at' => '2017-05-07 07:54:56',
                'updated_at' => '2017-05-07 19:18:59',
            ),
            2 =>
            array (
                'id' => 5,
                'question' => 'Kan ik sowieso aan de slag als ik me nu aanmeld als DOENer?',
                'answer' => 'Nee. Iedereen kan zich de komende maanden aanmelden, daarna maken we samen een plan en is duidelijk wat wel en niet door kan gaan. Er zijn niet op voorhand allerlei regels en criteria.',
                'created_at' => '2017-05-07 07:55:32',
                'updated_at' => '2017-05-07 07:55:32',
            ),
            3 =>
            array (
                'id' => 6,
                'question' => 'Hoe lang blijft de Experimenteerbuurt?',
            'answer' => 'Tot maximaal 1 april 2018 kunnen we een terrein gebruiken v.',
                'created_at' => '2017-05-07 07:56:10',
                'updated_at' => '2017-05-07 19:19:42',
            ),
            4 =>
            array (
                'id' => 7,
                'question' => 'Mag ik ook iets organiseren in de Experimenteerbuurt?',
                'answer' => 'Ja graag! Neem contact op om af te stemmen.',
                'created_at' => '2017-05-07 07:56:41',
                'updated_at' => '2017-05-07 07:56:41',
            ),
            5 =>
            array (
                'id' => 8,
                'question' => 'Kan ik helpen bij de Experimenteerbuurt?',
                'answer' => 'Ja graag. We zoeken vooral organisatie- en cel/mail ons!',
                'created_at' => '2017-05-07 07:57:05',
                'updated_at' => '2017-05-07 07:58:22',
            ),
        ));


    }
}
