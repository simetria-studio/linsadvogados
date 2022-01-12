<?php

namespace App\Http\Controllers\Paginas;

use App\Http\Controllers\Controller;
use App\Models\audiencia;
use Illuminate\Http\Request;

class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audiencias = audiencia::get();
        return view('paginas.audiencia', get_defined_vars());
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
        $audiencias = audiencia::create([
            'name'     => $request->input('name'),
            'dia'      => $request->input('dia'),
            'horario'  => $request->input('horario'),
            'vara'     => $request->input('vara'),
        ]);
        return redirect()->back()->with('success', 'Audiência adicionada com sucesso!');
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
        $audiencias = audiencia::get()->find($id);
        // dd($cliente);
        return view('paginas.audiencia.editar', get_defined_vars());
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
        $audiencias = audiencia::find($id);

        $audiencias->update([
            'name'     => $request->input('name'),
            'dia'      => $request->input('dia'),
            'horario'  => $request->input('horario'),
            'vara'     => $request->input('vara'),
        ]);
        return redirect()->back()->with('success', 'Dados Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {

            $audiencias = audiencia::findOrFail($id);

            if ($audiencias) {

                $audiencias->delete();

                return response()->json(array('success' => true));
            }
        }
    }
}
