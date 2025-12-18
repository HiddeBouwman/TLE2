<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1,
            'option' => 'A) Alle spinnen weghalen, ze zijn gevaarlijk.',
            'correct_option' => 0,
            'image' => '',
            'task_id' => 1,
            'created_at' => '2025-12-16 16:35:53.000',
            'updated_at' => '2025-12-16 16:35:53.000',
        ),
        1 => 
        array (
            'id' => 2,
        'option' => 'B) Minder chemische sprays gebruiken in huis.',
        'correct_option' => 1,
        'image' => '',
        'task_id' => 1,
        'created_at' => '2025-12-16 16:35:55.000',
        'updated_at' => '2025-12-16 16:35:55.000',
    ),
    2 => 
    array (
        'id' => 3,
    'option' => 'C) Alleen spinnen buiten vangen en weggooien.',
    'correct_option' => 0,
    'image' => '',
    'task_id' => 1,
    'created_at' => '2025-12-16 16:35:56.000',
    'updated_at' => '2025-12-16 16:35:56.000',
),
3 => 
array (
    'id' => 4,
'option' => 'D) Spinwebben dagelijks afwassen met bleekmiddel.',
'correct_option' => 0,
'image' => '',
'task_id' => 1,
'created_at' => '2025-12-16 16:35:57.000',
'updated_at' => '2025-12-16 16:35:58.000',
),
4 => 
array (
'id' => 8,
'option' => 'A) Alle bloemen in de buurt vervangen door kunstbloemen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 3,
'created_at' => '2025-12-17 14:21:18.000',
'updated_at' => '2025-12-17 14:21:18.000',
),
5 => 
array (
'id' => 9,
'option' => 'B) Bermen en gazons minder vaak maaien en bloemen laten staan.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 3,
'created_at' => '2025-12-17 14:21:20.000',
'updated_at' => '2025-12-17 14:21:21.000',
),
6 => 
array (
'id' => 10,
'option' => 'C) Alleen gras planten zodat het netjes oogt.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 3,
'created_at' => '2025-12-17 14:21:24.000',
'updated_at' => '2025-12-17 14:21:24.000',
),
7 => 
array (
'id' => 11,
'option' => 'D) Bloemen bemesten met veel chemische mest.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 3,
'created_at' => '2025-12-17 14:21:25.000',
'updated_at' => '2025-12-17 14:21:25.000',
),
8 => 
array (
'id' => 12,
'option' => 'A) Kleine stukjes bos en groen laten bestaan.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 5,
'created_at' => '2025-12-17 14:21:32.000',
'updated_at' => '2025-12-17 14:21:32.000',
),
9 => 
array (
'id' => 13,
'option' => 'B) Alle zaadjes uit de tuin verwijderen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 5,
'created_at' => '2025-12-17 14:21:33.000',
'updated_at' => '2025-12-17 14:21:34.000',
),
10 => 
array (
'id' => 14,
'option' => 'C) Alleen grote bomen planten, geen struiken.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 5,
'created_at' => '2025-12-17 14:21:34.000',
'updated_at' => '2025-12-17 14:21:35.000',
),
11 => 
array (
'id' => 15,
'option' => 'D) Duiven met voer in huis lokken.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 5,
'created_at' => '2025-12-17 14:21:35.000',
'updated_at' => '2025-12-17 14:21:36.000',
),
12 => 
array (
'id' => 16,
'option' => 'A) Klaver in het wild laten groeien en bemesten met natuurlijke middelen.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 7,
'created_at' => '2025-12-17 14:21:37.000',
'updated_at' => '2025-12-17 14:21:37.000',
),
13 => 
array (
'id' => 17,
'option' => 'B) Alle klaver uit weilanden verwijderen voor een strakker uiterlijk.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 7,
'created_at' => '2025-12-17 14:21:38.000',
'updated_at' => '2025-12-17 14:21:38.000',
),
14 => 
array (
'id' => 18,
'option' => 'C) Kunstgras gebruiken in plaats van klaver.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 7,
'created_at' => '2025-12-17 14:21:39.000',
'updated_at' => '2025-12-17 14:21:39.000',
),
15 => 
array (
'id' => 19,
'option' => 'D) Klaver vervangen door sierplanten zonder nectar.H20',
'correct_option' => 0,
'image' => NULL,
'task_id' => 7,
'created_at' => '2025-12-17 14:21:40.000',
'updated_at' => '2025-12-17 14:21:40.000',
),
16 => 
array (
'id' => 20,
'option' => 'A) Kleine vijvers en moerasplekken behouden. ',
'correct_option' => 1,
'image' => NULL,
'task_id' => 9,
'created_at' => '2025-12-17 14:21:41.000',
'updated_at' => '2025-12-17 14:21:41.000',
),
17 => 
array (
'id' => 21,
'option' => 'B) Tuinen volledig betegelen zodat er geen slijk is.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 9,
'created_at' => '2025-12-17 14:21:42.000',
'updated_at' => '2025-12-17 14:21:42.000',
),
18 => 
array (
'id' => 22,
'option' => 'C) Padden vangen en meenemen naar een bos ver weg.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 9,
'created_at' => '2025-12-17 14:21:43.000',
'updated_at' => '2025-12-17 14:21:43.000',
),
19 => 
array (
'id' => 23,
'option' => 'D) Paddentunnels verwijderen, ze zijn onveilig.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 9,
'created_at' => '2025-12-17 14:21:44.000',
'updated_at' => '2025-12-17 14:21:45.000',
),
20 => 
array (
'id' => 24,
'option' => 'A) Bermen en ruige stukken land niet volledig maaien en een deel wild laten.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 11,
'created_at' => '2025-12-17 14:21:46.000',
'updated_at' => '2025-12-17 14:21:46.000',
),
21 => 
array (
'id' => 25,
'option' => 'B) Alle planten in bermen weghalen en bestraten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 11,
'created_at' => '2025-12-17 14:21:47.000',
'updated_at' => '2025-12-17 14:21:47.000',
),
22 => 
array (
'id' => 26,
'option' => 'C) Alleen sierplanten planten langs de weg.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 11,
'created_at' => '2025-12-17 14:21:48.000',
'updated_at' => '2025-12-17 14:21:48.000',
),
23 => 
array (
'id' => 27,
'option' => 'D) Herderstasje vervangen door snelgroeiende exotische planten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 11,
'created_at' => '2025-12-17 14:21:49.000',
'updated_at' => '2025-12-17 14:21:49.000',
),
24 => 
array (
'id' => 28,
'option' => 'A) Natuurlijke schuilplaatsen laten, zoals takken en bladeren.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 13,
'created_at' => '2025-12-17 14:21:50.000',
'updated_at' => '2025-12-17 14:21:51.000',
),
25 => 
array (
'id' => 29,
'option' => 'B) Alle bladeren opruimen zodat de tuin schoon blijft.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 13,
'created_at' => '2025-12-17 14:21:51.000',
'updated_at' => '2025-12-17 14:21:52.000',
),
26 => 
array (
'id' => 30,
'option' => 'C) Alleen chemische bestrijdingsmiddelen gebruiken.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 13,
'created_at' => '2025-12-17 14:21:53.000',
'updated_at' => '2025-12-17 14:21:53.000',
),
27 => 
array (
'id' => 31,
'option' => 'D) Oorwormen vervangen door kevers van de winkel.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 13,
'created_at' => '2025-12-17 14:21:54.000',
'updated_at' => '2025-12-17 14:21:56.000',
),
28 => 
array (
'id' => 32,
'option' => 'A) Kleefkruid laten staan op braakliggende stukken of in tuin.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 15,
'created_at' => '2025-12-18 13:53:28.000',
'updated_at' => '2025-12-18 13:53:31.000',
),
29 => 
array (
'id' => 33,
'option' => 'B) Alle wilde planten weghalen zodat tuinen netjes zijn.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 15,
'created_at' => '2025-12-18 13:53:28.000',
'updated_at' => '2025-12-18 13:53:31.000',
),
30 => 
array (
'id' => 34,
'option' => 'C) Alleen bomen planten, geen kleine planten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 15,
'created_at' => '2025-12-18 13:53:29.000',
'updated_at' => '2025-12-18 13:53:31.000',
),
31 => 
array (
'id' => 35,
'option' => 'D) Kleefkruid regelmatig maaien en weggooien.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 15,
'created_at' => '2025-12-18 13:53:29.000',
'updated_at' => '2025-12-18 13:53:32.000',
),
32 => 
array (
'id' => 36,
'option' => 'A) Nestplekken en wilde bloemen behouden.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 17,
'created_at' => '2025-12-18 14:17:53.000',
'updated_at' => '2025-12-18 14:17:56.000',
),
33 => 
array (
'id' => 37,
'option' => 'B) Wespen altijd doden als ze in de buurt komen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 17,
'created_at' => '2025-12-18 14:17:53.000',
'updated_at' => '2025-12-18 14:17:56.000',
),
34 => 
array (
'id' => 38,
'option' => 'C) Wespen voeren met zoet eten in de tuin.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 17,
'created_at' => '2025-12-18 14:17:54.000',
'updated_at' => '2025-12-18 14:17:57.000',
),
35 => 
array (
'id' => 39,
'option' => 'D) Hun nesten verplaatsen naar openbare parken.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 17,
'created_at' => '2025-12-18 14:17:54.000',
'updated_at' => '2025-12-18 14:17:57.000',
),
36 => 
array (
'id' => 40,
'option' => 'A) Bloemen laten staan in velden en tuinen.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 19,
'created_at' => '2025-12-18 14:19:11.000',
'updated_at' => '2025-12-18 14:19:15.000',
),
37 => 
array (
'id' => 41,
'option' => 'B) Alleen sierplanten zonder nectar planten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 19,
'created_at' => '2025-12-18 14:19:11.000',
'updated_at' => '2025-12-18 14:19:15.000',
),
38 => 
array (
'id' => 42,
'option' => 'C) Alle boterbloemen maaien en composteren.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 19,
'created_at' => '2025-12-18 14:19:11.000',
'updated_at' => '2025-12-18 14:19:15.000',
),
39 => 
array (
'id' => 43,
'option' => 'D) Boterbloemen vervangen door grassen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 19,
'created_at' => '2025-12-18 14:19:12.000',
'updated_at' => '2025-12-18 14:19:16.000',
),
40 => 
array (
'id' => 44,
'option' => 'A) Compost en organisch afval laten liggen.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 21,
'created_at' => '2025-12-18 14:28:47.000',
'updated_at' => '2025-12-18 14:28:51.000',
),
41 => 
array (
'id' => 45,
'option' => 'B) Grond regelmatig volledig omspitten zodat wormen verdwijnen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 21,
'created_at' => '2025-12-18 14:28:47.000',
'updated_at' => '2025-12-18 14:28:52.000',
),
42 => 
array (
'id' => 46,
'option' => 'C) Wormen alleen kopen uit een winkelpot.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 21,
'created_at' => '2025-12-18 14:28:48.000',
'updated_at' => '2025-12-18 14:28:52.000',
),
43 => 
array (
'id' => 47,
'option' => 'D) Zandgrond volledig verharden voor planten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 21,
'created_at' => '2025-12-18 14:28:48.000',
'updated_at' => '2025-12-18 14:28:52.000',
),
44 => 
array (
'id' => 48,
'option' => 'A) Langs sloten en bermen een deel wild laten groeien.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 23,
'created_at' => '2025-12-18 14:30:02.000',
'updated_at' => '2025-12-18 14:30:05.000',
),
45 => 
array (
'id' => 49,
'option' => 'B) Alleen kort gras maaien, geen bloemen laten staan.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 23,
'created_at' => '2025-12-18 14:30:03.000',
'updated_at' => '2025-12-18 14:30:05.000',
),
46 => 
array (
'id' => 50,
'option' => 'C) Siertuinen volledig betegelen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 23,
'created_at' => '2025-12-18 14:30:03.000',
'updated_at' => '2025-12-18 14:30:06.000',
),
47 => 
array (
'id' => 51,
'option' => 'D) Fluitenkruid vervangen door exotische tuinplanten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 23,
'created_at' => '2025-12-18 14:30:03.000',
'updated_at' => '2025-12-18 14:30:06.000',
),
48 => 
array (
'id' => 52,
'option' => 'A) Vochtige hoekjes niet volledig steriel maken en natuurlijke ventilatie.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 25,
'created_at' => '2025-12-18 14:33:57.000',
'updated_at' => '2025-12-18 14:34:00.000',
),
49 => 
array (
'id' => 53,
'option' => 'B) Alles altijd met bleek schoonmaken.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 25,
'created_at' => '2025-12-18 14:33:57.000',
'updated_at' => '2025-12-18 14:34:01.000',
),
50 => 
array (
'id' => 54,
'option' => 'C) Huizen volledig afgesloten houden.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 25,
'created_at' => '2025-12-18 14:33:58.000',
'updated_at' => '2025-12-18 14:34:01.000',
),
51 => 
array (
'id' => 55,
'option' => 'D) Insecten alleen bestrijden met gif.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 25,
'created_at' => '2025-12-18 14:33:59.000',
'updated_at' => '2025-12-18 14:34:01.000',
),
52 => 
array (
'id' => 56,
'option' => 'A) Kleine stukjes ruig land en bermen laten bestaan. ',
'correct_option' => 1,
'image' => NULL,
'task_id' => 27,
'created_at' => '2025-12-18 14:37:25.000',
'updated_at' => '2025-12-18 14:37:28.000',
),
53 => 
array (
'id' => 57,
'option' => 'B) Alle bloemen vervangen door kunstbloemen.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 27,
'created_at' => '2025-12-18 14:37:25.000',
'updated_at' => '2025-12-18 14:37:28.000',
),
54 => 
array (
'id' => 58,
'option' => 'C) Tuinen volledig betegelen zodat er niets groeit.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 27,
'created_at' => '2025-12-18 14:37:26.000',
'updated_at' => '2025-12-18 14:37:29.000',
),
55 => 
array (
'id' => 59,
'option' => 'D) Duivenkervel maaien voordat het bloeit.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 27,
'created_at' => '2025-12-18 14:37:27.000',
'updated_at' => '2025-12-18 14:37:29.000',
),
56 => 
array (
'id' => 60,
'option' => 'A) Tuinen natuurvriendelijk inrichten met schuilplaatsen.',
'correct_option' => 1,
'image' => NULL,
'task_id' => 29,
'created_at' => '2025-12-18 14:42:01.000',
'updated_at' => '2025-12-18 14:42:04.000',
),
57 => 
array (
'id' => 61,
'option' => 'B) Egels vangen en in een bos uitzetten.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 29,
'created_at' => '2025-12-18 14:42:01.000',
'updated_at' => '2025-12-18 14:42:04.000',
),
58 => 
array (
'id' => 62,
'option' => 'C) Egels helemaal uit je tuin houden.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 29,
'created_at' => '2025-12-18 14:42:02.000',
'updated_at' => '2025-12-18 14:42:05.000',
),
59 => 
array (
'id' => 63,
'option' => 'D) Slakken handmatig doden zodat egels niet nodig zijn.',
'correct_option' => 0,
'image' => NULL,
'task_id' => 29,
'created_at' => '2025-12-18 14:42:03.000',
'updated_at' => '2025-12-18 14:42:05.000',
),
));
        
        
    }
}