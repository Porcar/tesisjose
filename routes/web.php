<?php
use Yajra\Datatables\Datatables;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/fast', [
    'as'   => 'fast',
    'uses' => function () {
        return view('fast');
    }
]);

Route::get('/serverSide', [
    'as'   => 'serverSide',
    'uses' => function () {
        $info = App\Info::all();
        return Datatables::of($info)->make();
    }
]);

Route::get('/slow', [
    'as'   => 'slow',
    'uses' => function () {
        $info = App\Info::all();      
    	return view('welcomeSlow')->with(compact('info'));
    }
]);