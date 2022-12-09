<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route-> usa o método http, onde os parâmetros são a URI(rota) e o um [] contendo a classe controller e o método ou função dessa classe

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('site.aboutUs');

Route::get('/contact', [ContactController::class, 'contact'])->name('site.contact');

Route::post('/contact', [ContactController::class, 'contact'])->name('site.contact');

Route::get('/login', function () {
    return "Login";
})->name('site.login');


/* 
---------------------------------------------------------------------------------------------------
// Fazendo agrupamento de rotas

// Para fazer o agrupamento das rotas, utilizamos o método Route::group passando dois paramêtros:

// O primeiro é um ['prefix' => 'nome do prefix'] e o sugundo é uma function de callback onde 
     as rotas serão agrupadas.

---------------------------------------------------------------------------------------------------
*/

Route::group(['prefix' => 'app'], function () {

    Route::get('/clients', function () {
        return "Clients";
    })->name('app.clients');

    Route::get('/providers', [ProviderController::class, 'index'])->name('app.providers');

    Route::get('/products', function () {
        return "Products";
    })->name('app.products');
});


// Redirecionamento de rotas

Route::get('/rota1', function () {
    echo "Aqui é a rota 1";
})->name('site.rota1');

Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Redicionamento com o objeto Route: Para redirecionar com o objeto Route, precisa passar 2 paramêtros:
// O primeiro é rota de origem e o segundo é a rota para onde queremos redirecionar

// Route::redirect('/rota2', 'rota1'


// Rota fallback ou rota de contigência, para isso chamamos o objeto Route com o método fallback, passando por paramêtro uma function de callback

Route::fallback(function () {
    echo "The accessed route does not exist. <a href='" . route('site.index') . "'>click here</a> to go to the paid home";
});


// Rota teste para encaminhamento de paramêtros da rota para o Controller

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');



// O route group também pode ser escrito da seguinte forma:

// Os dois casos podem ser usados para fazer o agrupamento das rotas,
// Porém, o primeiro método é mais moderno e talvez o mais usado atualmente pela comunidade de desenvolvedores Laravel.

// Route::prefix('app')->group(
//     function () {

//         Route::get('/clients', function () {
//             return "Clients";
//         });

//         Route::get('/providers', function () {
//             return "Providers";
//         });

//         Route::get(
//             '/products',
//             function () {
//                 return "Products";
//             }
//         );
//     }
// );



// Enviando paramêtros por rotas:

/*   

---------------------------------------------------------------------------------------------
Nos dois exemplos abaixo os paramêtros se tornam obrigatórios para se ter acesso a rota,
mas caso queira que eles sejam opcionais basta acrescentar um sinal de ? ao final do paramêtro
que está sendo passado pela rota.

como exemplo : '/contact/{name}' -> '/contact/{name?}';
---------------------------------------------------------------------------------------------
*/

// Passando por paramêtros: nome, categoria, assunto, mensagem

/* 
// Tratando paramêtros com expressões regulares
---------------------------------------------------------------------------------------------
Note que ao tiparmos o tipo do paramêtro o laravel nos mostra um erro caso o que recebemos da
url seja diferente da tipagem feita. Para evitar isso vamos fazer o tratamento dos paramêtros
com algumas expressões regulares.

Nesse caso em específico usaremos o WHERE('nome do paramêtro', '[0-9]+')

---------------------------------------------------------------------------------------------
*/

// Route::get(
//     '/contact/{name}/{category_id?}',
//     function (
//         string $name = 'Unknow',
//         int $category_id = 1 // 1 - Information
//     ) {
//         echo "We are here: $name - $category_id ";
//     }
// )->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');




// Mais exemplo

// Passandos os paramêtros: about, company, name 
// Route::get(
//     '/about-us/{about}/{company?}/{name?}',
//     function (
//         string $about,
//         string $company = 'company Not found',
//         string $name = 'Name not found'
//     ) {
//         echo "Nosso app nasceu com o objetivo de melhorar e modernizar a gestão dos seus negocíos! - $about - $company - $name";
//     }
// );




/* ------------------------------------------------------------------------------------------------------------------------- */

// O Route funciona usando o método http passando por paramêtro uma URI e uma function de callback

// A URI é a url ou rota a ser requisitada, e function de callback é responsável por retonar a rota requisita para o viewer 

// Route::get($uri, $callback);


/* Verbos http:

* Get
*Post
*put
*Patch
*Delete
*Options

*/

/* ------------------------------------------------------------------------------------------------------------------------- */