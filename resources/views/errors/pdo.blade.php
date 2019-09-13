@extends('base')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-offset-4 col-md-4">
                <div class="card border border-danger">
                    <div class="card-header alert-danger">
                        <h3 class="card-title">Il y a un problème !</h3>
                    </div>
                    <div class="card-body">
                        <p>Notre base de données semble inaccessible pour le moment.</p>
                        <p>Veuillez nous en excuser.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection