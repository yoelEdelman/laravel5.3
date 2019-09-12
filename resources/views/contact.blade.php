@extends('base')

@section('title')
    Nous contacter
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card border-info">
                    <div class="card-header bg-info">Contactez-moi</div>
                    <div class="card-body">
                        {!! Form::open(['url' => 'contact']) !!}
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Votre nom']) !!}
                                {!! $errors->first('name', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Votre email']) !!}
                                {!! $errors->first('email', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('text', null, ['class' => $errors->has('text') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Votre message']) !!}
                                {!! $errors->first('text', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            {!! Form::submit('Envoyer !', ['class' => 'btn btn-info btn-lg float-right']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection