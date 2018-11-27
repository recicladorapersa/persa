<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;
use App\clientes;
use App\choferes;
use App\turnos;
use App\areas;
use App\empleados;
use App\tipos;
use App\productos;




class curso extends Controller
{
	
	public function login()
    {
    return view ("persa.login");
	}
	public function index()
    {
    return view ("persa.index");
	}
	   public function inicio()
    {
    return view ("persa.inicio");
	}
	
	  public function tablas()
    {
    return view ("persa.tablas");
	}
   public function altacliente()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	 $clavequesigue = clientes::withTrashed()->orderBy('idc','desc')
		    				->take(1)
							->get();
	if(count($clavequesigue)==0)
	{	
     	$idcs = 1;
	}
	else
	{
	 	$idcs= $clavequesigue[0]->idc+1;
	}	
	 $municipio = municipios::where('activo','=','SI')
	                  ->orderBy('idmun','asc')
					  ->get();
     return view ("persa.altacliente")
	        ->with('municipio',$municipio)
			->with('idcs',$idcs);
    }
    
    public function guardacliente(Request $request)
    {
        $idc = $request->idc;
        $nombre =  $request->nombre;
        $ap_cli = $request->ap_cli;
        $am_cli = $request->am_cli;
        $edad = $request->edad;
        $direccion = $request->direccion;
        $cp = $request->cp;
        $telefono = $request->telefono;
        $correo = $request->correo;

        
		 $this->validate($request,[
	     'idc'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_cli'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_cli'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'edad'=>'required|integer|min:18',
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'correo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
	 
            $client= new clientes;
			$client->idc = $request->idc;
			$client->nombre = $request->nombre;
			$client->ap_cli = $request->ap_cli;
			$client->am_cli = $request->am_cli;
			$client->edad = $request->edad;
			$client->direccion = $request->direccion;
			$client->idmun = $request->idmun;
			$client->cp = $request->cp;
			$client->telefono = $request->telefono;
			$client->correo = $request->correo;
			$client->archivo = $img2;
			$client->save();
			$proceso = "ALTA DE CLIENTE";
			$mensaje = "Registro guardado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }

    public function reporte()

	{
	$clientes=clientes::withTrashed()->orderBy('idc','asc')
	          ->get();
	//return $maestros;
	  return view('persa.reporte')
	  ->with('clientes',$clientes);                  
	}
		public function modificac($idc)
	{
		$cliente = clientes::where('idc','=',$idc)
		                     ->get();
		$idmun = $cliente[0]->idmun;
		$municipio = municipios::where('idmun','=',$idmun)->get();
		
		$otrosmunicipios = municipios::where('idmun','!=',$idmun)
		                 ->get();
		//return $carrera;
		//return $maestro;
		return view ('persa.modificacliente')
		->with('cliente',$cliente[0])
	    ->with('idmun',$idmun)
	    ->with('municipio',$municipio[0]->municipio)
		->with('otrosmunicipios',$otrosmunicipios);
	
	}

	    public function guardamodificac(Request $request)
	{
        $idc = $request->idc;
        $nombre =  $request->nombre;
        $ap_cli = $request->ap_cli;
        $am_cli = $request->am_cli;
        $edad = $request->edad;
        $direccion = $request->direccion;
        $cp = $request->cp;
        $telefono = $request->telefono;
        $correo = $request->correo;
        
		 $this->validate($request,[
	     'idc'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_cli'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_cli'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'edad'=>'required|integer|min:18',
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'correo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
	        $client = clientes::find($idc);
			$client->idc = $request->idc;
			$client->nombre = $request->nombre;
			$client->ap_cli = $request->ap_cli;
			$client->am_cli = $request->am_cli;
			$client->edad = $request->edad;
			$client->direccion = $request->direccion;
			$client->idmun = $request->idmun;
			$client->cp = $request->cp;
			$client->telefono = $request->telefono;
			$client->correo = $request->correo;
			 if($file!="")
	        {	
			$client->archivo = $img2;
	        }
			$client->save();
			$proceso = "MODIFICA CLIENTE";
			$mensaje = "Registro ha sido modificado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	public function eliminac($idc)
	{
		  clientes::find($idc)->delete();
		    $proceso = "ELIMINAR CLIENTES";
			$mensaje = "El cliente ha sido inhabilitado Correctamente";
			return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function restaurac($idc)
	{
		clientes::withTrashed()->where('idc',$idc)->restore();
		$proceso = "RESTAURACION DE CLIENTE";
		$mensaje = "Registro restaurado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);

	}

	public function efisicac($idc)
	{
		clientes::withTrashed()->where('idc',$idc)->forceDelete();
		$proceso = "ELIMINACION FISICA DE CLIENTE";
		$mensaje = "Registro eliminado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);		
	} 
         
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
        $direccion = $request->direccion;
        $cp = $request->cp;
        $ruta = $request->ruta;
        $telefono = $request->telefono;
        $licencia = $request->licencia;
        
		 $this->validate($request,[
	     'idcho'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
			$chof->direccion = $request->direccion;
			$chof->idmun = $request->idmun;
			$chof->cp = $request->cp;
			$chof->telefono = $request->telefono;
			$chof->ruta = $request->ruta;
			$chof->licencia = $request->licencia;
			$chof->archivo = $img2;
			$chof->save();
			$proceso = "ALTA DE CHOFER";
			$mensaje = "Registro guardado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }


    public function reportechofer()

	{
	$choferes=choferes::withTrashed()->orderBy('idcho','asc')
	          ->get();
	//return $maestros;
	  return view('persa.reportechofer')
	  ->with('choferes',$choferes);                  
	}
		public function modificacho($idcho)
	{
		$chofer = choferes::where('idcho','=',$idcho)
		                     ->get();
		$idmun = $chofer[0]->idmun;
		$municipio = municipios::where('idmun','=',$idmun)->get();
		
		$otrosmunicipios = municipios::where('idmun','!=',$idmun)
		                 ->get();
		//return $carrera;
		//return $maestro;
		return view ('persa.modificachofer')
		->with('chofer',$chofer[0])
	    ->with('idmun',$idmun)
	    ->with('municipio',$municipio[0]->municipio)
		->with('otrosmunicipios',$otrosmunicipios);
	
	}

	    public function guardamodificacho(Request $request)
	{
        $idcho = $request->idcho;
        $nombre =  $request->nombre;
        $ap_emp = $request->ap_emp;
        $am_emp = $request->am_emp;
        $direccion = $request->direccion;
        $cp = $request->cp;
        $ruta = $request->ruta;
        $telefono = $request->telefono;
        $licencia = $request->licencia;
        
		 $this->validate($request,[
	     'idcho'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
	        $chof = choferes::find($idcho);
			$chof->idcho = $request->idcho;
			$chof->nombre = $request->nombre;
			$chof->ap_emp = $request->ap_emp;
			$chof->am_emp = $request->am_emp;
			$chof->direccion = $request->direccion;
			$chof->idmun = $request->idmun;
			$chof->cp = $request->cp;
			$chof->telefono = $request->telefono;
			$chof->ruta = $request->ruta;
			$chof->licencia = $request->licencia;
			 if($file!="")
	        {	
			$chof->archivo = $img2;
	        }
			$chof->save();
			$proceso = "MODIFICA CHOFER";
			$mensaje = "Registro ha sido modificado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	public function eliminacho($idcho)
	{
		  choferes::find($idcho)->delete();
		    $proceso = "ELIMINAR CLIENTES";
			$mensaje = "El chofer ha sido inhabilitado Correctamente";
			return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function restauracho($idcho)
	{
		choferes::withTrashed()->where('idcho',$idcho)->restore();
		$proceso = "RESTAURACION DE CHOFER";
		$mensaje = "Registro restaurado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);

	}

	public function efisicacho($idcho)
	{
		choferes::withTrashed()->where('idcho',$idcho)->forceDelete();
		$proceso = "ELIMINACION FISICA DE CHOFER";
		$mensaje = "Registro eliminado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);		
	}


public function altaproducto()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	 $clavequesigue = productos::withTrashed()->orderBy('idpro','desc')
		    				->take(1)
							->get();
	if(count($clavequesigue)==0)
	{	
     	$idpros = 1;
	}
	else
	{
	 	$idpros= $clavequesigue[0]->idpro+1;
	}	
	 $tipo = tipos::where('activo','=','SI')
	                  ->orderBy('idtip','asc')
					  ->get();
     return view ("persa.altaproducto")
	        ->with('tipo',$tipo)
			->with('idpros',$idpros);
    }
    
    public function guardaproducto(Request $request)
    {
        $idpro = $request->idpro;
        $costo =  $request->costo;
        $unidad = $request->unidad;

        
		 $this->validate($request,[
	     'idpro'=>'required|numeric',
         'costo'=>['regex:/^[0-9]{2}$/'],
	     ]);

	 
            $prod = new productos;
			$prod->idpro = $request->idpro;
			$prod->idtip = $request->idtip;	
			$prod->costo = $request->costo;
			$prod->unidad = $request->unidad;
			$prod->save();
			$proceso = "ALTA DE PRODUCTO";
			$mensaje = "Registro guardado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }

public function reporteproducto()

	{
	$productos = productos::withTrashed()->orderBy('idpro','asc')
	          ->get();
	//return $maestros;
	  return view('persa.reporteproducto')
	  ->with('productos',$productos);                  
	}
		public function modificapro($idpro)
	{
		$producto = productos::where('idpro','=',$idpro)
		                     ->get();
		$idtip = $producto[0]->idtip;
		$tipo = tipos::where('idtip','=',$idtip)->get();
		
		$otrostipos = tipos::where('idtip','!=',$idtip)
		                 ->get();
		//return $carrera;
		//return $maestro;
		return view ('persa.modificaproducto')
		->with('producto',$producto[0])
	    ->with('idtip',$idtip)
	    ->with('tipo',$tipo[0]->tipo)
		->with('otrostipos',$otrostipos);
	
	}

	    public function guardamodificapro(Request $request)
	{
        $idpro = $request->idpro;
        $costo =  $request->costo;
        $unidad = $request->unidad;

        
		 $this->validate($request,[
	     'idpro'=>'required|numeric',
         'costo'=>['regex:/^[0-9]{2}$/']
	     ]);

	        $prod = productos::find($idpro);
			$prod->idpro = $request->idpro;
			$prod->idtip = $request->idtip;	
			$prod->costo = $request->costo;
			$prod->unidad = $request->unidad;
			$prod->save();
			$proceso = "MODIFICA PRODUCTO";
			$mensaje = "Registro ha sido modificado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	public function eliminapro($idpro)
	{
		  productos::find($idpro)->delete();
		    $proceso = "ELIMINAR PRODUCTOS";
			$mensaje = "El producto ha sido inhabilitado Correctamente";
			return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function restaurapro($idpro)
	{
		productos::withTrashed()->where('idpro',$idpro)->restore();
		$proceso = "RESTAURACION DE PRODUCTO";
		$mensaje = "Registro restaurado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);

	}

	public function efisicapro($idpro)
	{
		productos::withTrashed()->where('idpro',$idpro)->forceDelete();
		$proceso = "ELIMINACION FISICA DE PRODUCTO";
		$mensaje = "Registro eliminado correctamente";
		return view('persa.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);		
	}

   public function altaempleado()
    {
 
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	 $clavequesigue = clientes::withTrashed()->orderBy('idc','desc')
		    				->take(1)
							->get();
	if(count($clavequesigue)==0)
	{	
     	$idems = 1;
	}
	else
	{
	 	$idems= $clavequesigue[0]->idems+1;
	}	
	 $municipio = municipios::where('activo','=','SI')
	                  ->orderBy('idmun','asc')
					  ->get();
     return view ("persa.altaempleado")
	        ->with('municipio',$municipio)
			->with('idems',$idems);
    }

    
    public function guardaempleado(Request $request)
    {
        $idem = $request->idem;
        $nombre =  $request->nombre;
        $ap_emp = $request->ap_emp;
        $am_emp = $request->am_emp;
        $direccion = $request->direccion;
        $cp = $request->cp;
        $telefono = $request->telefono;
        $contraseña =$request->contraseña;
        $correo = $request->correo;

        
		 $this->validate($request,[
	     'idem'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
		 'contraseña'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'correo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
	 
            $empl= new empleados;
			$empl->idem = $request->idem;
			$empl->nombre = $request->nombre;
			$empl->ap_emp = $request->ap_emp;
			$empl->am_emp = $request->am_emp;
			$empl->direccion = $request->direccion;
			$empl->idmun = $request->idmun;
			$empl->cp = $request->cp;
			$empl->telefono = $request->telefono;
			$empl->contraseña = $request->contraseña;
			$empl->correo = $request->correo;
			$empl->archivo = $img2;
			$empl->save();
			$proceso = "ALTA DE EMPLEADO";
			$mensaje = "Registro guardado correctamente";
		    return view ('persa.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }


       



}





                                               