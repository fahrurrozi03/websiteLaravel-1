<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$/6BGaIWwDly2W.bcm6Z7Z.7HAH.h/pYeBrjV7aUgnPBj0W0W7hS5y',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-12-03 13:59:37',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
