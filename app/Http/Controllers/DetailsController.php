<?php

namespace App\Http\Controllers;

use App\Vacante;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index() {
        $vacantes =Vacante::orderBy('id', 'desc')->paginate(20);
        return view('welcome',[
            "vacantes"=>$vacantes,
            "categoria"=>""
        ]);
    }

    public function show($id){
        $vacante =Vacante::find($id);
        return view('details',[
            "vacante"=>$vacante,
        ]);
    }

    public function categoria(Request $request){
        if($request->categoria){
            $vacantes=Vacante::where('categoria', '=' , $request->categoria)->orderBy('id', 'desc')->paginate(20);
        }else{
            $vacantes=Vacante::orderBy('id', 'desc')->paginate(20);
        }
        return view('welcome',[
            "vacantes"=>$vacantes,
            "categoria"=>$request->categoria
        ]);
    }

    public function buscar(Request $request){
        if($request->q){
            $vacantes=Vacante::where('txtBuscar', 'like' , '%'.$request->q.'%')->orderBy('id', 'desc')->paginate(20);
        }else{
            $vacantes=Vacante::orderBy('id', 'desc')->paginate(20);
        }
        return view('welcome',[
            "vacantes"=>$vacantes,
            "buscar"=>$request->q,
            "categoria"=>""
        ]);
    }
}
