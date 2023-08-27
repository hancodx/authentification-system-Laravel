<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'phone' =>'0555555555',
            'password' => 'adminadmin'
        ]);

        User::create([
            'name' => 'manager',
            'phone' =>'0666666666',
            'password' => 'managermanager'
        ]);

        User::create([
            'name' => 'user',
            'phone' =>'0777777777',
            'password' => 'useruser'
        ]);
    }
}
