@extends('layouts.app')

@section('content')
        @include('article.form')
        {{ html()->submit('Создать') }}
    {{ html()->closeModelForm() }}
@endsection
