<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//guardar el registro eliminado

class calificaciones extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title','ide','idu','calpre','calpos','promedio','estatus'];
    protected $date=['deleted_at'];
}
