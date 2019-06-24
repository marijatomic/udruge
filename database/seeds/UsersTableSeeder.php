<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [

            [
                'name' => 'Marko',
                'surname' => 'Džoić',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1993-06-28',
                'email' => 'admin@gmail.com',
                'phone' => '063111000',
                'type' => 'admin',
            ],

            [
                'name' => 'Petar',
                'surname' => 'Petrović',
                'password' => bcrypt('12345678'),
                'index' => '1111',
                'birth_date'=>'1993-05-15',
                'email' => 'petarp@gmail.com',
                'phone' => '063111222',
                'type' => 'user',
            ],

            [
                'name' => 'Ivan',
                'surname' => 'Ivanović',
                'password' => bcrypt('12345678'),
                'index' => '2222',
                'birth_date'=>'1992-06-16',
                'email' => 'ivani@gmail.com',
                'phone' => '063222333',
                'type' => 'user',
            ],

            [
                'name' => 'Marko',
                'surname' => 'Marković',
                'password' => bcrypt('12345678'),
                'index' => '3333',
                'birth_date'=>'1992-09-28',
                'email' => 'markom@gmail.com',
                'phone' => '063333444',
                'type' => 'user',
            ],

            [
                'name' => 'Ana',
                'surname' => 'Anić',
                'password' => bcrypt('12345678'),
                'index' => '4444',
                'birth_date'=>'1995-10-28',
                'email' => 'anaa@gmail.com',
                'phone' => '063444555',
                'type' => 'user',
            ],

            [
                'name' => 'Marija',
                'surname' => 'Marić',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1994-11-20',
                'email' => 'marijam@gmail.com',
                'phone' => '063555666',
                'type' => 'user',
            ],

            [
                'name' => 'John',
                'surname' => 'Doe',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1994-11-20',
                'email' => 'johnd@gmail.com',
                'phone' => '063666777',
                'type' => 'user',
            ],

            [
                'name' => 'Iva',
                'surname' => 'Ivanić',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1996-01-23',
                'email' => 'ivai@gmail.com',
                'phone' => '063777888',
                'type' => 'user',
            ],

            [
                'name' => 'Jane',
                'surname' => 'Clark',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1991-03-01',
                'email' => 'janec@gmail.com',
                'phone' => '063888999',
                'type' => 'user',
            ],

            [
                'name' => 'Andrea',
                'surname' => 'Black',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1989-11-09',
                'email' => 'andreab@gmail.com',
                'phone' => '063999111',
                'type' => 'user',
            ],

            [
                'name' => 'Boris',
                'surname' => 'Bond',
                'password' => bcrypt('12345678'),
                'index' => '5555',
                'birth_date'=>'1989-11-09',
                'email' => 'borisb@gmail.com',
                'phone' => '063999111',
                'type' => 'user',
            ],


        ];

        foreach ($users as $user)
            User::create($user);
    }

}
