<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $primaryKey = 'idYear';
    protected $table = 'years';
    protected $fillable = ['idYear'];

    public function projects(){
      return $this->hasMany('App\Project','year_id');
    }
}
