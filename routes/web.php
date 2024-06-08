<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//     return view('welcome');
});


Route::get('/', function () {
         return view('welcome');
    });

   Route::get('/', function () {
        return "Hello world ..";
   });

   Route::get('/étudiants', function () {
    return "List des étudiants ...";
});

// Route::get('/etudiant', function (Request $request) {
//     //dump($request);
//    /* $name=$request['name'];
//     $age=$request['age'];*/
//     //ou on fait
//     $name=$request->name;
//     $age=$request->$age;
//     return "etudiant $name et age $age";
// });
    
Route::get('/etudiant/{id}/{name}', function (int $id, string $nom) {
       
         return "etudiant N° $id - $nom";
    })->where('id','[0-9]+')->where('name', '[a-zA-Z]+');//controler 
    