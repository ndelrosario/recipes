<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    $dishes = DB::select("SELECT * FROM dishes order by name");

    $first_recipe_view = View::make('view-recipe', [
        'dish' => $dishes[0],
    ]);

    $first_recipe_html = $first_recipe_view->render();

	return View::make('index', [
        'dishes' => $dishes,
        'first_dish' => $first_recipe_html,
    ]);

});

Route::get('/view/{dish_id}', function ($dish_id) {

    $sql = "SELECT * FROM dishes WHERE id = ?";

    $records = DB::select($sql, [$dish_id]);

    return View::make('view-recipe', [
        'dish' => $records[0],
    ]);
});



