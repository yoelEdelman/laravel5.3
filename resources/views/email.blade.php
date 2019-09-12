@extends('base')

@section('title')
    Email
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card text-white bg-dark">
                    <h4 class="card-header">Inscription à la lettre d'information</h4>
                    <div class="card-body">
                        {!! Form::open(['route' => 'store.email']) !!}
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Entrez votre email']) !!}
                                {!! $errors->first('email', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            {!! Form::submit('Envoyer !', ['class' => 'btn btn-secondary btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection