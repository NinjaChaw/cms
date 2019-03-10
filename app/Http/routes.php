<?php


use App\Post;
use App\User;
use App\Role;
use App\Photo;
use Carbon\Carbon;

//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return "This is about page";
//});
//
//Route::get('/contact', function () {
//    return "We are in contact page";
//});
//
//Route::get('/post/{id}', function ($id) {
//    return "Your id is". $id;
//
//});
//
//route::get('admin/posts/example', array('as'=>'admin.home', function() {
//
//    $url = route("admin.home");
//
//    return "Your url is: ". $url;
//
//}));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
//Route::get('/insert', function() {
//
//    DB::insert('insert into post(title, content) values(?, ?)', ['php with laravel', 'Laravel driving is awesome. has to compleate']);
//
//});


//Route::get('/read', function () {
//
//    $result = DB::select('select * from post where id = ?', [1]);
//
//
//        foreach ($result as $data) {
//            return $data->title;
//        }
//});
//
//Route::get('/update', function() {
//
//    $update = DB::update('update post set title = "update title" where id = ?', [1]);
//
//    return $update;
//
//});
//
//Route::get('/delete', function() {
//
//    $delete = DB::delete('delete from post where id = ?', [1] );
//
//    return $delete;
//});


/*
|--------------------------------------------------------------------------
| Eloquent
|--------------------------------------------------------------------------
*/

//Route::get('/read', function() {
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//
//        return $post->title;
//    }
//
//});

//Route::get('/find', function() {
//
//    $posts = Post::find(2);
//    return $posts -> title;
//
//});

//Route::get('/findWhere', function () {
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//    return $posts;
//
//});

//Route::get('findMore', function() {
//
////    $posts = Post::findOrFail(1);
////    return $posts;
//
//    $posts = Post::where('user_count', '<', 40)->firstOrFail();
//
//});

//Route::get('/basicInsert', function() {
//
//    $post = new Post;
//
//    $post->title='New elequent title insert';
//    $post->content='New elequent content is so much awesome with laravel php, wow';
//
//    $post->save();
//});

//Route::get('/basicInsert2', function() {
//
//    $post = Post::find(2);
//
//    $post->title='New elequent title insert 2';
//    $post->content='New elequent content is so much awesome with laravel php 2, wow';
//
//    $post->save();
//});

//Route::get('/delete', function() {
//
//    $post = Post::find(2);
//    $post->delete();
//
//});

//Route::get('/delete2', function() {
//
//    Post::destroy([4, 5]);
//
//});

/*
|--------------------------------------------------------------------------
| One to One relationship
|--------------------------------------------------------------------------
*/

//Route::get('/user/{id}/post', function($id) {
//
//    return User::find($id)->post;
//
//});
//
//Route::get('/post/{id}/user', function($id) {
//
//
//    return Post::find($id)->user->name;
//
//
//});

/*
|--------------------------------------------------------------------------
| One to Many relationship
|--------------------------------------------------------------------------
*/

//Route::get('/posts', function() {
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post) {
//
//        echo $post->title . '<br />';
//
//    }
//
//});

//Route::get('/user/{id}/role', function($id) {
//
//    $user = User::find($id);
//
//    foreach ($user->roles as $role) {
//
//        return $role->name;
//
//    }
//});

/*
|--------------------------------------------------------------------------
| polymorphic relationship
|--------------------------------------------------------------------------
*/

//Route::get('/post/photo', function() {
//
//    $post = Post::find(1);
//
//    foreach ($post->photos as $photo) {
//
//        return $photo->path;
//
//    }
//
//});
//
//Route::get('/user/photo', function() {
//
//    $user = User::find(1);
//
//    foreach ($user->photos as $photo) {
//
//        return $photo->path;
//
//    }
//
//});



/*
|--------------------------------------------------------------------------
| Crud application
|--------------------------------------------------------------------------
*/


Route::group(['middleware'=>'wep'], function(){

    Route::resource('/posts', 'PostController');

});


/*
|--------------------------------------------------------------------------
| Dates and carbon
|--------------------------------------------------------------------------
*/

Route::get('/dates', function() {

    $date = new DateTime('+1 week');

    echo $date->format('m-d-y');

    echo '<br />';

    echo Carbon::now()->addDays(10)->diffForHumans();

    echo '<br />';

    echo Carbon::now()->subMonths(4)->diffForHumans();

    echo '<br />';

    echo Carbon::now()->yesterday()->diffForHumans();

    echo '<br />';
});

Route::get('/getname', function() {

    $user = User::find(1);

    echo $user->name;
});

Route::get('/setname', function() {

    $user = User::find(1);

    $user->name = "william";

    $user->save();
});

//Route::get('/post/{id}', 'PostController@index');

//Route::resource('post', 'PostController');
//
//Route::get('contact', 'PostController@contact');
//
//Route::get('post/{id}/{name}/{password}', 'PostController@show_post');


