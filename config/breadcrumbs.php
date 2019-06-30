<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Breadcrumbs Configuration
    |--------------------------------------------------------------------------
    |
    | This value is the parameter name of your route.
    | This value is used when the framework needs to replace the dynamic
    | route parameter.
    |
    | E.g.
    |     For a route like:
    |         /users/{user}/edit
    |     Would produce an equivalent breadcrumbs:
    |         Home / Users / John Doe / Edit
    |
    | The default value is 'name' but you may change this per route via
    | middleware.
    | E.g.
    |     For the sample user route above, the route would look something like:
    |        Route::middleware(['breadcrumbs:user,fullname'])->group(function () {
    |            Route::resource('users', 'UserController');
    |        });
    */

    'route:name' => 'name',

    'accessor:name' => 'name',

];
