<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/booking', function () {
    return view('front.booking');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/menu', function () {
    return view('front.menu');
});
Route::get('/service', function () {
    return view('front.service');
});
Route::get('/testimonial', function () {
    return view('front.testimonial');
});
Route::get('/dashboard', function () {
    return view('back.dashboard');
});
Route::get('/icons', function () {
    return view('back.icons');
});
Route::get('/maps', function () {
    return view('back.maps');
});
Route::get('/notifications', function () {
    return view('back.notifications');
});
Route::get('/table', function () {
    return view('back.table');
});
Route::get('/template', function () {
    return view('back.template');
});
Route::get('/typography', function () {
    return view('back.typography');
});
Route::get('/upgrade', function () {
    return view('back.upgrade');
});
Route::get('/user', function () {
    return view('back.user');
});