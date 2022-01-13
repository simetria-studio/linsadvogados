<?php

namespace App\Http\Controllers\Paginas;

use App\Models\Processo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processos = Processo::get();
        return view('paginas.processos', get_defined_vars());
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
        $pericias = Processo::create([
            'name'  => $request->input('name'),
            'cpf'     => $request->input('cpf'),
            'servico'      => $request->input('servico'),
            'motivo'      => $request->input('motivo'),
            'data'=> $request->input('data'),
        ]);
        return redirect()->back()->with('success', 'Pagamento criado com sucesso!');
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
    public function destroy(Request $request, $id)
    {
        {
            if ($request->ajax()) {

                $pericias = Processo::findOrFail($id);

                if ($pericias) {

                    $pericias->delete();

                    return response()->json(array('success' => true));
                }
            }
        }
    }
}
