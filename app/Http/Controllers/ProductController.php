<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
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
        //$products = Product::all();
        $products = Product::paginate(); // Por default retorna 15 linhas por pagina.

        return view('admin.pages.products.index', [
            'products' => $products
        ]);
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
     * @param  App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
       /*  $request->validate([
            'description' => 'required|unique:posts|max:255',
            'name' => 'required',
            'photo' => 'required|image',
        ]);
        dd('Ok'); */
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
