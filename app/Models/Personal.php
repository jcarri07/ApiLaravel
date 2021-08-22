<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = ['cedula','nombre','apellido','sexo','fecha_nacimiento','direccion','cargo','sede'];
}
