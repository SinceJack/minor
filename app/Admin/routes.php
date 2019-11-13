<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('users', UserController::class);

    $router->resource('adver', AdverController::class);

    $router->resource('appraise', AppraiseController::class);

    $router->resource('comment', CommentController::class);

    $router->resource('event', EventController::class);

    $router->resource('gallery', GalleryController::class);

    $router->resource('news', NewsController::class);

    $router->resource('program', ProgramController::class);

    $router->resource('programContent', ProgramContentController::class);

    $router->resource('contact', ContactController::class);

    $router->resource('userinfo', UserInfoController::class);

});
