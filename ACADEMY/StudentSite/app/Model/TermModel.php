<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TermModel extends Model
{
    protected $table = 'terms';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
