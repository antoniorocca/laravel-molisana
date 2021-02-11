<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucato-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/06/5-fettuccine-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/06/6-linguine-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/06/7-mezze-linguine-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/06/11-spaghettino-quadrato-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2019/02/38-mezze-maniche-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/07/44-sedani-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/07/49-sedanini-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/07/53-lumachine-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/07/55-chifferi-rigati-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2017/07/58-misto-corto-m.jpg",
        ],
        [
            "src" => "https://www.lamolisana.it/wp-content/uploads/2018/06/84-ditale-quadrato-m.jpg",
        ],
    ];
    return view('home', compact('data'));
});