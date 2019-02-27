<?php

use App\Post;
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
    return view('welcome');
});

// Route::get('/', function() {

//     return '首頁';
// });

// Route::get('about', function() {

//     return '關於本站';
// });

// Route::get('posts', function() {

//     return '文章總覽';
// });

// Route::get('posts/{id}', function($id) {

//     return '第' . $id . '篇文章';
// });

// Route::get('hot', function() {

//     return '熱門文章';
// });

// Route::get('random', function() {

//     return '隨機文章';
// });

//======================================

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('posts', function () {
//     return view('posts');
// });

Route::get('posts/{id}', [ 'as' => 'posts.detail', function ($postId) {
    
    $post = \App\Post::find($postId);
    return view('post-detail')->with('post', $post);
}]);

// Route::get('hot', function () {
//     return view('hot');
// });

// Route::get('random', function () {
//     return view('random');
// });

Route::get('posts', ['uses' => 'PostsController@index']);

Route::get('posts/{id}', [ 'uses' => 'PostsController@show']);

Route::get('random', [ 'uses' => 'PostsController@random']);

// Route::get('create', function(){
//     $post = new Post();
//     $post->title = '透過Model建立';
//     $post->sub_title = '副標題';
//     $post->content = 'Lorem ipsum dolor sit amet consectetur';
//     $post->save();
//     return '文章編號' . $post->id . '已建立';
// });


Route::get('update/{id}', function($postId){
    $post = Post::find($postId);
    $post->title = '透過Model修改';
    $post->sub_title = '副標題';
    $post->content = 'Lorem ipsum dolor sit amet consectetur';
    $post->save();
    return '文章編號' . $post->id . '已修改';
});

Route::get('delete/{id}', function($postId){
    $post = Post::find($postId);
    $post->delete();
    return '文章編號' . $post->id . '已刪除';
});

//=================== post =================
Route::get('test-create', function() {
    return view('create-post');
});

Route::post('create', ['as' => 'post.create' , 'uses' => 'PostsController@create']);