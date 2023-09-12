<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $cities = [
      [
        'city_id' => 'ECU-GYU',
        'country_id' => 'ECU',
        'city_name' => 'Guayaquil',
      ],
      [
        'city_id' => 'ECU-UIO',
        'country_id' => 'ECU',
        'city_name' => 'Quito',
      ],
      [
        'city_id' => 'ECU-CUE',
        'country_id' => 'ECU',
        'city_name' => 'Cuenca',
      ],
      [
        'city_id' => 'ECU-STD',
        'country_id' => 'ECU',
        'city_name' => 'Santo Domingo',
      ],
      [
        'city_id' => 'ECU-MCA',
        'country_id' => 'ECU',
        'city_name' => 'Machala',
      ],
      [
        'city_id' => 'ECU-DUR',
        'country_id' => 'ECU',
        'city_name' => 'Durán',
      ],
      [
        'city_id' => 'ECU-PTV',
        'country_id' => 'ECU',
        'city_name' => 'Portoviejo',
      ],
      [
        'city_id' => 'ECU-LOJ',
        'country_id' => 'ECU',
        'city_name' => 'Loja',
      ],
      [
        'city_id' => 'ECU-ABT',
        'country_id' => 'ECU',
        'city_name' => 'Ambato',
      ],
      [
        'city_id' => 'ECU-ESM',
        'country_id' => 'ECU',
        'city_name' => 'Esmeraldas',
      ],
      [
        'city_id' => 'ECU-QVD',
        'country_id' => 'ECU',
        'city_name' => 'Quevedo',
      ],
      [
        'city_id' => 'ECU-RIO',
        'country_id' => 'ECU',
        'city_name' => 'Riobamba',
      ],
      [
        'city_id' => 'ECU-MIL',
        'country_id' => 'ECU',
        'city_name' => 'Milagro',
      ],
      [
        'city_id' => 'ECU-IBR',
        'country_id' => 'ECU',
        'city_name' => 'Ibarra',
      ],
      [
        'city_id' => 'ECU-LLD',
        'country_id' => 'ECU',
        'city_name' => 'La Libertad',
      ],
      [
        'city_id' => 'ECU-BBH',
        'country_id' => 'ECU',
        'city_name' => 'Babahoyo',
      ],
      [
        'city_id' => 'ECU-SAN',
        'country_id' => 'ECU',
        'city_name' => 'Sangolquí',
      ],
      [
        'city_id' => 'ECU-DAU',
        'country_id' => 'ECU',
        'city_name' => 'Daule',
      ],
      [
        'city_id' => 'ECU-LTA',
        'country_id' => 'ECU',
        'city_name' => 'Latacunga',
      ],
      [
        'city_id' => 'ECU-TUL',
        'country_id' => 'ECU',
        'city_name' => 'Tulcán',
      ],
      [
        'city_id' => 'ECU-CHO',
        'country_id' => 'ECU',
        'city_name' => 'Chone',
      ],
      [
        'city_id' => 'ECU-PAJ',
        'country_id' => 'ECU',
        'city_name' => 'Pasaje',
      ],
      [
        'city_id' => 'ECU-SRA',
        'country_id' => 'ECU',
        'city_name' => 'Santa Rosa',
      ],
      [
        'city_id' => 'ECU-NLJ',
        'country_id' => 'ECU',
        'city_name' => 'Nueva Loja',
      ],
      [
        'city_id' => 'ECU-HAQ',
        'country_id' => 'ECU',
        'city_name' => 'Huaquillas',
      ],
      [
        'city_id' => 'ECU-ECM',
        'country_id' => 'ECU',
        'city_name' => 'El Carmen',
      ],
      [
        'city_id' => 'ECU-MNT',
        'country_id' => 'ECU',
        'city_name' => 'Montecristi',
      ],
      [
        'city_id' => 'ECU-SMD',
        'country_id' => 'ECU',
        'city_name' => 'Samborondón',
      ],
      [
        'city_id' => 'ECU-ECC',
        'country_id' => 'ECU',
        'city_name' => 'El Coca',
      ],
      [
        'city_id' => 'ECU-JPP',
        'country_id' => 'ECU',
        'city_name' => 'Jipijapa',
      ],
      [
        'city_id' => 'ECU-STE',
        'country_id' => 'ECU',
        'city_name' => 'Santa Elena',
      ],
      [
        'city_id' => 'ECU-OTV',
        'country_id' => 'ECU',
        'city_name' => 'Otavalo',
      ],
      [
        'city_id' => 'ECU-CYB',
        'country_id' => 'ECU',
        'city_name' => 'Cayambe',
      ],
      [
        'city_id' => 'ECU-BNF',
        'country_id' => 'ECU',
        'city_name' => 'Buena Fe',
      ],
      [
        'city_id' => 'ECU-VEN',
        'country_id' => 'ECU',
        'city_name' => 'Ventanas',
      ],
      [
        'city_id' => 'ECU-VLI',
        'country_id' => 'ECU',
        'city_name' => 'Velasco Ibarra',
      ],
      [
        'city_id' => 'ECU-LTC',
        'country_id' => 'ECU',
        'city_name' => 'La Troncal',
      ],
      [
        'city_id' => 'ECU-ETF',
        'country_id' => 'ECU',
        'city_name' => 'El Triunfo',
      ],
      [
        'city_id' => 'ECU-SAL',
        'country_id' => 'ECU',
        'city_name' => 'Salinas',
      ],
      [
        'city_id' => 'ECU-GVM',
        'country_id' => 'ECU',
        'city_name' => 'General Villamil',
      ],
      [
        'city_id' => 'ECU-AZG',
        'country_id' => 'ECU',
        'city_name' => 'Azogues',
      ],
      [
        'city_id' => 'ECU-PUY',
        'country_id' => 'ECU',
        'city_name' => 'Puyo',
      ],
      [
        'city_id' => 'ECU-VNC',
        'country_id' => 'ECU',
        'city_name' => 'Vinces',
      ],
      [
        'city_id' => 'ECU-LCC',
        'country_id' => 'ECU',
        'city_name' => 'La Concordia',
      ],
      [
        'city_id' => 'ECU-RZT',
        'country_id' => 'ECU',
        'city_name' => 'Rosa Zárate',
      ],
    ];

    DB::table('city')->insert($cities);
  }
}
