<?php



// use TestController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;

// use Illuminate\Support\Facades\Route;
// Route::get('/hussein',function(){
// return 'hussein';});

// });
// Route::match(['get','post'],'/',function(){
// return 'home page';
// });
// Route::any('/',function(){
// return 'any page';
// });

// Route::redirect('hello','/');

// Route::get('/',function(){
// return view('welcome');
// });
// Route::view('/','welcome');

// Route::get('hhh/{_name?} ',function($name=null){
// return 'welcome'.$name;
// });

// Route::get('Home/{name}/{age}',function($name,$age){
//  return "welcome $name is age $age";
// })->whereAlpha('name')->whereNumber('age');

// Route::get('/{name}/{age}/{password}', function($name,$age,$password) {
//      return "welcome $name is age $age password: $password";
//  })->whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('password')->name('welcome1');

// Route::get('user/{id}/{name}',function($id,$name){
// return "$id -- $name";
// })->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

// Route::prefix('Server')->group(function(){

//     Route::get('/aws',function(){return 'server aws';});
//     Route::get('/jira',function(){return 'server jira';});
//     Route::get('/testng',function(){return 'server testng';});
//     Route::get('/About',function(){return 'server About';});
// });
// Route::get('/',[TestController::class,'welcome'])->name('welcome');



// Route::get('user/{id}/profile',function($id)
// {

//     return route('profile',[$id=>100]);
// })->name('profile');

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;

// Route::get('/',[NewController::class,'index'])->name('home');
// Route::get('/about',[NewController::class,'about'])->name('about');
// Route::get('/contact',[NewController::class,'contact'])->name('contact');
// Route::post('/contact',[NewController::class,'contact_data'])->name('contact_data');
// Route::get('/site1',[Site1Controller::class,'index'])->name('index');


    // Route::prefix('site2')->name('site2.')->group(function(){
//     Route::get('/',[Site2Controller::class,'index'])->name('index');
//     Route::get('/about',[Site2Controller::class,'about'])->name('about');
//     Route::get('/post',[Site2Controller::class,'post'])->name('post');
//     Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
// });

//       Route:: prefix('site3')->name('site3.')->group(function(){
// Route::get('/',[Site3Controller::class,'index']);
// Route::get('/about',[Site3Controller::class,'about'])->name('about');
// Route::get('/experience',[Site3Controller::class,'experience'])->name('experience');
// Route::get('/education',[Site3Controller::class,'education'])->name('education');
// Route::get('/skills',[Site3Controller::class,'skills'])->name('skills');
// Route::get('/interests',[Site3Controller::class,'interests'])->name('interests');
// Route::get('/awards',[Site3Controller::class,'awards'])->name('awards');
//       });

Route::get('form1',[FormController::class,'form1'])->name('form1');
Route::post('/form1', [FormController::class, 'form1_data'])->name('form1_data');


Route::get('form2',[FormController::class,'form2'])->name('form2');
Route::post('/form2', [FormController::class, 'form2_data'])->name('form2_data');

Route::get('form3',[FormController::class,'form3'])->name('form3');
Route::post('/form3', [FormController::class, 'form3_data'])->name('form3_data');


Route::get('form4',[FormController::class,'form4'])->name('form4');
Route::post('/form4', [FormController::class, 'form4_data'])->name('form4_data');

Route::get('full_form',[FormController::class,'full_form'])->name('full_form');
Route::post('/full_form', [FormController::class, 'full_form_data'])->name('full_form_data');



