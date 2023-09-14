<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $countries = [
      [
        'country_id' => 'ECU',
        'country_name' => 'Ecuador',
        'country_ext' => '+593',
      ],
    ];

    DB::table('country')->insert($countries);
  }
}
