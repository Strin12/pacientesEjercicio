<?php

namespace App\Repositories;

use App\Models\empresa;

class Empresarepository{


    public function create($nombre,$cargo, $telefono,$domicilio, $nombre_jef,
    $cargo_jef, $nombre_fami,$domicilio_fam, $telef_fami,$nombrE_trab, $domicilio_trab,
    $cargo_fam, $telefono_trab){
        $empresas['nombre'] = $nombre;
        $empresas['cargo'] = $cargo;
        $empresas['telefono'] = $telefono;
        $empresas['domicilio'] = $domicilio;
        $empresas['nombre_jef'] = $nombre_jef;
        $empresas['cargo_jef'] = $cargo_jef;
        $empresas['nombre_fami'] = $nombre_fami;
        $empresas['domicilio_fam'] = $domicilio_fam;
        $empresas['telef_fami'] = $telef_fami;
        $empresas['nombrE_trab'] = $nombrE_trab;
        $empresas['domicilio_trab'] = $domicilio_trab;
        $empresas['cargo_fam'] = $cargo_fam;
        $empresas['telefono_trab'] = $telefono_trab;
        return empresa::create($empresas);
    }

    
}