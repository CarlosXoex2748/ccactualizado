<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $primaryKey = 'idDocument';
    protected $table = 'documents';
    protected $fillable = ['idDocument '];

    public function typedocument(){
      return $this->belongsTo('App\Typedocument','typedocument_id');
    }
}
