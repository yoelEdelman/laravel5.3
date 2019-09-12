@extends('base')

{{--@section('title')--}}
{{--    Formulaire--}}
{{--@endsection--}}

@section('content')
    {!! Form::open(['url' => 'users']) !!}
    {!! Form::label('name', 'Entrez votre nom : ') !!}
    {!! Form::text('name') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection