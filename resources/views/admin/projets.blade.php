@extends('layouts.admin')

@section('title')
    Projets
@endsection

@section('content')
    <h1>Projets</h1>

    <section class="">
        <div>
            <h2>Projets visibles</h2>
        </div>
        <a href="{{ route('admin_add_project') }}" class="btn btn-info" role="button" aria-disabled="true">Ajouter un
            projet</a>
        <table class="table table-hover table-sm table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Créé le</th>
                <th>Mis à jour le</th>
                <th>Entreprise</th>
                <th>Categories</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $p)
                <tr>
                    <th scope="row">{{$p['id']}}</th>
                    <td>{{$p['title']}}</td>
                    <td>{{$p['created_at']}}</td>
                    <td>{{$p['updated_at']}}</td>
                    <td>{{$p['company']['nom']}}</td>
                    <td>
                        @foreach($p['categories'] as $categ)
                            <span class="badge badge-secondary">{{$categ['libelle']}}</span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            <h2>Projets Github
                <small><a href="https://github.com/dimsand/">https://github.com/dimsand/</a></small>
            </h2>
        </div>
        <div class="list-group">
            @foreach($projects_github as $p)
                <a href="#" class="list-group-item list-group-item-action">{{$p['name']}}</a>
            @endforeach
        </div>
    </section>
@endsection