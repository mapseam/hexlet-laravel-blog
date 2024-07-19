@extends('layouts.app')

@section('title', 'Список статей')

@section('header')
    <h1>Список статей</h1>
@endsection

@section('content')
    @foreach ($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
