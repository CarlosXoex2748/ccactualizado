<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'administrador',
          'email' => 'admin@gmail.com',
          'password' => Hash::make('admin'),
          'group_id' => 1,
      ]);

      DB::table('users')->insert([
          'name' => 'Rildo Guillén Collado',
          'email' => 'municotabambas',
          'password' => Hash::make('municotabambas'),
          'group_id' => 1,
      ]);

      DB::table('users')->insert([
          'name' => 'Julio César',
          'email' => 'ccdjuliocesar',
          'password' => Hash::make('admin'),
          'group_id' => 2,
      ]);


    }
}
