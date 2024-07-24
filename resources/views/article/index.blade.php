@extends('layouts.app')

@section('title', 'Список статей')

@section('header')
    <h1>Список статей</h1>
@endsection

@section('content')
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
        <div>
            <a href="{{ route('articles.edit', $article) }}">Edit</a>
            <a href="{{ route('articles.destroy', $article) }}"
                data-confirm="Вы уверены?"
                data-method="delete" class="fa fa-remove"
                rel="nofollow">Delete
            </a>
        </div>
    @endforeach
@endsection
