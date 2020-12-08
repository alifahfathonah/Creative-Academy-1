<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassCategoryModel extends Model
{
    protected $table = 'class_category';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}

