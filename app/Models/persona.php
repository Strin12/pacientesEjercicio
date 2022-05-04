<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'persona';

    protected $fillable = [
            'id',
            'nombre',
            'apPaterno',
            'apMaterno',
            'edad',
            'FechNA',
            'direccion',
            'colonia',
            'ciudad',
            'estado',
            'Codpostal',
            'telefonos',
            'sexo',
            'Edo_civil',
            'ocupacion',
            'emp_aseg',
            'alergias',
            'T_credito',
            'empresas_id'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at', 
        'deleted_at',
    ];
    
    public function empresas(){
        return $this->hasOne(empresa::class);
    }
}
