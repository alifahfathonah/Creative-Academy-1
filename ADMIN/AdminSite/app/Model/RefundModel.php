<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RefundModel extends Model
{
    protected $table = 'refund';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
