<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $persons = [
      [
        'person_cedula' => '1719964718',
        'person_name' => 'SEBASTIÁN',
        'person_lastname' => 'ÁLAVA',
        'person_phone' => '0906342418',
        'city_id' => 'ECU-UIO',
        'person_address' => 'Ciudadela Ibarra',
        'person_delete' => false,
      ],
    ];

    DB::table('person')->insert($persons);
  }
}
