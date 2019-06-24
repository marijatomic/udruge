<?php

use App\Faculty;
use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = [
            [
                'name' => 'Sveučilište u Mostaru',
                'short_name' => 'SUM',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'sum@sum.ba',
                'phone' => '063123456'
            ],

            [
                'name' => 'Filozofski fakultet',
                'short_name' => 'FF',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'ff@sum.ba',
                'phone' => '063256897'
            ],

            [
                'name' => 'Građevinski fakultet fakultet',
                'short_name' => 'GF',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'gf@sum.ba',
                'phone' => '063554444'
            ],

            [
                'name' => 'Fakultet prirodoslovno matematičkih znanosti',
                'short_name' => 'FPMOZ',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'fpmoz@sum.ba',
                'phone' => '036212589'
            ],

            [
                'name' => 'Pravni fakultet',
                'short_name' => 'PF',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'pf@sum.ba',
                'phone' => '063356874'
            ],

            [
                'name' => 'Ekonomski fakultet',
                'short_name' => 'EF',
                'address' => 'Matice Hrvatske b.b',
                'email' => 'ef@sum.ba',
                'phone' => '063957855'
            ]
        ];

        foreach ($faculties as $faculty)
            Faculty::create($faculty);
    }
}
