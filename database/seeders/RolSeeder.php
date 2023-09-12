<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $rols = [
      [
        'rol_name' => 'Administrador',
        'rol_description' => 'Administrador del sistema',
      ],
      [
        'rol_name' => 'Usuario',
        'rol_description' => 'Usuario del sistema',
      ],
      [
        'rol_name' => 'Cliente',
        'rol_description' => 'Cliente del sistema',
      ],
    ];

    DB::table('rol')->insert($rols);
  }
}
