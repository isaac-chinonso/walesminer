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

Route::get('/', 'Frontend\PageController@index');

Route::get('/about-us', 'Frontend\PageController@about');

Route::get('/affiliate', 'Frontend\PageController@affiliate');

Route::get('/contact-us', 'Frontend\PageController@contact');

Route::get('/faq', 'Frontend\PageController@faq');

Route::get('/signin', 'Frontend\PageController@signin')->name('signin'); 

Route::get('/signup', 'Frontend\PageController@signup')->name('signup');

Route::post('/register', 'Api\AuthController@register')->name('register');

Route::post('/login', 'Api\AuthController@login')->name('login');

Route::group([ 'middleware' => 'Apilogin', 'prefix' => 'member', 'before' => 'member' ], function(){

    Route::get('/dashbaord', 'Member\PageController@dashboard')->name('dashboard');

    //All Routes for Deposits
    Route::get('/make-deposit', 'Member\PageController@makedeposit')->name('makedeposit');

    Route::post('post-deposit', 'Api\MemberController@postdeposit')->name('postdeposit');

    Route::get('/deposit-list', 'Member\PageController@depositlist')->name('depositlist');

    Route::get('/deposit-history', 'Member\PageController@deposithistory')->name('deposithistory');

    Route::get('/complete-deposit', 'Member\PageController@depositinstruct')->name('depositinstruct');

    Route::get('/withdraw-fund', 'Member\PageController@withdrawal')->name('withdrawal');

    Route::post('/make-withdrawal', 'Api\MemberController@makewithdrawal')->name('makewithdrawal');

    Route::get('/withdraw-history', 'Member\PageController@withdrawalhistory')->name('withdrawalhistory');

});

Route::group([ 'middleware' => 'web', 'prefix' => 'admin', 'before' => 'admin' ], function(){

    Route::get('/', 'Admin\AuthController@login')->name('loginpage');

    Route::post('/admin-login', 'Admin\AuthController@adminlogin')->name('adminlogin');

    Route::get('/logout', 'Admin\AuthController@logout')->name('logout');

    Route::get('/admin-dashbaord', 'Admin\PageController@admindashboard')->name('admindashboard');

    Route::get('/pending-deposit', 'Admin\PageController@pendingdeposit')->name('pendingdeposit');

    Route::get('/active-deposit', 'Admin\PageController@activedeposit')->name('activedeposit');

    Route::get('/activate-deposit/{id}', 'Admin\PageController@activatedeposit')->name('activatedeposit');

    Route::get('/pending-withdrawal', 'Admin\PageController@pendingwithrawal')->name('pendingwithrawal');

    Route::get('/active-withdrawal', 'Admin\PageController@activewithdrawal')->name('activewithdrawal');

    Route::get('/activate-withdrawal/{id}', 'Admin\PageController@activatewithdrawal')->name('activatewithdrawal');

    Route::get('/all-users', 'Admin\PageController@allusers')->name('allusers');
});


