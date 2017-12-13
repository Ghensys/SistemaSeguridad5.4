<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitante;

use Storage;

class Visitantes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|min:1000000|max:60000000|numeric',
            'n_pase' => 'required',
            //'fecha_nacimiento' => 'required|date',
            'edad' => 'required|max:150|numeric',
            'zona_residencia' => 'required',
            'gerencia' => 'required',
            'tipo_visita' => 'required',
            'responsable' => 'required',
            //'fecha_entrada' => 'required'
            ]);*/

        $visitante = new Visitante;
        $visitante->nombre = $request->nombre;
        $visitante->apellido = $request->apellido;
        $visitante->cedula = $request->cedula;
        $visitante->n_pase = $request->n_pase;
        $visitante->fecha_nacimiento = $request->fecha_nacimiento;
        $visitante->edad = $request->edad;
        $visitante->zona_residencia = $request->zona_residencia;
        $visitante->id_gerencia = $request->gerencia;
        $visitante->id_tipo_visita = $request->tipo_visita;
        $visitante->responsable = $request->responsable;
        $visitante->observacion = $request->observacion;
        $visitante->fecha_hora_entrada = $request->fecha_entrada;

        $img = $request->file('urlImg');

        $file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imgVisitantes')->put($file_route, file_get_contents( $img->getRealPath() ) );

        $visitante->urlImg = $file_route;

        $visitante->save();

        //dd($request->nombre);
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
        //
    }
}
