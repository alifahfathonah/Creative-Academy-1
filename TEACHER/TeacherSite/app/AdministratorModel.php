<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministratorModel extends Model
{
    public $table='administrator';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
