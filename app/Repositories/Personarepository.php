<?php

namespace App\Repositories;

use App\Models\persona;

class Personarepository{


    public function create($nombre,$apPaterno, $apMaterno,$edad, $FechNA,
    $direccion, $colonia,$ciudad, $estado,$Codpostal, $telefonos,$sexo, 
    $Edo_civil,$ocupacion, $emp_aseg,$alergias,$T_credito, $empresas_id,){
        $personas['nombre'] = $nombre;
        $personas['apPaterno'] = $apPaterno;
        $personas['apMaterno'] = $apMaterno;
        $personas['edad'] = $edad;
        $personas['FechNA'] = $FechNA;
        $personas['direccion'] = $direccion;
        $personas['colonia'] = $colonia;
        $personas['ciudad'] = $ciudad;
        $personas['estado'] = $estado;
        $personas['Codpostal'] = $Codpostal;
        $personas['telefonos'] = $telefonos;
        $personas['sexo'] = $sexo;
        $personas['sexo'] = $sexo;
        $personas['Edo_civil'] = $Edo_civil;
        $personas['ocupacion'] = $ocupacion;
        $personas['emp_aseg'] = $emp_aseg;
        $personas['alergias'] = $alergias;
        $personas['T_credito'] = $T_credito;
        $personas['empresas_id'] = $empresas_id;
        return persona::create($personas);
    }


}