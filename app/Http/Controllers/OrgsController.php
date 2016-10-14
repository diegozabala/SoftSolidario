<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Laracasts\Flash\Flash;
use Laracasts\Flash\FlashNotifier;

class OrgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizaciones = Organizacion::orderBy('nombre','asc')->paginate(10);
        return view ('admin/organizaciones/index') -> with('organizaciones',$organizacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orgs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizacion = new Organizacion($request->all());
        $organizacion->password = bcrypt($request->password);
        $organizacion->nombre = ucwords(strtolower($request->nombre));
        $organizacion->telefono = ucwords(strtolower($request->telefono));
        $organizacion->direccion = ucwords(strtolower($request->direccion));
        $organizacion->razonSocial = ucwords(strtolower($request->razonSocial));
        $organizacion->save();
        return redirect()->route ('admin.organizaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion -> delete();
        Flash::warning('Se ha eliminado de forma éxitosa la organizacion');
        return redirect(route('admin.organizaciones.index'));
    }
}
