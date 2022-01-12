<?php

namespace App\Http\Controllers\Paginas;

use App\Http\Controllers\Controller;
use App\Models\Pericia;
use Illuminate\Http\Request;

class PericiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pericias = Pericia::all();
        return view('paginas.pericia', get_defined_vars());
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
        $pericias = Pericia::create([
            'segurado'  => $request->input('segurado'),
            'local'     => $request->input('local'),
            'data'      => $request->input('data'),
            'hora'      => $request->input('hora'),
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
        $pericias = Pericia::all()->find($id);
        return view('paginas.pericia.editar', get_defined_vars());
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
        $pericias = Pericia::find($id);

        $pericias->update([
            'segurado' => $request->input('segurado'),
            'local'    => $request->input('local'),
            'data'     => $request->input('data'),
            'hora'     => $request->input('hora'),

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

                $pericias = Pericia::findOrFail($id);

                if ($pericias) {

                    $pericias->delete();

                    return response()->json(array('success' => true));
                }
            }
        }
    }
    // public function search(Request $request)
    // {
    //     $pesquisa = $request->search;

    //     $pericias = Pericia::where('cpf', 'like', '%' . $pesquisa . '%')->get();

    //     return view('paginas.pericia.busca', get_defined_vars());
    // }
}
