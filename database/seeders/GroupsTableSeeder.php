<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
          'name' => 'Municipalidad Provincial de Cotabambas - Tambobamba',
          'description' => 'Grupo de Cotabambas - Tambobambas',
      ]);

      DB::table('groups')->insert([
          'name' => 'CCD',
          'description' => 'Centro para la Competitividad y el Desarrollo',
      ]);
    }
}
