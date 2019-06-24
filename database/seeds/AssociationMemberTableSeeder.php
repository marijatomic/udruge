<?php

use App\AssociationMember;
use Illuminate\Database\Seeder;

class AssociationMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'user_id' => '2',
                'association_id' => '1',
            ],
            [
                'user_id' => '3',
                'association_id' => '1',
            ],
            [
                'user_id' => '8',
                'association_id' => '1',
            ],
            [
                'user_id' => '4',
                'association_id' => '2',
            ],
            [
                'user_id' => '5',
                'association_id' => '2',
            ],
            [
                'user_id' => '6',
                'association_id' => '3',
            ],
            [
                'user_id' => '3',
                'association_id' => '3',
            ],
            [
                'user_id' => '5',
                'association_id' => '3',
            ],
            [
                'user_id' => '9',
                'association_id' => '4',
            ],
            [
                'user_id' => '3',
                'association_id' => '4',
            ],
            [
                'user_id' => '5',
                'association_id' => '4',
            ],
            [
                'user_id' => '7',
                'association_id' => '5',
            ],
            [
                'user_id' => '6',
                'association_id' => '6',
            ],
            [
                'user_id' => '11',
                'association_id' => '6',
            ],
            [
                'user_id' => '8',
                'association_id' => '7',
            ],
            [
                'user_id' => '10',
                'association_id' => '7',
            ],
            [
                'user_id' => '2',
                'association_id' => '8',
            ],
            [
                'user_id' => '9',
                'association_id' => '8',
            ],
        ];

        foreach ($members as $member)
            AssociationMember::create($member);
    }
}
