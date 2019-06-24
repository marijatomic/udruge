<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [
                'name' => 'Aktivnost IAESTE 1',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'start_date'=>'2018-05-10',
                'end_date'=>'2018-10-10',
                'association_id'=>'1',

            ],

            [
                'name' => 'Aktivnost IAESTE 2',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'start_date'=>'2018-11-25',
                'end_date'=>'2018-11-28',
                'association_id'=>'1',

            ],

            [
                'name' => 'Aktivnost KSPFL',
                'description'=>'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'start_date'=>'2019-04-15',
                'end_date'=>'2019-04-16',
                'association_id'=>'2',

            ],

            [
                'name' => 'Aktivnost PRUMO 1',
                'description'=>'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'start_date'=>'2019-05-21',
                'end_date'=>'2019-05-26',
                'association_id'=>'3',

            ],

            [
                'name' => 'Aktivnost PRUMO 2',
                'description'=>'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'start_date'=>'2019-02-15',
                'end_date'=>'2019-02-16',
                'association_id'=>'3',

            ],

            [
                'name' => 'Građevinijada',
                'description'=>'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'start_date'=>'2019-06-15',
                'end_date'=>'2019-06-18',
                'association_id'=>'4',

            ],

            [
                'name' => 'Dani geografije',
                'description'=>'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'start_date'=>'2019-03-15',
                'end_date'=>'2019-03-18',
                'association_id'=>'5',

            ],

            [
                'name' => 'Dani matematike, informatike i tehnike',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                'start_date'=>'2019-03-18',
                'end_date'=>'2019-03-18',
                'association_id'=>'6',

            ],

            [
                'name' => 'Dani prava',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                'start_date'=>'2019-03-19',
                'end_date'=>'2019-03-20',
                'association_id'=>'7',

            ],

            [
                'name' => 'Pravnijada',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                'start_date'=>'2019-05-19',
                'end_date'=>'2019-05-22',
                'association_id'=>'7',

            ],

            [
                'name' => 'Dani ekonomije',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
                'start_date'=>'2019-03-21',
                'end_date'=>'2019-03-22',
                'association_id'=>'8',

            ],
        ];

        foreach ($activities as $activity)
            Activity::create($activity);
    }
}
