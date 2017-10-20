@extends('layouts.admin')

@section('title')
    Projets
@endsection

@section('content')
    <section class="projets">
        <fieldset>
            <legend>Mes projets</legend>
            <a href="{{ route('admin_add_project') }}" class="btn btn-info btn-sm btn_add_project" role="button"
               aria-disabled="true"><i class="fa fa-plus" aria-hidden="true"></i>Ajouter un
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
        </fieldset>

        <fieldset>
            <legend>Projets Github</legend>
            <small><a href="https://github.com/dimsand/">https://github.com/dimsand/</a></small>

            <div class="list-group">
                @foreach($projects_github as $p)
                    <a href="#" class="list-group-item list-group-item-action">{{$p['name']}}</a>
                @endforeach
            </div>
        </fieldset>
    </section>
@endsection