<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseFeatureModel extends Model
{
    protected $table = 'course_feature';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
