<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comentario;

class ComentariosController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $comentarios = Comentario::orderBy('id')->paginate(10);
      return view('admin.comentarios.index')->with('comentarios',$comentarios);
  }

  public function store(Request $request){
    $comentario = new Comentario();
    $comentario->descripcion=$request->descripcion;
    $comentario->idEmpresa=$request->idEmpresa;
    

    $comentario->save();

    return redirect()->route('solidario.com.index');
  }

  public function edit($id)
  {
    $comentario = Comentario::find($id);
    return view('admin/comentarios/edit',['comentario'=>$comentario]);
  }

 public function update(Request $request, $id){
    $comentario = Comentario::find($id);

    $comentarios = Comentario::all();
    $flagEmpresa = false;

    foreach ($comentarios as $com) {
      if($com->idEmpresa != $request->idEmpresa && $com->id != $id){
        $flagNombre = false;
      }
    }

    if ($flagNombre == true) {
      return redirect()->route('solidario.orgs.edit',$id);
    }
    if ($flagNombre == false) {

      $comentario->descripcion=$request->descripcion;
      
   
      $comentario->save();

      return redirect()->route('solidario.com.index');
  }
}

}
