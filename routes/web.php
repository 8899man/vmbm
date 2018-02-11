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

Route::get('/', function () {
    return redirect('/admin/login');
});


Route::get('attachment/{md5}', [
    'as' => 'attachment.download',
    'uses' => 'Web\AttachmentController@download',
]);
Route::get('image/{md5}', [
    'as' => 'attachment.image',
    'uses' => 'Web\AttachmentController@image',
]);



// Route::get('/test',function() {
//
////     $password = bcrypt('admin');
////     dd($password);
////     dd(dict()->get('user_info','work_type'));
////     $password = bcrypt('admin');
////     dd($password);
//     $obj = new \App\Services\User\Info();
//     $obj = $obj->find(1);
////     var_dump($obj);exit;
////    $user = UserInfoModel::find(1);
//     dump(Auth::guard('admin')->user());
//    Auth::login($obj);
//
//    dd(Auth::user());
// });

//Route::get('/test', 'Web\AuthController@test');

Route::get('/test', 'TestController@index');

Route::any('/wechat', 'WeChatController@serve');
