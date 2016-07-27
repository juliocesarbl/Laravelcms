<?php
use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/about', function () {
//    return"Hi about page";
//});
//
//
//Route::get('/contact', function () {
//    return "Hi I am contact";
//});
//
//Route::get('/post/{id}/{name}',function($id,$name){
//    return "This is post number ".$id." ".$name;
//});
//
//
//Route::get('admin/posts/example', array('as'=>'admin.home',function(){
//    $url = route('admin.home');
//    return "This url is ".$url;
//}));

//seleciona a controller e passa o id como parametro, a chamada é para o metodo depois do @ passando o parametro
//Route::get('/post/{id}','PostController@index');

//usar parametros de crud pra usar os posts, ussar (php artisan route:list) pra ver as opções
//Route::resource('posts','PostController');

//Route::get('/contact','PostController@contact');

//Route::get('post/{id}/{name}/{password}','PostController@show_post');

/*
|--------------------------------------------------------------------------
| DATABASES Raw SQL Queries
|--------------------------------------------------------------------------
*/
//
//Route::get('/insert',function()
//{
//    DB::insert('insert into posts(title,content) values(?,?)',['PHP is awesome with Edwin','Laravel is the best thing  that has happend to PHP,PERIOD']);
//
//});

//Route::get('/read',function()
//{
//    $results = DB::select('select * from posts where id = ?',[1]);
//   // return $results;
//    return var_dump($results);
////    foreach($results as $post)
////    {
////        return $post->title;
////
////    }
//
//});

//Route::get('/update',function(){
//    $updated = DB::update('update posts set title = "Update title" where id = ?',[1]);
//
//    return $updated;
//});

//Route::get('/delete',function(){
//    $deleted = DB::delete('DELETE FROM  posts WHERE id = ?',[1]);
//
//    return $deleted;
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT/ORM
|--------------------------------------------------------------------------
*/

//Route::get('/read',function(){
//
//    $posts = Post::all();
//
//    foreach($posts as $post){
//        return $post->title;
//    }
//
//});

//Route::get('/find',function(){
//    //busca pelo id
//    $post = Post::find(2);
//
//    return $post->title;
//
//});

//Route::get('/findwhere',function()
//{
//    $posts = Post::where('id',6)->orderBy('id','desc')->take(1)->get();
//
//    return $posts;
//
//});


//Route::get('/findmore',function()
//{
////    $posts = Post::findOrfail(1);
////
////    return $posts;
//
//    $posts = Post::where('users_count','<',50)->firstOrFail();
//
//    return $posts;
//
//});


//Route::get('/basicinsert',function(){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'Wow eloquent is really cool, look at this content';
//    $post->save();
//
//});


//Route::get('/basicinsert',function(){
//
//    $post = Post::find(2);
//
//    $post->title = 'New Eloquent title insert 2';
//    $post->content = 'Wow eloquent is really cool, look at this content 2';
//    $post->save();
//
//});

//Route::get('/create',function(){
//   Post::create(['title'=>'the create method','content'=>'Wowl I\'m learning  a lot  with Edwin']);
//});

//Route::get('/update',function(){
//   Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP TITLE','content'=>'I love myself']);
//});

//Route::get('/delete',function(){
//   $post = Post::find(6);
//
//    $post->delete();
//});
//
//Route::get('/delete2',function(){
//    //Post::delete(5);
//    //Post::destroy([2,7]);
//
//    //Post::where('is_admin',0)->delete();
//});

//Route::get('/softdelete',function(){
//    Post::find(9)->delete();
//});

//Route::get('/readsoftdelete',function(){
////this is wrong
////    $post = Post::find(9);
////
////    return $post;
//
//    //this is right
////    $post = Post::withTrashed()->where('id',9)->get();
////    return $post;
//
////    $post = Post::onlyTrashed()->where('is_admin',0)->get();
////    return $post;
//
//    $post = Post::withTrashed()->where('is_admin',0)->get();
//    return $post;
//
//});


//Route::get('/restore',function(){
//   Post::withTrashed()->where('is_admin',0)->restore();
//});

//Route::get('/forcedelete',function(){
//   Post::withTrashed()->where('id',9)->forceDelete();
//});



/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/


//One to One relationship
//Route::get('/user/{id}/post',function($id){
////    return User::find($id)->post;
        //accessing method post , not the post property
//    return User::find($id)->post->title;
//});
//Reverse relationship
//Route::get('/post/{id}/user',function($id){
//   return Post::find($id)->user->name;
//});

//one to many
//Route::get('/posts',function(){
//
//   $user = User::find(1);
//
//    foreach($user->posts as $post)
//    {
//        echo $post->title."<br>";
//    }
//});

//Many to many
//Route::get('/user/{id}/role',function($id){
//   $user = USer::find($id);
//    //can use
//    // User::find($id)->roles()->orderBy('id','desc')->get();
//
//    foreach($user->roles as $role)
//    {
//        echo $role->name.'<br>';
//    }
//});

//Accessing the intermediate table/pivot table
//Route::get('/user/pivot',function(){
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//        //pra usar o created at tem que declarar na tabela usuario que quer usar com ->withPivot('created_at')
//        echo $role->pivot->created_at;
//    }
//});
//
//Route::get('/user/country',function(){
//    $country = Country::find(4);
//    foreach($country->posts as $post)
//    {
//        return $post->title;
//    }
//});

//Polymorphic relations, to use with posts, just change the user for post

//Route::get('/user/photos',function(){
//    $user = User::find(1);
//    foreach($user->photos as $photo){
//
//        return $photo;
//
//    }
//});

//Route::get('photo/{id}',function($id){
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//});


//Polymorphic many to many
//Route::get('/post/tag',function(){
//    $post = Post::find(1);
//
//    foreach($post->tags as $tag){
//        echo $tag->name;
//    }
//});

Route::get('/tag/post',function(){
    $tag = Tag::find(2);

    foreach($tag->posts as $post){
        echo $post->title;
    }
});
