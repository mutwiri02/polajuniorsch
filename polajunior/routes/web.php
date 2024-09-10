<?php

use App\Http\Controllers\ContactController;
use App\Models\contactForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('aboutUs');
});
Route::get('/Kindergarten', function () {
    return view('Academics.Kindergaten');
});
Route::get('/junior', function () { 
    return view('Academics.junior');
});
Route::get('/Pre-school', function () {
    return view('Academics.Preschool');
});
Route::get('/Senior', function () {
    return view('Academics.Senior');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/social-responsibility', function () {
    return view(
        'Explore.socialResponsibility'
    );
});
Route::get('/Mental-wellbeing', function () {
    return view(
        'Explore.mentalWelbeing'
    );
});
Route::get('/sports', function () {
    return view(
        'Explore.sports'
    );
});
Route::get('/clubs', function () {
    return view(
        'Explore.clubs'
    );
});
Route::get('/Facilities', function () {
    return view(
      'Explore.facilities'
    );
    
});

Route::get('Admissions', function(){
        return view(
            'Admissions.Overview'
        );
    });

//contact form below
// Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact');


Route::post(
    '/contact',
    function (Request $request) {
        // dd($renquest->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required'
        ]); 
        $data = new contactForm();

        $data->name= $data['name'];
        $data->email = $data['email'];
        $data->phone = $data['phone'];
        $data->address = $data['address'];
        $data->message = $data['message'];
        $data->save();


        // $data->name = $request->input('name');
        // $data->email = $request->input('email');
        // $data->phone = $request->input('phone');
        // $data->address = $request->input('address');
        // $data->message = $request->input('message');
        // $data->save();
    }
)->name('contact')
;


