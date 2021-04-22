<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    public function index(){
        $products = ['Producto 01','Producto 02','Producto 03'];
        //return 'Listagem dos Produtos';
        return $products;
    }

    public function show($id){
        return "Exibindo o produto com id: {$id}";
    }

    public function edit($id){
        return "Edit o produto com id: {$id}";
    }

    public function create(){
        return "Create o produto";
    }

    public function strore(){
        return "Store o produto";
    }

    public function update($id){
        return "Editando o produto com id: {$id}";
    }


    public function destroy($id){
        return "Deletando o produto com id: {$id}";
    }
}
