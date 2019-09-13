@extends('base')

@section('content')
    <br>
    <div class="container">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {!! session('ok') !!}
            </div>
        @endif
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class=" card text-white bg-dark">
                    <h4 class="card-header">Liste des utilisateurs</h4>
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{!! $user->id !!}</td>
                                    <td class="text-white"><strong>{!! $user->name !!}</strong></td>
                                    <td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                    <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\' )']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info btn-lg float-right mt-2']) !!}
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection