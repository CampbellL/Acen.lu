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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Category;
use App\Document;

Route::redirect('/home','/');
Route::get('/dashboard',function(){
    $pages = \TCG\Voyager\Models\Page::where('auth_required','1')->get();
    $announcements = App\Announcement::orderBy('created_at')->limit(3)->get();
    $documents = App\Document::all()->where('member_only',1);
    return view('members.dashboard',compact('announcements','documents','pages'));
})->middleware('auth');;
Route::get('/pdf',function (){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});
Route::view('/info','info');
Route::get('/card',function (){
    $pdf = PDF::loadView('partials.membershipcard',[]);
    $pdf->setOptions(['dpi' => 300, 'defaultFont' => 'Roboto']);
    return $pdf->download('membercard.pdf');
});
Route::view('/historique','historique');
Route::get('/pages/{slug}', 'PagesController@getPage');
Route::get('/category/{slug}', 'CategoryController@getCategory');
Route::get('/informations', function () {
    $documents = App\Document::orderBy('created_at')->where('member_only','0')->get();
    return view('informations', compact('documents'));
})->middleware('auth');
Route::get('/', function () {
    $posts = App\Post::orderBy('created_at', "desc")->get();
    return view('home', compact('posts'));
});
Route::get('/au-public', function () {
    $publishers = App\Publisher::all();
    return view('aupublic',compact('publishers','publications'));
});
Route::get('post/{slug}', function ($slug) {
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
Route::view('/contact', "contact");

Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/legislatioun',function(){
    $cat = Category::where('name','Legislatioun')->first();
    $documents = Document::where('category_id',$cat->id)->get();
    return view('documents',compact('documents','cat'));
});
