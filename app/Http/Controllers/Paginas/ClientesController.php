<?php

namespace App\Http\Controllers\Paginas;

use App\Models\Adress;
use App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::with('adress')->orderBy('name')->paginate(15);
        return view('paginas.clientes', get_defined_vars());
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
        if ($request->hasFile('image')) {

            $img = ImageManagerStatic::make($request->file('image')->getRealPath());

            $name = Str::random() . '.jpg';

            $originalPath = storage_path('app/public/clientes/');
            if (!file_exists($originalPath)) {
                mkdir($originalPath, 0777, true);
            }

            $img->save($originalPath . $name);
        }

        $users = Cliente::create([
            'name' => $request->input('name'),
            'date_birth' => $request->input('date_birth'),
            'conjugue' => $request->input('conjugue'),
            'rg' => $request->input('rg'),
            'cpf' => $request->input('cpf'),
            'requerimento' => $request->input('requerimento'),
            'numero_processo' => $request->input('numero_processo'),
            // 'requerimento' => $request->input('requerimento'),
            'numero_processo' => $request->input('numero_processo'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'whatsapp' => $request->input('whatsapp'),
            'obs' => $request->input('obs'),
            'referencia' => $request->input('referencia'),
            'referencia_telefone' => $request->input('referencia_telefone'),
            'image' => $name,

        ]);
        $adress = Adress::create([
            'user_id' => $users->id,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'numero' => $request->numero,
            'complemento' => $request->complemento,

        ]);
        return redirect()->back()->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::with('adress')->find($id);
        // dd($cliente);
        return view('paginas.clientes.clientes-ver', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::with('adress')->find($id);
        // dd($cliente);
        return view('paginas.clientes.clientes-editar', get_defined_vars());
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
        $user = Cliente::find($id);

        $user->update([
            'name' => $request->input('name'),
            'date_birth' => $request->input('date_birth'),
            'conjugue' => $request->input('conjugue'),
            'rg' => $request->input('rg'),
            'cpf' => $request->input('cpf'),
            'requerimento' => $request->input('requerimento'),
            'numero_processo' => $request->input('numero_processo'),
            'requerimento' => $request->input('requerimento'),
            'numero_processo' => $request->input('numero_processo'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'whatsapp' => $request->input('whatsapp'),
            'referencia' => $request->input('referencia'),
            'referencia_telefone' => $request->input('referencia_telefone'),
            'obs' => $request->input('obs'),

        ]);
        // $adress = Adress::create([
        //     'user_id' => $users->id,
        //     'cep' => $request->cep,
        //     'rua' => $request->rua,
        //     'bairro' => $request->bairro,
        //     'cidade' => $request->cidade,
        //     'estado' => $request->estado,
        //     'numero' => $request->numero,
        //     'complemento' => $request->complemento,

        // ]);
        return redirect()->route('clientes')->with('success', 'Cliente editado com sucesso!');
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

            $user = Cliente::findOrFail($id);

            if ($user) {

                $user->delete();

                return response()->json(array('success' => true));
            }
        }
    }
    public function search(Request $request)
    {
        $pesquisa = $request->search;

        $clientes = Cliente::where('cpf', 'like', '%' . $pesquisa . '%')->get();

        return view('paginas.clientes.clientes-busca', get_defined_vars());
    }
}
