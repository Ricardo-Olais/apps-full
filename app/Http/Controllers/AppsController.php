<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class AppsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function entretenimiento($params=false)
        {

            $datos=array();
            $res = DB::table('descarga_apps')->where('categoria',"entretenimiento")->where('titulo', 'like', "%$params%")->get();

              foreach ($res as $key => $value) {

                                     $datos[]=array(
                                           
                                            "titulo"=>$value->titulo,
                                            "img"=>$value->img,
                                            "autor"=>$value->autor,
                                            "descripcion"=>$value->descripcion,
                                            "contenido"=>$value->contenido,
                                            "url"=>$value->url,
                                            "categoria"=>$value->categoria,
                                            "estatus"=>$value->estatus



                                        );

                }            


           //return view('ok', ['pages' => $page,'type'=>$type,"medida"=>$medida]);

            return view('entretenimiento', ['datos' => $datos, 'variable'=>$params]);
        }



        public function juegos($params=false)
        {

            $datos=array();
            $res = DB::table('descarga_apps')->where('categoria',"juegos")->where('titulo', 'like', "%$params%")->get();

              foreach ($res as $key => $value) {

                                     $datos[]=array(
                                           
                                            "titulo"=>$value->titulo,
                                            "img"=>$value->img,
                                            "autor"=>$value->autor,
                                            "descripcion"=>$value->descripcion,
                                            "contenido"=>$value->contenido,
                                            "url"=>$value->url,
                                            "categoria"=>$value->categoria,
                                            "estatus"=>$value->estatus



                                        );

                }            


           //return view('ok', ['pages' => $page,'type'=>$type,"medida"=>$medida]);

            return view('juegos', ['datos' => $datos, 'variable'=>$params]);
        }


     public function info($apk)
        {

            $datos = DB::table('descarga_apps')->where('categoria',"entretenimiento")->get();
          
           //return view('ok', ['pages' => $page,'type'=>$type,"medida"=>$medida]);

            return view('info', ['datos' => $datos]);
        }



}
