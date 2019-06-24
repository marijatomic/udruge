<?php

use App\Association;
use Illuminate\Database\Seeder;

class AssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $associations = [
            [
                'name' => 'IAESTE',
                'description' => 'The international association for the exchange of students for tehnical experience',
                'year'=>'2010-05-10',
                'email' => 'iaeste@sum.ba',
                'phone' => '063123478',
                'faculty_id' => '1',
                'president_id'=>'2',

            ],

            [
                'name' => 'KSPFL',
                'description' => 'Klub studenata povijesti Filip Lastrić',
                'year'=>'2015-05-10',
                'email' => 'kspfl@sum.ba',
                'phone' => '063223478',
                'faculty_id' => '2',
                'president_id'=>'3',

            ],

            [
                'name' => 'PRUMO',
                'description' => 'Udruga studenata Odnosa s javnošću Filozofskog fakulteta',
                'year'=>'2015-05-10',
                'email' => 'prumo@sum.ba',
                'phone' => '062178658',
                'faculty_id' => '2',
                'president_id'=>'7',

            ],

            [
                'name' => 'Udruga studenata građevine',
                'description' => 'Udruga koja okuplja studente građevinskog fakulteta Sveučilišta u Mostaru',
                'year'=>'2015-05-10',
                'email' => 'usg@sum.ba',
                'phone' => '063663488',
                'faculty_id' => '3',
                'president_id'=>'4',

            ],

            [
                'name' => 'EGEA',
                'description' => 'Europska geografska asocijacija studenata i mladih geografa - entitet Mostar',
                'year'=>'2018-05-12',
                'email' => 'egea@sum.ba',
                'phone' => '063987123',
                'faculty_id' => '4',
                'president_id'=>'5',

            ],

            [
                'name' => 'SWITCH',
                'description' => 'Udruga studenata informatike',
                'year'=>'2017-05-10',
                'email' => 'switch@sum.ba',
                'phone' => '063987134',
                'faculty_id' => '4',
                'president_id'=>'6',

            ],

            [
                'name' => 'ELSA',
                'description' => 'Europsko udruženje studenata prava',
                'year'=>'2017-05-10',
                'email' => 'elsa@sum.ba',
                'phone' => '063987134',
                'faculty_id' => '5',
                'president_id'=>'8',

            ],

            [
                'name' => 'AIESEC',
                'description' => 'Udruženje studenata ekonomskih i organizacijskih znanosti',
                'year'=>'2017-05-10',
                'email' => 'aiesec@sum.ba',
                'phone' => '063555879',
                'faculty_id' => '6',
                'president_id'=>'9',

            ],
        ];

        foreach ($associations as $association)
            Association::create($association);
    }
}
