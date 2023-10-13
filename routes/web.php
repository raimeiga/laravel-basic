<!-- ルーティングのファイル -->
<?php

use Illuminate\Support\Facades\Route;
/* ルーティングを設定するコントローラを宣言「HelloControllerというコントローラを使うよ！」
   HelloController.phpファイルにアクションを記述するよう想起する
*/

use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', [HelloController::class, 'index']);