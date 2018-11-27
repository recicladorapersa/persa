<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\maestros;

class maestros extends Controller
{
    public function bienvenida()
	{
		return view ('welcome');
	}
	public function areatriangulo()
	{
		$base = 34;
		$altura= 45;
		$area= ($base * $altura)/2;
		echo "El area del triangulo es: $area";
	}
	public function areatriangulo2($b,$a)
	{
		$base = $b;
		$altura= $a;
		$area= ($base * $altura)/2;
		//echo "El area del triangulo es: $area";
		return view ('triangulo')
		->with('base',$base)
		->with('altura',$altura)
		->with('area',$area);
	}
	public function areatriangulo3($b,$a)
	{
		$base = $b;
		$altura= $a;
		$area= ($base * $altura)/2;
		return view ('trian',compact('base','altura','area'));
	}
	public function vprincipal()
	{
		return view('sistema.principal');
	}
	public function valtausuario()
	{
		return view('sistema.altausuario');
	}
	public function valtaproducto()
	{
		return view('sistema.altaproducto');
	}
	public function altamaestros()
	{   
	 
	 $clavequesigue = maestros::orderBy('idm','desc')->take(1)->get();
     $idms = $clavequesigue[0]->idm+1;

		return view ("sistema.altamaestros")->with(['idms'=>$idms]);
	}
	public function guardainfo(Request $request)
	{
		 $nombre = $request->nombre;
		 $idm= $request->idm;
		 $edad = $request->edad;
		 $carrera = $request->carrera;
		 $sexo= $request->sexo;
		 
		 $this->validate($request,[
	     'idm'=>'required|numeric',
		 'nombre'=>'required|alpha',
		 'carrera'=>'required|alpha',
		 'sexo'=>'required|alpha',
		 'edad'=>'required|integer|min:18|max:50',['regex:/^[0-9]{2}$/'],
	      ]);
		 
		echo "listo para guardar";
	}
}





















