<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\maestros;
use App\planteles;
use App\usuarios;
use App\categorias;
use App\productos;
use App\ventas;
use App\ventadetalles;
use Session;
use Mail;

class maestross extends Controller
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
	  $sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
	   if($sname =='' or $sidu =='' or $stipo=='')
	   {
		   Session::flash('error', 'Es necesario loguearse antes de continuar');
		   return redirect()->route('login');
	   }
	   else
	   {
	 $clavequesigue = maestros::withTrashed()
	                                  ->orderBy('idm','desc')
								->take(1)->get();
     $idms = $clavequesigue[0]->idm+1;
	 
	 $planteles = planteles::all();

		return view ("sistema.altamaestros")
		       ->with(['idms'=>$idms])
			   ->with(['planteles'=>$planteles]);
       }
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
		 'carrera'=>'required',
		 'sexo'=>'required|alpha',
		 'img'=>'image|mimes:gif,jpeg,png',
		 'edad'=>'required|integer|min:18|max:50',['regex:/^[0-9]{2}$/'],
	      ]);
		  
		   $file = $request->file('img');
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 
			$maest = new maestros;
			$maest->idm = $request->idm;
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->idpl= $request->idpl;
			$maest->carrera=$request->carrera;
			$maest->imagen=$img2;
			$maest->sexo=$request->sexo;
			$maest->save();
		    $proceso = "Alta de Maestros";
			$mensaje = "El maestro ha sido dado de alta Correctamente";
			return view ('sistema.mensajesistema')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function muestraregistros()
	{
		  $ma =maestros::orderBy('idm')->paginate('3');
		  return view ('sistema.reporte')
		  ->with('ma',$ma);
	}
	public function borramaestro($idm)
	{ 
	    maestros::find($idm)->delete();
		    $proceso = "Borrado  de Maestros";
			$mensaje = "El maestro ha sido borrado Correctamente";
			return view ('sistema.mensajesistema')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function modificam($idm)
	{
     $maestros = maestros::where('idm',$idm)->get();
	 $idpl = $maestros[0]->idpl;
	 $plan = planteles::where('idpl',$idpl)->get();
	 $nomplan = $plan[0]->nombre;
	 $todosplan = planteles::where('idpl','<>',$idpl)
	              ->get();
     return  view ('sistema.modificamaestros')
	         ->with('maestros',$maestros[0])
			 ->with('idpl',$idpl)
			 ->with('nomplan',$nomplan)
			 ->with('todosplan',$todosplan);
	}
	public function modificam2(Request $request)
	{
		$nombre = $request->nombre;
		 $idm= $request->idm;
		 $edad = $request->edad;
		 $carrera = $request->carrera;
		 $sexo= $request->sexo;
		 
		 $this->validate($request,[
	     'idm'=>'required|numeric',
		 'nombre'=>'required|alpha',
		 'carrera'=>'required',
		 'sexo'=>'required|alpha',
		 'edad'=>'required|integer|min:18|max:50',['regex:/^[0-9]{2}$/'],
	      ]);
			
		    $maest = maestros::find($idm);
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->idpl= $request->idpl;
			$maest->carrera=$request->carrera;
			$maest->sexo=$request->sexo;
			$maest->save();
			
			$proceso = "Modificacion de Maestros";
			$mensaje = "El maestro ha sido  Modificado Correctamente";
			return view ('sistema.mensajesistema')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
			
	}
    public function correo()
	{
		return view('sistema.altacorreo');
	}
    
     public function manda(Request $request)
	  {
 		$this->validate($request,[
	'nombre'=>'required|alpha',
	'correo'=>'required|email',
	'mensaje'=>'required',
    'asunto'=>'required',
	]);
//	Mail::send('sistema.envio',$request->all(), function($msj){
 				//		$msj->subject('Correo de joel');
 			//			$msj->to('j.herreracr@hotmail.com');
 			//		});
Mail::send('sistema.envio',$request->all(), function($msj){
 						$msj->subject('Correo de joel');
 						$msj->to('shalojoey3@gmail.com');
 					});
	 return redirect()->route('mail');
	  }
      
   
   public function login()
   {
	return view('sistema.login');
   } 
   
   
   
   public function valida(Request $request)
   {
     $user=  $request->input('user');
	  $pasw=  md5($request->input('pasword'));
	  $consulta = usuarios::where('user','=',$user)->where('pasw','=',$pasw)
	                        ->where('activo','=','Si')->get();
	  if (count($consulta)==0 or $consulta[0]->activo == 'No')
	  { 
         Session::flash('error', 'El usuario no existe o la contraseña
                          		 no es correcta');
		 return redirect()->route('login');
	  }
	  else
	  {
		
		  Session::put('sesionname',$consulta[0]->nombre);
		  Session::put('sesionidu',$consulta[0]->idu);
		  Session::put('sesiontipo',$consulta[0]->tipo);
	      
		  /*$sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
		  echo $sname . ' '. $sidu . ' '. $stipo;*/
		 return redirect()->route('principal');
		  //return view('maestros.principal');
	  }
	  
   }
   
   
    public function principal()
   {
	      $sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
	   if($sname =='' or $sidu =='' or $stipo=='')
	   {
		   Session::flash('error', 'Es necesario loguearse antes de continuar');
		   return redirect()->route('login');
	   }
	   else
	   {
		  return view('sistema.principal2');
	   }
   }
   
   
   
   
   
   
    public function cerrarsesion()  
   { 
	   Session::forget('sesionname');
	   Session::forget('sesionidu');
	   Session::forget('sesiontipo');
	   Session::flush();
	   Session::flash('error', 'Session Cerrada Correctamente');
	   return redirect()->route('login');
	   
   }	
   
   function suma(Request $request) {
       // echo intval($request->get('x', 0)) + intval($request->get('y', 0));
       $x = $request->get('x');
       $doble = $x * 5;
       $idm = $request->get('idm');
      // echo $idm;
    $maestros = maestros::where('idm',$idm)->get();
	 $nombre = $maestros[0]->nombre;
     //echo $nombre;
     return view('prueba')->with('doble',$doble)->with('maestros',$maestros);
    }
    
    function venta()
    {
         $clavequesigue = ventas::orderBy('idv','desc')
								->take(1)->get();
         $cuantos = count($clavequesigue);
         if($cuantos==0)
         {
             $idv= 1;
         }
         else
         {
          $idv = $clavequesigue[0]->idv+1;   
         }
         
         $categorias = categorias::all();
     return view('carrito')
      ->with('categorias',$categorias)
      ->with('idv',$idv);
    }
    function comboca(Request $request)
    {
         $idc = $request->get('idc');
         $productos = productos::where('idc','=',$idc)->get();
        
         return view ('combop')->with('productos',$productos);
    }
      function detallep(Request $request)
    {
        $idp = $request->get('idp');
        $productos = productos::where('idp','=',$idp)->get();
        return view ('detallep')->with('productos',$productos[0]);
        //echo "$idp";
    }
    function carrito(Request $request)
    {
        
        $ventas = ventas::find($request->idv);
        $cuantos = count($ventas);
        if($cuantos==0)
        {   
           // echo "venta nuevass";
            $ventas = new ventas;
			$ventas->idv = $request->idv;
			$ventas->idc = $request->idc;
			$ventas->fecha =$request->fecha;
			$ventas->save();
            
            $ventadetalles = new ventadetalles;
            $ventadetalles->idv = $request->idv;
            $ventadetalles->idp = $request->idp;
            $ventadetalles->cantidad = $request->cantidad;
            $ventadetalles->costo = $request->subt / $request->cantidad;
            $ventadetalles->save();
             
        }
        else
        {
            $ventadetalles = new ventadetalles;
            $ventadetalles->idv = $request->idv;
            $ventadetalles->idp = $request->idp;
            $ventadetalles->cantidad = $request->cantidad;
            $ventadetalles->costo = $request->subt / $request->cantidad ;
            $ventadetalles->save();
          //  echo "venta existente";
        }
        $resultado=\DB::select("SELECT vd.idvd,vd.idp,vd.cantidad,vd.costo,vd.cantidad * vd.costo AS subt,p.nombre
        FROM ventadetalles AS vd
        INNER JOIN productos AS p ON p.idp = vd.idp
        WHERE vd.idv= ?",[$request->idv]);
        
        $resultado2=\DB::select("SELECT SUM(cantidad*costo)AS total,
        ROUND(SUM(cantidad*costo)/1.16,2) AS subtotal,
SUM(cantidad*costo)-ROUND(SUM(cantidad*costo)/1.16,2) AS iva
FROM ventadetalles WHERE idv = ?",[$request->idv]);
    
       return view ('listap')
       ->with('resultado',$resultado)
       ->with('resultado2',$resultado2[0]);
    }
    
    public function borraventas(Request $request)
    {
        $ventas = ventadetalles::where('idvd',$request->idvd)->get();
     $idv = $ventas[0]->idv;
         ventadetalles::find($request->idvd)->delete();
         ////////////////////////////
     //echo "borraventas con clave $request->idvd con venta $idv ";
    $resultado=\DB::select("SELECT vd.idvd,vd.idp,vd.cantidad,vd.costo,vd.cantidad * vd.costo AS subt,p.nombre
        FROM ventadetalles AS vd
        INNER JOIN productos AS p ON p.idp = vd.idp
        WHERE vd.idv= ?",[$idv]);
        
        $resultado2=\DB::select("SELECT SUM(cantidad*costo)AS total,ROUND(SUM(cantidad*costo)/1.16,2) AS subtotal,
SUM(cantidad*costo)-ROUND(SUM(cantidad*costo)/1.16,2) AS iva
FROM ventadetalles WHERE idv = ?",[$idv]);
    
       return view ('listap')
       ->with('resultado',$resultado)
       ->with('resultado2',$resultado2[0]);
    }
  
    
}





















