<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExplanationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('explanations')->delete();
        
        \DB::table('explanations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'answer_id' => 1,
                'description' => 'Verwijdert natuurlijke insectenbestrijders en maakt de omgeving kwetsbaar.',
                'conclusion' => NULL,
                'created_at' => '2025-12-16 16:38:25.000',
                'updated_at' => '2025-12-16 16:38:25.000',
            ),
            1 => 
            array (
                'id' => 2,
                'answer_id' => 2,
                'description' => 'Spinnen worden niet gedood en behouden hun rol als natuurlijke insectenbestrijder.',
                'conclusion' => 'Spinnen eten insecten zoals vliegen en muggen, waardoor je huis en de natuur in balans blijven. Zonder hen zou het ecosysteem sneller uit balans raken en zouden plaagdieren toenemen. Ze zijn klein, maar superbelangrijk.',
                'created_at' => '2025-12-16 16:38:27.000',
                'updated_at' => '2025-12-16 16:38:29.000',
            ),
            2 => 
            array (
                'id' => 3,
                'answer_id' => 3,
                'description' => 'Verstoort het ecosysteem door spinnen weg te halen.',
                'conclusion' => NULL,
                'created_at' => '2025-12-16 16:38:30.000',
                'updated_at' => '2025-12-16 16:38:31.000',
            ),
            3 => 
            array (
                'id' => 4,
                'answer_id' => 4,
                'description' => 'Vernietigt het leefgebied en doodt de spinnen.',
                'conclusion' => NULL,
                'created_at' => '2025-12-16 16:38:32.000',
                'updated_at' => '2025-12-16 16:38:32.000',
            ),
            4 => 
            array (
                'id' => 5,
                'answer_id' => 8,
                'description' => 'Vervangen door kunstbloemen levert geen voedsel voor insecten.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:27:52.000',
                'updated_at' => '2025-12-17 14:27:52.000',
            ),
            5 => 
            array (
                'id' => 6,
                'answer_id' => 9,
                'description' => 'Bermen en gazons minder maaien laat madeliefjes bloeien en ondersteunt insecten.',
                'conclusion' => 'Maak een foto van een berm of veld met madeliefjes die ongemaaid staat.',
                'created_at' => '2025-12-17 14:27:53.000',
                'updated_at' => '2025-12-17 14:27:54.000',
            ),
            6 => 
            array (
                'id' => 7,
                'answer_id' => 10,
                'description' => 'Alleen gras planten geeft geen nectar en beperkt biodiversiteit.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:27:55.000',
                'updated_at' => '2025-12-17 14:27:55.000',
            ),
            7 => 
            array (
                'id' => 8,
                'answer_id' => 11,
                'description' => 'Chemische bemesting kan insecten en bodemleven schaden.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:27:56.000',
                'updated_at' => '2025-12-17 14:27:56.000',
            ),
            8 => 
            array (
                'id' => 9,
                'answer_id' => 12,
                'description' => 'Duiven hebben plekken nodig voor rust en voedsel; ondersteunt zaadverspreiding.',
                'conclusion' => 'Plant een struik of laat een bessenstruik groeien en maak er een foto van.',
                'created_at' => '2025-12-17 14:27:57.000',
                'updated_at' => '2025-12-17 14:27:57.000',
            ),
            9 => 
            array (
                'id' => 10,
                'answer_id' => 13,
                'description' => 'Geen voedsel voor houtduiven.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:28:17.000',
                'updated_at' => '2025-12-17 14:28:20.000',
            ),
            10 => 
            array (
                'id' => 11,
                'answer_id' => 14,
                'description' => 'Duiven hebben ook struiken en kleine planten nodig.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:28:17.000',
                'updated_at' => '2025-12-17 14:28:20.000',
            ),
            11 => 
            array (
                'id' => 12,
                'answer_id' => 15,
                'description' => 'Binnenvoeren kan ziekten verspreiden en is onnatuurlijk.',
                'conclusion' => NULL,
                'created_at' => '2025-12-17 14:28:18.000',
                'updated_at' => '2025-12-17 14:28:20.000',
            ),
            12 => 
            array (
                'id' => 13,
                'answer_id' => 16,
                'description' => 'Klaver laten groeien en bemesten met natuurlijke middelen verbetert bodem en voedt dieren.',
                'conclusion' => 'Maak een foto van een tuin of veld waar witte klaver groeit.',
                'created_at' => '2025-12-18 13:51:30.000',
                'updated_at' => '2025-12-18 13:51:31.000',
            ),
            13 => 
            array (
                'id' => 14,
                'answer_id' => 17,
                'description' => 'Verwijderen maakt weilanden armer en minder voedselrijk.
',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:32.000',
                'updated_at' => '2025-12-18 13:51:32.000',
            ),
            14 => 
            array (
                'id' => 15,
                'answer_id' => 18,
                'description' => 'Kunstgras vervangt geen levende planten of bodemkwaliteit.
',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:33.000',
                'updated_at' => '2025-12-18 13:51:34.000',
            ),
            15 => 
            array (
                'id' => 16,
                'answer_id' => 19,
                'description' => 'Sierplanten bieden geen voedingswaarde voor dieren of bodemleven.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:35.000',
                'updated_at' => '2025-12-18 13:51:35.000',
            ),
            16 => 
            array (
                'id' => 17,
                'answer_id' => 20,
                'description' => 'Padden hebben vochtige plekken nodig om te leven en te broeden.',
                'conclusion' => 'Padden eten veel insecten en helpen plagen onder controle te houden. Zonder hun rol kan het ecosysteem sneller uit balans raken.',
                'created_at' => '2025-12-18 13:51:37.000',
                'updated_at' => '2025-12-18 13:51:37.000',
            ),
            17 => 
            array (
                'id' => 18,
                'answer_id' => 21,
                'description' => 'Eliminatie van leefomgeving maakt overleving onmogelijk.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:39.000',
                'updated_at' => '2025-12-18 13:51:39.000',
            ),
            18 => 
            array (
                'id' => 19,
                'answer_id' => 22,
                'description' => 'Geforceerd verplaatsen veroorzaakt stress en overlevingproblemen.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:40.000',
                'updated_at' => '2025-12-18 13:51:41.000',
            ),
            19 => 
            array (
                'id' => 20,
                'answer_id' => 23,
                'description' => 'Paddentunnels helpen padden veilig oversteken; verwijderen is gevaarlijk.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:42.000',
                'updated_at' => '2025-12-18 13:51:43.000',
            ),
            20 => 
            array (
                'id' => 21,
                'answer_id' => 24,
                'description' => 'Bermen niet maaien en wild laten groeien helpt herderstasje overleven en voorkomt erosie.',
                'conclusion' => 'Herderstasje ondersteunt bodem en insecten. Zonder zulke planten zou het ecosysteem minder veerkrachtig zijn en sommige insectenpopulaties kunnen afnemen.',
                'created_at' => '2025-12-18 13:51:45.000',
                'updated_at' => '2025-12-18 13:51:45.000',
            ),
            21 => 
            array (
                'id' => 22,
                'answer_id' => 25,
                'description' => 'Verwijderen maakt de bodem kwetsbaar.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:47.000',
                'updated_at' => '2025-12-18 13:51:47.000',
            ),
            22 => 
            array (
                'id' => 23,
                'answer_id' => 26,
                'description' => 'Alleen sierplanten planten vermindert biodiversiteit.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:48.000',
                'updated_at' => '2025-12-18 13:51:49.000',
            ),
            23 => 
            array (
                'id' => 24,
                'answer_id' => 27,
                'description' => 'Exotische planten vervangen ondersteunt lokale soorten niet.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:50.000',
                'updated_at' => '2025-12-18 13:51:51.000',
            ),
            24 => 
            array (
                'id' => 25,
                'answer_id' => 28,
                'description' => 'Helpt bladluizen bestrijden en heeft schuilplekken nodig.',
                'conclusion' => 'Oorwormen eten bladluizen en beschermen zo planten tegen plagen. Ze helpen de natuur op een natuurlijke manier in balans te houden.',
                'created_at' => '2025-12-18 13:51:56.000',
                'updated_at' => '2025-12-18 13:51:57.000',
            ),
            25 => 
            array (
                'id' => 26,
                'answer_id' => 29,
                'description' => 'Vernietigt leefgebied.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:51:58.000',
                'updated_at' => '2025-12-18 13:51:59.000',
            ),
            26 => 
            array (
                'id' => 27,
                'answer_id' => 30,
                'description' => 'Doodt nuttige insecten.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:52:00.000',
                'updated_at' => '2025-12-18 13:52:00.000',
            ),
            27 => 
            array (
                'id' => 28,
                'answer_id' => 31,
                'description' => 'Kunstmatige vervanging werkt ecologisch niet.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 13:52:01.000',
                'updated_at' => '2025-12-18 13:52:02.000',
            ),
            28 => 
            array (
                'id' => 29,
                'answer_id' => 32,
                'description' => 'Laten staan geeft voedsel en nestmateriaal voor vogels en kleine dieren.',
                'conclusion' => 'Kleefkruid biedt voedsel en nestmateriaal voor vogels en insecten. Door het te laten groeien, help je dieren te overleven en ecosystemen in balans te houden.',
                'created_at' => '2025-12-18 14:06:15.000',
                'updated_at' => '2025-12-18 14:06:16.000',
            ),
            29 => 
            array (
                'id' => 30,
                'answer_id' => 33,
                'description' => 'Verwijderen vermindert biodiversiteit.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:06:18.000',
                'updated_at' => '2025-12-18 14:06:19.000',
            ),
            30 => 
            array (
                'id' => 31,
                'answer_id' => 34,
                'description' => 'Alleen bomen planten biedt geen alternatief voor kleefkruid.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:06:21.000',
                'updated_at' => '2025-12-18 14:06:21.000',
            ),
            31 => 
            array (
                'id' => 32,
                'answer_id' => 35,
                'description' => 'Maaien en weggooien vernietigt leefgebied.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:06:23.000',
                'updated_at' => '2025-12-18 14:06:23.000',
            ),
            32 => 
            array (
                'id' => 33,
                'answer_id' => 36,
                'description' => 'Wespen bestrijden insecten en hebben bloemen nodig voor voedsel.',
                'conclusion' => 'Wespen helpen insectenplagen onder controle te houden en bestuiven bloemen. Ze zijn dus niet alleen irritant, maar ook cruciaal voor een gezonde tuin.',
                'created_at' => '2025-12-18 14:11:58.000',
                'updated_at' => '2025-12-18 14:11:59.000',
            ),
            33 => 
            array (
                'id' => 34,
                'answer_id' => 37,
                'description' => 'Verstoort ecosysteem en vergroot plaagproblemen.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:12:00.000',
                'updated_at' => '2025-12-18 14:12:00.000',
            ),
            34 => 
            array (
                'id' => 35,
                'answer_id' => 38,
                'description' => 'Aantrekken kan gevaarlijk en onnatuurlijk zijn.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:12:01.000',
                'updated_at' => '2025-12-18 14:12:02.000',
            ),
            35 => 
            array (
                'id' => 36,
                'answer_id' => 39,
                'description' => 'Verplaatsing stressen de wespen en verstoren ecosystemen.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:12:03.000',
                'updated_at' => '2025-12-18 14:12:03.000',
            ),
            36 => 
            array (
                'id' => 37,
                'answer_id' => 40,
                'description' => 'Bloemen laten staan biedt nectar voor vlinders en bijen.',
                'conclusion' => 'Boterbloemen leveren nectar voor bijen en vlinders. Ze zorgen dat insecten en de planten die zij bestuiven gezond blijven.',
                'created_at' => '2025-12-18 14:20:37.000',
                'updated_at' => '2025-12-18 14:20:37.000',
            ),
            37 => 
            array (
                'id' => 38,
                'answer_id' => 41,
                'description' => 'Sierplanten zonder nectar bieden geen voedsel.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:20:38.000',
                'updated_at' => '2025-12-18 14:20:39.000',
            ),
            38 => 
            array (
                'id' => 39,
                'answer_id' => 42,
                'description' => 'Maaien en composteren vernietigt voedselbron.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:20:40.000',
                'updated_at' => '2025-12-18 14:20:40.000',
            ),
            39 => 
            array (
                'id' => 40,
                'answer_id' => 43,
                'description' => 'Gras vervangen biedt geen nectar en beperkt biodiversiteit.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:20:41.000',
                'updated_at' => '2025-12-18 14:20:42.000',
            ),
            40 => 
            array (
                'id' => 41,
                'answer_id' => 44,
                'description' => 'Verwerkt organisch materiaal en verbetert bodemkwaliteit.',
                'conclusion' => 'Regenwormen maken de bodem luchtig en vruchtbaar. Zonder hen groeit er minder goed voedsel en planten, dus ze zijn essentieel voor gezonde tuinen en natuur.',
                'created_at' => '2025-12-18 14:28:18.000',
                'updated_at' => '2025-12-18 14:28:18.000',
            ),
            41 => 
            array (
                'id' => 42,
                'answer_id' => 45,
                'description' => 'Vernietigt wormenpopulaties en bodemstructuur.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:28:21.000',
                'updated_at' => '2025-12-18 14:28:22.000',
            ),
            42 => 
            array (
                'id' => 43,
                'answer_id' => 46,
                'description' => 'Vervangt geen gezonde, lokale populatie.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:28:23.000',
                'updated_at' => '2025-12-18 14:28:24.000',
            ),
            43 => 
            array (
                'id' => 44,
                'answer_id' => 47,
                'description' => 'Wormen kunnen niet overleven op verharde oppervlakken.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:28:25.000',
                'updated_at' => '2025-12-18 14:28:26.000',
            ),
            44 => 
            array (
                'id' => 45,
                'answer_id' => 48,
                'description' => 'Wild laten groeien langs sloten en bermen ondersteunt insecten en biodiversiteit.',
                'conclusion' => 'Fluitenkruid levert voedsel voor insecten en verhoogt biodiversiteit. Zonder zulke planten zouden veel insectenpopulaties afnemen.',
                'created_at' => '2025-12-18 14:31:55.000',
                'updated_at' => '2025-12-18 14:31:56.000',
            ),
            45 => 
            array (
                'id' => 46,
                'answer_id' => 49,
                'description' => 'Kort maaien vermindert voedsel voor insecten.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:31:59.000',
                'updated_at' => '2025-12-18 14:32:00.000',
            ),
            46 => 
            array (
                'id' => 47,
                'answer_id' => 50,
                'description' => 'Tegelzetten vernietigt leefgebied.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:32:01.000',
                'updated_at' => '2025-12-18 14:32:01.000',
            ),
            47 => 
            array (
                'id' => 48,
                'answer_id' => 51,
                'description' => 'Vervangen door exotische tuinplanten ondersteunt lokale fauna niet.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:32:03.000',
                'updated_at' => '2025-12-18 14:32:03.000',
            ),
            48 => 
            array (
                'id' => 49,
                'answer_id' => 52,
                'description' => 'Houdt zilvervisjes en hun ecosysteem in balans.',
                'conclusion' => 'Zilvervisjes helpen kleine resten af te breken en houden micro-ecosystemen gezond. Ze laten zien dat zelfs binnenshuis natuurwaarde belangrijk is.',
                'created_at' => '2025-12-18 14:35:19.000',
                'updated_at' => '2025-12-18 14:35:20.000',
            ),
            49 => 
            array (
                'id' => 50,
                'answer_id' => 53,
                'description' => 'Doodt insecten en maakt omgeving ongeschikt.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:35:21.000',
                'updated_at' => '2025-12-18 14:35:21.000',
            ),
            50 => 
            array (
                'id' => 51,
                'answer_id' => 54,
                'description' => 'Verstoort natuurlijke ventilatie en habitats.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:35:22.000',
                'updated_at' => '2025-12-18 14:35:23.000',
            ),
            51 => 
            array (
                'id' => 52,
                'answer_id' => 55,
                'description' => 'Giften doden nuttige insecten onnodig.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:35:24.000',
                'updated_at' => '2025-12-18 14:35:24.000',
            ),
            52 => 
            array (
                'id' => 53,
                'answer_id' => 56,
                'description' => 'Kleine stukjes ruig land laten bestaan ondersteunt vroege insecten.',
                'conclusion' => 'Duivenkervel levert vroege nectar voor insecten. Zonder deze planten zou de voedselketen in het voorjaar verstoord raken.',
                'created_at' => '2025-12-18 14:40:43.000',
                'updated_at' => '2025-12-18 14:40:43.000',
            ),
            53 => 
            array (
                'id' => 54,
                'answer_id' => 57,
                'description' => 'Vervangen door kunstbloemen biedt geen voedsel.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:40:44.000',
                'updated_at' => '2025-12-18 14:40:45.000',
            ),
            54 => 
            array (
                'id' => 55,
                'answer_id' => 58,
                'description' => 'Tuinen volledig betegelen elimineert de plant.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:40:46.000',
                'updated_at' => '2025-12-18 14:40:46.000',
            ),
            55 => 
            array (
                'id' => 56,
                'answer_id' => 59,
                'description' => 'Maaien voor bloei vermindert voedsel voor insecten.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:40:48.000',
                'updated_at' => '2025-12-18 14:40:48.000',
            ),
            56 => 
            array (
                'id' => 57,
                'answer_id' => 60,
                'description' => 'Egels hebben schuilplaatsen, voedsel en verbindingen nodig.',
                'conclusion' => 'Egels eten slakken en andere kleine dieren, waardoor ze natuurlijke plaagbestrijders zijn. Door schuilplekken te creëren help je hen overleven en de balans in je tuin te behouden.',
                'created_at' => '2025-12-18 14:44:05.000',
                'updated_at' => '2025-12-18 14:44:05.000',
            ),
            57 => 
            array (
                'id' => 58,
                'answer_id' => 61,
                'description' => 'Verplaatst egels onnatuurlijk en kan ziekten verspreiden.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:44:08.000',
                'updated_at' => '2025-12-18 14:44:09.000',
            ),
            58 => 
            array (
                'id' => 59,
                'answer_id' => 62,
                'description' => 'Vermindert leefgebied drastisch.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:44:11.000',
                'updated_at' => '2025-12-18 14:44:12.000',
            ),
            59 => 
            array (
                'id' => 60,
                'answer_id' => 63,
                'description' => 'Egels hebben slakken nodig als voedsel.',
                'conclusion' => NULL,
                'created_at' => '2025-12-18 14:44:13.000',
                'updated_at' => '2025-12-18 14:44:13.000',
            ),
        ));
        
        
    }
}