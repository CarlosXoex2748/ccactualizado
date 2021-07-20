<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'idProject';
    protected $table = 'projects';
    protected $fillable = ['idProject'];

    public function typedocuments(){
      return $this->hasMany('App\Typedocument','project_id');
    }

    public function year(){
      return $this->belongsTo('App\Year','year_id');
    }
}
