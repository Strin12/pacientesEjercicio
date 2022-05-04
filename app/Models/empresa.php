<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresa extends Model
{  
     use HasFactory;
    use SoftDeletes;
    protected $table = 'empresa';

    protected $fillable = [
            'id',
            'nombre',
            'cargo',
            'telefono',
            'domicilio',
            'nombre_jef',
            'cargo_jef',
            'nombre_fami',
            'domicilio_fam',
            'telef_fami',
            'nombrE_trab',
            'domicilio_trab',
            'cargo_fam',
            'telefono_trab'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at', 
        'deleted_at',
    ];
    
    public function personas(){
        return $this->belongsTo(persona::class);
    }
}