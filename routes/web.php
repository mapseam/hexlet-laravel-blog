<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('about', function () {
    return view('about');
});*/
Route::get('about', [PageController::class, 'about']);

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками

Route::get('articles/create', [ArticleController::class, 'create'])
  ->name('articles.create');

// POST-запрос
Route::post('articles', [ArticleController::class, 'store'])
  ->name('articles.store');

# id – параметр, который зависит от конкретной статьи
# Фигурные скобки нужны для описания параметров маршрута
Route::get('articles/{id}', [ArticleController::class, 'show'])
  ->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
  ->name('articles.edit');

// Метод PATCH
Route::patch('articles/{id}', [ArticleController::class, 'update'])
  ->name('articles.update');
