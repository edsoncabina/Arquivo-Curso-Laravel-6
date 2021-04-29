<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        //die($request->nome);
        //dd($request);
        //$this->middleware('auth');
        //$this->middleware('auth')->only('create');
        //$this->middleware('auth')->only(['create','index']);
        //$this->middleware('auth')->except('create');
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Funcao de Listagem de produtos';
        //return view('teste', ['nome' => 'Edson Francisco Cabina']);
        /*   $nome = 'Edson Francisco Cabina';
        $idade = 25;
        $teste = '<h2>Imprimir Tags na View</h2';
        return view('teste', \compact('nome','idade','teste'));
         */
        $teste = 'Conteu de Teste';
        $valor = 1234;
        $vector = [];
        $vector2 = [1, 2, 3, 4, 5];
        $products = ['Forno', 'Cadeirão', 'Computador', 'Plasma'];
        return view('admin.pages.products.index', compact('teste', 'valor', 'vector', 'vector2', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('Cadastrando...');
        //dd($request->all());
        //dd($request->only(['name','description']));
        //dd($request->description);
        //dd($request->has('description'));
        //dd($request->input('description1','Valor default'));
        //dd($request->except('description'));
        if ($request->file('photo')->isValid()) {
            //dd($request->photo);
            //dd($request->photo->extension());
            //dd($request->photo->getClientOriginalName());
            //dd($request->file('photo')->isValid());
            //dd($request->file('photo')->store('products'));
            $nomeArquivo = $request->name.'.'.$request->photo->extension();
            dd($request->file('photo')->storeAs('products',$nomeArquivo));
        }
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
        return view('admin.pages.products.edit', compact('id'));
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
        dd("Editando o produto {$id}");
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
