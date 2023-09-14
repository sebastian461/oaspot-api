<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $users = [
      [
        'email' => 'sebastiano-461@hotmail.com',
        'person_cedula' => '1719964718',
        'rol_name' => 'Administrador',
        'password' => Hash::make('admin1234'),
        'user_delete' => false,
      ]
    ];

    DB::table('user')->insert($users);
  }
}
