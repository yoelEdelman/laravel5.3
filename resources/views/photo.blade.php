@extends('base')

@section('title')
    Upload image
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card border-info">
                    <div class="card-header bg-info">Envoi d'une photo</div>
                    <div class="card-body">
                        {!! Form::open(['url' => 'photo', 'files' => true]) !!}
                            <div class="form-group">
                                {!! Form::file('image', ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Votre nom']) !!}
                                {!! $errors->first('image', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            {!! Form::submit('Envoyer !', ['class' => 'btn btn-info btn-lg float-right']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection