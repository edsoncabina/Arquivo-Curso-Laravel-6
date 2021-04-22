<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 Route::Resource('produts','ProductController');
/*
Route::delete('products/{id}','ProductController@destroy')->name('products.destroy');
Route::put('products/{id}','ProductController@update')->name('products.update');
Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');
Route::get('products/create','ProductController@create')->name('products.create');
Route::post('products','ProductController@strore')->name('products.strore');
Route::get('products/{id}','ProductController@show')->name('products.show');
Route::get('products','ProductController@index')->name('products.index');
*/
/* Grupos de Rotas */
Route::get('/login',function(){
    return 'Login';
})->name('login');

/* Route::get('admin/dashboard', function(){
    return 'Home Admin';
})->middleware('auth'); */
/*
Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){

                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                Route::get('/',function(){
                    return redirect()->route('admin.dashboard');
                })->name('admin.default');
                });
            });
        });
}); */
//OU
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
],function(){
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('produtos');

    Route::get('/',function(){
        return redirect()->route('admin.dashboard');
    })->name('admin.default');
});


//Route::get('/view', 'welcome');
// Route::get('/view', 'welcome',['id' => 'Teste de Passagem de Parametro']);
Route::get('/view', function(){
    return view('welcome');
});
/* Redirecionamento de rota */
#forma 1
#Route::redirect('/redirect1','redirect2');
#forma 2
 Route::get('/redirect1', function(){
    return redirect('redirect2');
});

Route::get('/redirect2', function(){
    return "redirect2";
});


/* Url com parametro Opcionais, devem ter valor default obrigactoriamente*/
Route::get('/produtos/{id?}', function($id = ''){
    return "Produto(s) $id";
});

/* Url com parametro */
Route::get('/categoria/{flag}/posts',function($cat){
    return "Produtos da  Categoria $cat";
});

Route::get('/categorias/{flag}',function($flag){
    /* o parametro nao precisa ser igual ao nome na url */
    return "Produtos da Categoria $flag";
});

/* url sem parametro */
Route::match(['post','get'],'/match',function(){
    return 'match';
});

Route::any('/any', function(){
    return 'any';
});
Route::get ('/contacto',function(){
    return view('site.contacto');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Olá Edson Cabina';
});

Route::view('/view','site.contacto');

/* Rotas nomeadas */
Route::get('/redirect03', function () {
    return redirect()
        ->route('name-da-url');
});

Route::get('/name-url', function () {
    return 'Hey Hey Hey';
})->name('name-da-url');

