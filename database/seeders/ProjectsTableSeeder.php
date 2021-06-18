<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('projects')->insert([
          'name' => 'Línea de Base para el Desarrollo',
          'description' => 'Culminado, actualmente se encuentra en revisión',
          'year_id' => '2',
          'image' => 'img_project1.png'
      ]);

      DB::table('projects')->insert([
          'name' => 'Indicador de Avance del Desarrollo',
          'description' => 'Programado para los siguientes meses (Plan de trabajo)',
          'year_id' => '2',
          'image' => 'img_project2.png'
      ]);

      DB::table('projects')->insert([
          'name' => 'PDLC',
          'description' => 'Elaboración de propuesta «Desarrollo Territorial para el Corredor Minero» para PCM, Preparación de información sobre financiamiento de proyectos con Regalías Mineras: Universidad Nacional Micaela Bastidas de Apurímac
Proyección recursos públicos para el horizonte temporal del PDCP y coordinación con CEPLAN',
          'year_id' => '2',
          'image' => 'img_project3.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Lista de proyectos priorizados',
          'description' => 'Culminado',
          'year_id' => '2',
          'image' => 'img_project4.png'
      ]);

      DB::table('projects')->insert([
          'name' => 'Gestión en un Minuto',
          'description' => 'Se está desarrollando el acompañamiento a las autoridades y los equipos técnicos de las municipalidades en forma permanente , absolviendo  consultas sobre las problemáticas de los  proyectos priorizados. Existe  un adecuado  relacionamiento con los funcionarios. Asimismo, se han identificado las  necesidades de capacitación y de actualización de informes de gestión municipal',
          'year_id' => '2',
          'image' => 'img_project5.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Taller Desarrollo Personal en la municipalidad provincial de Cotabambas',
          'description' => '',
          'year_id' => '2',
          'image' => 'img_taller.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Taller de Capacitación de Personas Jurídicas de Cotabambas: «Capacitación para emprendedores y beneficios de ser empresa y sus modalidades»',
          'description' => '',
          'year_id' => '2',
          'image' => 'img_taller.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Taller de Capacitación: Impedimentos para contratar con el Estado',
          'description' => '',
          'year_id' => '2',
          'image' => 'img_taller.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Taller de Capacitación: Contrataciones con el Estado',
          'description' => '',
          'year_id' => '2',
          'image' => 'img_taller.jpg'
      ]);

      DB::table('projects')->insert([
          'name' => 'Taller de Capacitación: Nuevo reglamento de contrataciones con el Estado',
          'description' => '',
          'year_id' => '2',
          'image' => 'img_taller.jpg'
      ]);


    }
}
