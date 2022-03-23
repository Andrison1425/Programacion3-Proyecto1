<?php

namespace App\Http\Controllers;

use App\Vacante;
use Illuminate\Http\Request;

class publicarVacante extends Controller
{
    public function index() {
        return view('newVacante');
    }

    public function insert(Request $request){

        if($request->file('img')){
            foreach($request->file('img') as $pos => $file)
            {
                $name = $pos.time().'.'.$file->extension();
                $file->move(public_path().'/img/vacantes/', $name);
                $data[] = '/img/vacantes/'.$name;
            }
            $file = $request->file('img');
            $name = time().'.'.$file->extension();
            $file->move(public_path().'/img/vacantes/', $name);
            $request['img_ref'] = '/public/img/vacantes/'.$name;
            unset($request['img']);
        }

        $request['descripcion']=nl2br( $request['descripcion']);
        $request['txtBuscar']=nl2br( $request['descripcion']).' '.$request['ubicacion'].' '.$request['nombre_empresa'].' '.$request['categoria'];

        Vacante::create($request->all());
        return redirect(route('vacante.index'))->with('Notificacion', 'Se ha enviado la solicitud, el administrador va a aprobar o rechazar la vacante sin previo aviso');
    }
}
