<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typedocument extends Model
{
    protected $primaryKey = 'idTypedocument';
    protected $table = 'typedocuments';
    protected $fillable = ['idTypedocument'];

    public function documents(){
      return $this->hasMany('App\Document','typedocument_id');
    }

    public function project(){
      return $this->belongsTo('App\Project','project_id');
    }


}
