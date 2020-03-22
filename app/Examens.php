<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//guardar el registro eliminado

class Examens extends Model
{
    use SoftDeletes;
    protected $date=['deleted_at'];
}
