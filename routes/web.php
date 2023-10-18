 <?php

use Illuminate\Support\Facades\Route;
/* ルーティングを設定するコントローラを宣言「HelloControllerというコントローラを使うよ！」
   HelloController.phpファイルにアクションを記述するよう想起する
*/

use App\Http\Controllers\HelloController;      //「HelloControllerを使うよ」宣言
use App\Http\Controllers\ProductController;    //「ProductControllerを使うよ」宣言
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;

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

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/{id}', [VendorController::class, 'show']);

Route::get('/requests/create', [RequestController::class, 'create']);
 
Route::post('/requests/confirm', [RequestController::class, 'confirm'])->name('requests.confirm');

Route::get('/responses', [ResponseController::class, 'index']);
