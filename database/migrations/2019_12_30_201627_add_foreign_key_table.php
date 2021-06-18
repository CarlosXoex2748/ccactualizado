<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      //
      Schema::table('projects', function (Blueprint $table) {

        $table->unsignedBigInteger('year_id')->unsigned();
        $table->foreign('year_id')->references('idYear')->on('years');


      });

      Schema::table('typedocuments', function (Blueprint $table) {

        $table->unsignedBigInteger('project_id')->unsigned();
        $table->foreign('project_id')->references('idProject')->on('projects');


      });

      Schema::table('documents', function (Blueprint $table) {

        $table->unsignedBigInteger('typedocument_id')->unsigned();
        $table->foreign('typedocument_id')->references('idTypedocument')->on('typedocuments');


      });

      Schema::table('users', function (Blueprint $table){

        $table->unsignedBigInteger('group_id')->unsigned();
        $table->foreign('group_id')->references('idGroup')->on('groups');

      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      //
      Schema::table('projects', function (Blueprint $table) {
          //
          $table->dropForeign('archives_category_id_foreign');
      });

      Schema::table('typedocuments', function (Blueprint $table) {
          //
          $table->dropForeign('archives_category_id_foreign');
      });

      Schema::table('documents', function (Blueprint $table) {
          //
          $table->dropForeign('archives_category_id_foreign');
      });
  }
}
