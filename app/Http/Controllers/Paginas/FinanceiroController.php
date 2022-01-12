<?php

namespace App\Http\Controllers\Paginas;

use App\Http\Controllers\Controller;
use App\Models\Financeiro;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financeiros = Financeiro::all();
        return view('paginas.financeiro', get_defined_vars());
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

        $users = Financeiro::create([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'valor_total' => $request->input('valor_total'),
            'dividido_em' => $request->input('dividido_em'),
            'valor_parcela' => $request->input('valor_parcela'),
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
        return view('paginas.financeiro.ver', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $financeiros = Financeiro::all()->find($id);
        return view('paginas.financeiro.editar', get_defined_vars());
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
        $financeiros = Financeiro::find($id);

        $financeiros->update([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'valor_total' => $request->input('valor_total'),
            'dividido_em' => $request->input('dividido_em'),
            'valor_parcela' => $request->input('valor_parcela'),

        ]);
        return redirect()->back()->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    { {
            if ($request->ajax()) {

                $financeiros = Financeiro::findOrFail($id);

                if ($financeiros) {

                    $financeiros->delete();

                    return response()->json(array('success' => true));
                }
            }
        }
    }
    public function search(Request $request)
    {
        $pesquisa = $request->search;

        $clientes = Financeiro::where('cpf', 'like', '%' . $pesquisa . '%')->get();

        return view('paginas.financeiro.busca', get_defined_vars());
    }
}
