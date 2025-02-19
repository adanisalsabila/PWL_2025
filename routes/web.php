<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/number1', function () {
    return 'This is route for number 1'; 
});

Route::get('/world', function () {
    return 'World';
   });

Route::get('/user/{name}', function ($name) {
    return 'Adani Salsabila'.$name;
    });
    
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/user/{name?}', function ($name=null) {
    return 'Adani Salsabila'.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Adani Salsabila'.$name;
    });

Route::get('/user/profile', function() {
    //
    })->name('profile');

//percobaan5
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
    });

//percobaan6
Route::redirect('/here', '/there');

//percobaan7
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
public function hello() {
 return 'Hello World';
}
}
Route::get(‘/hello’, [WelcomeController::class,’hello’]);

