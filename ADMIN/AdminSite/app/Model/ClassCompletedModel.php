<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassCompletedModel extends Model
{
    protected $table = 'completed_class';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
