<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypedocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('typedocuments')->insert([
          'name' => 'Documentos',
          'description' => 'Documentos en formato PDF, Excel, Word, PowerPoint',
          'project_id' => '1'
      ]);

      DB::table('typedocuments')->insert([
          'name' => 'Imágenes',
          'description' => 'Archivos de imágenes en formato PNG, JPG, JPEG',
          'project_id' => '1'
      ]);

      DB::table('typedocuments')->insert([
          'name' => 'Videos',
          'description' => 'Archivos de video en formato MP4',
          'project_id' => '1'
      ]);
    }
}
