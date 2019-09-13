@extends('base')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card text-white bg-dark">
                    <h4 class="card-header">Modification d'un utilisateur</h4>
                    <div class="card-body">
                        <div class="col-sm-12">
                            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => '']) !!}
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nom']) !!}
                                {!! $errors->first('name', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Email']) !!}
                                {!! $errors->first('email', '<small class="form-text invalid-feedback">:message</small>') !!}
                            </div>
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary float-right']) !!}
                            {!! Form::close() !!}
                            <a href="javascript:history.back()" class="btn btn-secondary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection