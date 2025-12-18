<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('facts')->delete();
        
        \DB::table('facts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Huisspin',
                'description' => 'Kan weken zonder eten en chillt graag in donkere hoekjes.',
                'scenario' => 'Zonder huisspinnen exploderen de insectenpopulaties in huizen en tuinen. Muggen en vliegen maken van elke zomer een marteling. Ziekten verspreiden zich sneller en niemand heeft nog een natuurlijke bondgenoot tegen het gezoem.',
                'image' => 'images/huisspin.jpeg',
                'image_scenario' => 'images/dystopische_scenario_huisspin.png',
                'task_id' => 1,
                'created_at' => '2025-12-16 16:43:06.000',
                'updated_at' => '2025-12-16 16:43:09.000',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Paardenbloem',
                'description' => 'Je kunt hem eten, hij zit vol vitaminen.',
                'scenario' => 'Zonder paardenbloemen verliezen bijen hun eerste nectar in de lente. De hele bestuiving van de vroege bloemen stagneert, en de bijenpopulatie daalt. Het voorjaar voelt leeg en stil, zonder dat typische geel van bloeiende velden.',
                'image' => 'images/paardenbloem.jpg',
                'image_scenario' => 'images/dystopische_scenario_paardenbloem.png',
                'task_id' => 2,
                'created_at' => '2025-12-16 16:45:49.000',
                'updated_at' => '2025-12-16 16:45:50.000',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Madeliefje',
                'description' => 'Bloeit bijna het hele jaar door.',
                'scenario' => 'Als madeliefjes verdwijnen, verliezen bermen en grasvelden hun kleur en veerkracht. Insecten vinden minder voedsel en het landschap verliest zijn zachte charme. Spelen en wandelen in de natuur wordt kil en leeg.',
                'image' => 'images/madeliefje.jpg',
                'image_scenario' => 'images/dystopische_scenario_madelief.png',
                'task_id' => 3,
                'created_at' => '2025-12-17 09:51:17.000',
                'updated_at' => '2025-12-17 09:51:17.000',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Koolmees',
                'description' => 'Slim vogeltje dat geluiden kan nadoen.',
                'scenario' => 'Als de koolmees verdwijnt, nemen rupsen elk blad over. Bomen worden kaal en de stadsparken veranderen in lege, dorre plekken. Het groen sterft langzaam, en met het groen verdwijnt de luchtkwaliteit.',
                'image' => 'images/koolmees.jpg',
                'image_scenario' => 'images/dystopische_scenario_koolmees.png',
                'task_id' => 4,
                'created_at' => '2025-12-17 09:51:19.000',
                'updated_at' => '2025-12-17 09:51:19.000',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Houtduif',
                'description' => 'Drinkt water door te \'slurpen\' in plaats van te zuigen.',
                'scenario' => 'Zonder houtduiven stopt veel zaadverspreiding. Bossen verouderen sneller en jonge bomen krijgen geen kans. Het ecosysteem verarmt en de biodiversiteit krimpt jaar na jaar.',
                'image' => 'images/houtduif.jpg',
                'image_scenario' => 'images/dystopische_scenario_houtduif.png',
                'task_id' => 5,
                'created_at' => '2025-12-17 09:51:20.000',
                'updated_at' => '2025-12-17 09:51:21.000',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Brandnetel',
                'description' => 'Jeukend, maar supergezond.',
                'scenario' => 'Zonder brandnetels verdwijnen belangrijke vlinders en andere insecten. Biodiversiteit neemt af en tuinen en velden worden kleurloos en levenloos. De balans in de natuur verdwijnt stukje bij beetje.',
                'image' => 'images/brandnetel.jpg',
                'image_scenario' => 'images/dystopische_scenario_brandnetel.png',
                'task_id' => 6,
                'created_at' => '2025-12-17 09:51:22.000',
                'updated_at' => '2025-12-17 09:51:22.000',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Witte Klaver',
                'description' => 'Fixeert stikstof in de bodem.',
                'scenario' => 'Als klaver wegvalt, verarmt de bodem en verliezen weilanden hun kracht. Gras wordt futloos en minder voedselrijk voor dieren. Landbouw en natuur lijden allebei onder een stille uitputting.',
                'image' => 'images/witte_klaver.webp',
                'image_scenario' => 'images/dystopische_scenario_witte_klaver.png',
                'task_id' => 7,
                'created_at' => '2025-12-17 09:51:24.000',
                'updated_at' => '2025-12-17 09:51:24.000',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Stadsduif',
                'description' => 'Was ooit een wilde rotsduif.',
                'scenario' => 'Als stadsduiven verdwijnen, verliest de stad een van haar laatste overlevers van menselijke chaos. Straten lijken nog leger en stiller, en er is een vreemde geur van stilstaand afval. Het is een teken dat zelfs de meest adaptieve dieren het niet meer trekken.',
                'image' => 'images/stadsduif.webp',
                'image_scenario' => 'images/dystopische_scenario_stadsduif.png',
                'task_id' => 8,
                'created_at' => '2025-12-17 09:51:26.000',
                'updated_at' => '2025-12-17 09:51:26.000',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Gewone pad',
                'description' => 'Komt elk voorjaar weer uit zijn winterslaap.',
                'scenario' => 'Zonder padden schieten insectenplagen de hoogte in. Gewassen worden bedreigd en boeren moeten nog meer bestrijdingsmiddelen gebruiken. Het landschap verandert in een chemisch slagveld, waar vroeger groen en water was.',
                'image' => 'images/gewone_pad.jpg',
                'image_scenario' => 'images/dystopische_scenario_gewone_pad.png',
                'task_id' => 9,
                'created_at' => '2025-12-17 10:07:59.000',
                'updated_at' => '2025-12-17 10:07:59.000',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Muurleeuwenbek',
                'description' => 'Groeit letterlijk uit muren.',
                'scenario' => 'Zonder muurplanten worden muren en stenen bouwwerken levenloos. Stad en dorp verliezen het kleine groen dat ooit tussen het beton doorkwam. Het voelt koud, grijs en onherbergzaam.',
                'image' => 'images/muurleeuwenbek.jpg',
                'image_scenario' => 'images/dystopische_scenario_muurleeuwenbek.png',
                'task_id' => 10,
                'created_at' => '2025-12-17 10:08:01.000',
                'updated_at' => '2025-12-17 10:08:02.000',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Herderstasje',
                'description' => 'Zaadjes lijken op kleine tasjes.',
                'scenario' => 'Als herderstasje verdwijnt, verliezen bermen hun veerkracht en diversiteit. De grond wordt kwetsbaar voor erosie en droogte. Zelfs kleine insecten en dieren hebben geen houvast meer.',
                'image' => 'images/herdertasje.webp',
                'image_scenario' => 'images/dystopische_scenario_herderstasje.png',
                'task_id' => 11,
                'created_at' => '2025-12-17 10:08:02.000',
                'updated_at' => '2025-12-17 10:08:03.000',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Naaktslak',
                'description' => 'Heeft duizenden tandjes op z’n tong.',
                'scenario' => 'Als naaktslakken verdwijnen, blijft plantenmateriaal liggen om te rotten. Bodems raken verstikt en de kringloop van voedingsstoffen valt stil. Zelfs kleine tuinen veranderen in verrotte puinhopen.',
                'image' => 'images/naaktslak.jpg',
                'image_scenario' => 'images/dystopische_scenario_naaktslak.png',
                'task_id' => 12,
                'created_at' => '2025-12-17 10:08:03.000',
                'updated_at' => '2025-12-17 10:08:04.000',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Oorworm',
            'description' => 'Kan vliegen met zijn vleugels (ja echt).',
                'scenario' => 'Zonder oorwormen nemen bladluizen en andere insecten massaal toe. Tuinen worden aangevreten skeletten en gewassen worden bedreigd. De kleine balans die ooit bestond, verdwijnt volledig.',
                'image' => 'images/oorworm.jpg',
                'image_scenario' => 'images/dystopische_scenario_oorworm.png',
                'task_id' => 13,
                'created_at' => '2025-12-17 10:17:34.000',
                'updated_at' => '2025-12-17 10:17:35.000',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Straatgras',
                'description' => 'Groot feest op stoeptegels.',
                'scenario' => 'Zonder straatgras wint het beton volledig. Straten en stoepen warmen sneller op en stedelijke hittegolven worden ondraaglijk. Het leven dat ooit door kieren en scheuren kroop, verdwijnt.',
                'image' => 'images/straatgras.webp',
                'image_scenario' => 'images/dystopische_scenario_straatgras.png',
                'task_id' => 14,
                'created_at' => '2025-12-17 10:17:36.000',
                'updated_at' => '2025-12-17 10:17:36.000',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Kleefkruid',
                'description' => 'Blijft overal aan je kleding plakken.',
                'scenario' => 'Als kleefkruid verdwijnt, verliezen vogels en kleine dieren voedsel en nestmateriaal. Planten en dieren raken losgekoppeld van elkaar. Het ecosysteem wordt een fragmentarisch en zwak netwerk.',
                'image' => 'images/kleefkruid.jpg',
                'image_scenario' => 'images/dystopische_scenario_kleefkruid.png',
                'task_id' => 15,
                'created_at' => '2025-12-17 10:17:37.000',
                'updated_at' => '2025-12-17 10:17:37.000',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Aardhommel',
                'description' => 'Belangrijke bestuiver, zonder hem minder bloemen.',
                'scenario' => 'Zonder hommels valt de bestuiving stil. Bloemen sterven zonder voedsel, en supermarkten raken langzaam leeg. Wat ooit vanzelfsprekend was, zoals fruit en groente, wordt plots een zeldzame luxe.',
                'image' => 'images/aardhommel.jpg',
                'image_scenario' => 'images/dystopische_scenario_aardhommel.png',
                'task_id' => 16,
                'created_at' => '2025-12-17 10:17:38.000',
                'updated_at' => '2025-12-17 10:17:38.000',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Wesp',
                'description' => 'Kan gezichten herkennen.',
                'scenario' => 'Zonder wespen exploderen plaaginsecten in steden en velden. Rotten fruit en afval worden broeinesten van ziekte. De menselijke aanwezigheid verliest grip op de natuur, en alles voelt onveilig.',
                'image' => 'images/wesp.webp',
                'image_scenario' => 'images/dystopische_scenario_wesp.png',
                'task_id' => 17,
                'created_at' => '2025-12-17 10:55:23.000',
                'updated_at' => '2025-12-17 10:55:24.000',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Smalle weegbree',
                'description' => 'Helpt tegen insectenbeten.',
                'scenario' => 'Zonder weegbree verdwijnt een van de laatste robuuste planten in stads- en bermmilieus. Overleven in ruige omstandigheden wordt moeilijker voor veel soorten. De stad verliest haar veerkracht.',
                'image' => 'images/smalle_weegbree.png',
                'image_scenario' => 'images/dystopische_scenario_smalle_weegbree.png',
                'task_id' => 18,
                'created_at' => '2025-12-17 10:55:26.000',
                'updated_at' => '2025-12-17 10:55:27.000',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Boterbloem',
                'description' => 'Giftig maar mooi.',
                'scenario' => 'Zonder boterbloemen verdwijnen belangrijke nectarbronnen. Vlinders en bijen hebben minder voedsel en weilanden kleuren minder. De zomerse levendigheid verdwijnt uit het landschap.',
                'image' => 'images/boterbloem.jpg',
                'image_scenario' => 'images/dystopische_scenario_boterbloem.png',
                'task_id' => 19,
                'created_at' => '2025-12-17 10:55:28.000',
                'updated_at' => '2025-12-17 10:55:30.000',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Zwarte mier',
                'description' => 'Kan 50× zijn eigen gewicht tillen.',
                'scenario' => 'Als mieren verdwijnen, verandert de bodemstructuur compleet. Het ecosysteem valt uit elkaar, en planten en dieren hebben minder overlevingskansen. Nederland wordt langzaam een land van dood stof en losse zandkorrels.',
                'image' => 'images/zwarte_mier.jpg',
                'image_scenario' => 'images/dystopische_scenario_zwarte_mier.png',
                'task_id' => 20,
                'created_at' => '2025-12-17 10:55:31.000',
                'updated_at' => '2025-12-04 10:55:34.000',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Regenworm',
                'description' => 'Houdt de bodem gezond.',
                'scenario' => 'Zonder regenwormen wordt landbouwgrond hard en droog. Oogsten mislukken vaker, en voedselzekerheid wordt een dagelijks probleem. De grond sterft letterlijk onder onze voeten.',
                'image' => 'images/regenworm.jpg',
                'image_scenario' => 'images/dystopische_scenario_regenworm.png',
                'task_id' => 21,
                'created_at' => '2025-12-17 11:16:00.000',
                'updated_at' => '2025-12-17 11:16:01.000',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Stoepmos',
                'description' => 'Overleeft extreme droogte.',
                'scenario' => 'Als mos verdwijnt, warmt de stad sneller op en houdt water zich minder goed vast. Droogte en hitte worden constant voelbaar. Het beton lijkt alles te winnen.',
                'image' => 'images/stoepmos.jpg',
                'image_scenario' => 'images/dystopische_scenario_stoepmos.png',
                'task_id' => 22,
                'created_at' => '2025-12-17 11:16:02.000',
                'updated_at' => '2025-12-17 11:16:02.000',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Fluitenkruid',
                'description' => 'Favoriet bij insecten.',
                'scenario' => 'Zonder fluitenkruid verliezen insecten een van hun laatste voedsellinten langs sloten en wegen. Vroeger drukke zomerse routes worden leeg en stil. De insectenpopulatie brokkelt af.',
                'image' => 'images/fluitenkruid.webp',
                'image_scenario' => 'images/dystopische_scenario_fluitekruid.png',
                'task_id' => 23,
                'created_at' => '2025-12-17 11:16:03.000',
                'updated_at' => '2025-12-17 11:16:03.000',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Huisvlieg',
                'description' => 'Ziet alles in slow motion.',
                'scenario' => 'Zonder huisvliegen blijft afval overal liggen om te rotten. Bacteriën en ziekten krijgen vrij spel en menselijke leefomstandigheden verslechteren snel. De geur van verval wordt een constante herinnering.',
                'image' => 'images/Huisvlieg.jpg',
                'image_scenario' => 'images/dystopische_scenario_huisvlieg.png',
                'task_id' => 24,
                'created_at' => '2025-12-17 11:16:04.000',
                'updated_at' => '2025-12-17 11:16:04.000',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Zilvervisje',
                'description' => 'Is gek op zetmeel en suiker.',
                'scenario' => 'Als zilvervisjes verdwijnen, raken huizen nog sterielder, maar ook kwetsbaarder. Andere plagen nemen hun plek in en binnenshuis groeit de chaos langzaam. Het gevoel van veiligheid in je eigen huis verdwijnt.',
                'image' => 'images/zilvervisje.jpg',
                'image_scenario' => 'images/dystopische_scenario_zilvervisje.png',
                'task_id' => 25,
                'created_at' => '2025-12-17 11:32:55.000',
                'updated_at' => '2025-12-17 11:32:55.000',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Zuring',
                'description' => 'Smaakt zuur door oxaalzuur.',
                'scenario' => 'Zonder zuring verliezen dieren noodvoedsel in schrale tijden. Overleven wordt moeilijker voor wie afhankelijk is van wilde planten. De natuur wordt minder flexibel en kwetsbaarder.',
                'image' => 'images/zuring.jpg',
                'image_scenario' => 'images/dystopische_scenario_zuring.png',
                'task_id' => 26,
                'created_at' => '2025-12-17 11:32:56.000',
                'updated_at' => '2025-12-17 11:32:57.000',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Duivenkervel',
                'description' => 'Werkt licht kalmerend.',
                'scenario' => 'Zonder duivenkervel ontbreekt voedsel voor vroege insecten in het voorjaar. De hele voedselketen begint verstoord te raken. Het voorjaar voelt fragiel en broos.',
                'image' => 'images/duivenkervel.jpg',
                'image_scenario' => 'images/dystopische_scenario_duivenkervel.png',
                'task_id' => 27,
                'created_at' => '2025-12-17 11:32:57.000',
                'updated_at' => '2025-12-17 11:32:58.000',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Gierzwaluw',
                'description' => 'Vliegt duizenden kilometers per jaar.',
                'scenario' => 'Zonder gierzwaluwen wordt de lucht over steden vol muggen en andere insecten. Zomers worden ondraaglijk en stil, zonder het geruis van vleugels. Een stukje vrijheid in de lucht verdwijnt met hen.',
                'image' => 'images/gierzwaluw.jpg',
                'image_scenario' => 'images/dystopische_scenario_gierzwaluw.png',
                'task_id' => 28,
                'created_at' => '2025-12-17 11:32:58.000',
                'updated_at' => '2025-12-17 11:33:00.000',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Egel',
                'description' => 'Kan tot 7000 stekels hebben.',
                'scenario' => 'Zonder egels exploderen slakkenpopulaties in tuinen en parken. Planten worden opgegeten en groene plekken veranderen in kale, natte puinhopen. Tuinen zijn niet langer veilig om te bezoeken.',
                'image' => 'images/egel.jpg',
                'image_scenario' => 'images/dystopische_scenario_egel.png',
                'task_id' => 29,
                'created_at' => '2025-12-17 11:38:26.000',
                'updated_at' => '2025-12-17 11:38:27.000',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Akkerwinde',
                'description' => 'Kan zich meters ver uitspreiden.',
                'scenario' => 'Als akkerwinde verdwijnt, verliezen nachtvlinders en andere nachtdieren hun laatste houvast. De biodiversiteit in velden en bermen wordt een schim van wat het ooit was. Alles wordt stiller en lege plekken nemen toe.',
                'image' => 'images/akkerwinde.jpg',
                'image_scenario' => 'images/dystopische_scenario_akkerwinde.png',
                'task_id' => 30,
                'created_at' => '2025-12-17 11:38:28.000',
                'updated_at' => '2025-12-17 11:38:29.000',
            ),
        ));
        
        
    }
}