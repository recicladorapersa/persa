<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;
use App\clientes;
use App\choferes;

class chofer extends Controller
{
public function altachofer()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	 $clavequesigue = choferes::withTrashed()->orderBy('idcho','desc')
		    				->take(1)
							->get();
	if(count($clavequesigue)==0)
	{	
     	$idchof = 1;
	}
	else
	{
	 	$idchof= $clavequesigue[0]->idcho+1;
	}	
	 $municipio = municipios::where('activo','=','SI')
	                  ->orderBy('idmun','asc')
					  ->get();
     return view ("persa.altachofer")
	        ->with('municipio',$municipio)
			->with('idchof',$idchof);
    }
    public function guardachofer(Request $request)
    {
        $idcho = $request->idcho;
        $nombre =  $request->nombre;
        $ap_emp = $request->ap_emp;
        $am_emp = $request->am_emp;
        $edad = $request->edad;
        $direccion = $request->direccion;
        $cp = $request->cp;
        $telefono = $request->telefono;
        $licencia = $request->licencia;
        
		 $this->validate($request,[
	     'idcho'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'edad'=>'required|integer|min:18',
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'licencia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'archivo'=>'image|mimes:jpeg,png,gif'
	     ]);
		 
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
     {
	 $img2= 'sinfoto.png';
	 }
	 
            $chof= new choferes;
			$chof->idcho = $request->idcho;
			$chof->nombre = $request->nombre;
			$chof->ap_emp = $request->ap_emp;
			$chof->am_emp = $request->am_emp;
			$chof->edad = $request->edad;
			$chof->direccion = $request->direccion;
			$chof->idmun = $request->idmun;
			$chof->cp = $request->cp;
			$chof->telefono = $request->telefono;
			$chof->licencia = $request->licencia;
			$chof->archivo = $img2;
			$chof->save();
			$proceso = "ALTA DE CHOFER";
			$mensaje = "Registro guardado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }
}
