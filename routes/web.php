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

Route::get('tasks', 'TasksController@index');//после @ название метода, а до название контроллера
Route::get('tasks/{task}', 'TasksController@show');

//Route::get('tasks', function () {//
//	//$tasks = DB::table('tasks')->get(); //выводит// из таблицы данные, лучше не //использовать такую запись, а описывать в модели//
//	//$tasks = App\Task::all(); //обеспечивает вывод на экран всех полей//
//	$tasks = App\Task::incomplete(); //переменная выполняет задание по выводу данных //описанное в модели Task с методом incomplete
//    return view('tasks.index',compact('tasks'));
//});
//Route::get('/tasks/{tas}', function ($id) {
//	//$task = DB::table('tasks')->find($id);з
//	$task = App\Task::find($id);
//    return view('tasks.show',compact('task'));
//});

