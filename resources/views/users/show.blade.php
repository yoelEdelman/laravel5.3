@extends('base')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card text-white bg-dark">
                    <h4 class="card-header">Fiche d'utilisateur</h4>
                    <div class="card-body">
                        <p>Nom : {{ $user->name }}</p>
                        <p>Email : {{ $user->email }}</p>
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary btn-lg mt-2">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
            </div>
        </div>
    </div>
@endsection