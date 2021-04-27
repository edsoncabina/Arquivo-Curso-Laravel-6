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
        $vector2 = [1,2,3,4,5];
        $products = ['Forno','Cadeirão','Computador','Plasma'];
        return view('admin.pages.products.index', compact('teste','valor','vector','vector2','products'));
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
        //
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
