<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $primaryKey = 'idGroup';
    protected $table = 'groups';
    protected $fillable = ['idGroup'];

    public function users(){
      return $this->hasMany('App\User','group_id');
    }
}
