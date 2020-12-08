<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FreeClassModel extends Model
{
    protected $table = 'free_class';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
