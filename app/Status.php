<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    public function karyawan(){
        return $this->hasMany(Status::class, 'status_id', 'id');
    }
}
