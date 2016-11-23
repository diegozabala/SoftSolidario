<?php

namespace App\Http\Controllers;

use App\ActividadEconomica;
use App\Comentario;
use App\Dictamen;
use App\Organizacion;
use App\Patrimonio;
use App\Reunion;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Collective\Annotations\Database;

class IndicadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalOrganizaciones=DB::table('organizaciones')->get();
        $contador = 0;
            foreach ($totalOrganizaciones as $organizacion) {
                $reunionesNoviembre[$contador]=DB::table('reuniones')
                    ->join('organizaciones','organizaciones.id','=','reuniones.idEmpresa')
                    ->select('organizaciones.nombre','cantidad_reuniones')
                    ->whereMonth('reuniones.fecha_realizacion', '=', '11')->where('organizaciones.id','=',$organizacion->id)->count('reuniones.id');
                $contador = $contador +1;
                $nombreEmpresasNoviembre[$contador] = $organizacion->nombre;
        }

    	return view('admin.indicadores.index')->with('reunionesNoviembre',$reunionesNoviembre)->with('nombreEmpresasNoviembre',$nombreEmpresasNoviembre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
