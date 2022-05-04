<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empresa;
use App\Models\persona;
use App\Repositories\Empresarepository;
use App\Repositories\Personarepository;

class PersonaController extends Controller
{
    protected $persons_repository;
    protected $empresa_repository;

    public function __construct(Personarepository $_persona, Empresarepository $empresa)
    {
        $this->persons_repository = $_persona;
        $this->empresa_repository = $empresa;
    }

    public function register(Request $request)
    {

        try {

            $empresa = $this->empresa_repository->create(
                $request->get('name'),
                $request->get('cargo'),
                $request->get('telefono'),
                $request->get('domicilio'),
                $request->get('nombre_jef'),
                $request->get('cargo_jef'),
                $request->get('nombre_fami'),
                $request->get('domicilio_fam'),
                $request->get('telef_fami'),
                $request->get('nombrE_trab'),
                $request->get('domicilio_trab'),
                $request->get('cargo_fam'),
                $request->get('telefono_trab')
            );


            $person = $this->persons_repository->create(
                $request->get('nombre_p'),
                $request->get('apPaterno'),
                $request->get('apMaterno'),
                $request->get('edad'),
                $request->get('FechNA'),
                $request->get('direccion'),
                $request->get('colonia'),
                $request->get('ciudad'),
                $request->get('estado'),
                $request->get('Codpostal'),
                $request->get('telefonos'),
                $request->get('sexo'),
                $request->get('Edo_civil'),
                $request->get('ocupacion'),
                $request->get('emp_aseg'),
                $request->get('alergias'),
                $request->get('T_credito'),
                $empresa->id,
            );



            return response()->json(compact('person', 'empresa'), 201);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()]);
        }
    }

}
