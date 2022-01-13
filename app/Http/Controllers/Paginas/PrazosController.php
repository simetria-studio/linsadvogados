<?php

namespace App\Http\Controllers\Paginas;

use App\Models\Prazo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic;

class PrazosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prazos = Prazo::get();
        return view('paginas.prazos', get_defined_vars());
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
        $name = "";
        if ($request->hasFile('documento')) {

            $img = ImageManagerStatic::make($request->file('documento')->getRealPath());

            $name = Str::random() . '.jpg';

            $originalPath = storage_path('app/public/docomentos/');
            if (!file_exists($originalPath)) {
                mkdir($originalPath, 0777, true);
            }

            $img->save($originalPath . $name);
        }


        $users = Prazo::create([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'servico' => $request->input('servico'),
            'situacao' => $request->input('situacao'),
            'prazo' => $request->input('prazo'),
            'documento' => $name,

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

                $pericias = Prazo::findOrFail($id);

                if ($pericias) {

                    $pericias->delete();

                    return response()->json(array('success' => true));
                }
            }
        }
    }
}
