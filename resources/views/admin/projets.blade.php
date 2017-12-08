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
            <table class="table table-hover table-sm table-bordered table-striped table_projects">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Créé le</th>
                    <th>Mis à jour le</th>
                    <th>Entreprise</th>
                    <th>Categories</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $p)
                    <tr>
                        <th scope="row">{{$p['id']}}</th>
                        <td>{{$p['title']}}</td>
                        <td>{{$p['created_at']->format('d/m/Y H:i:s')}}</td>
                        <td>{{$p['updated_at']->format('d/m/Y H:i:s')}}</td>
                        <td>{{$p['company']['nom']}}</td>
                        <td>
                            @foreach($p['categories'] as $categ)
                                <span class="badge badge-secondary">{{$categ['libelle']}}</span>
                            @endforeach
                        </td>
                        <td>
                            <a role="button" href="{{ route('admin_edit_project_form', ['id' => $p['id']]) }}" class="btn btn-primary btn-sm">Editer</a>
                            <a role="button" href="{{ route('admin_edit_project_form', ['id' => $p['id']]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                            {{ Form::open(array('url' => route('admin_delete_project', ['id' => $p['id']]), 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Supprimer', array('class' => 'btn btn-danger btn-sm')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </fieldset>

        <fieldset>
            <legend>Projets Github</legend>
            <a class="btn btn-warning btn-sm aRecupGithubProject" role="button"
               aria-disabled="true"><i class="fa fa-refresh" aria-hidden="true"></i>Recharger</a>
            <small><a href="https://github.com/dimsand/">https://github.com/dimsand/</a></small>
            <div class="divRecupGithubProject">
                <div class="divChildRecupGithubProject">
                    <div>
                        <button class="btn btn-secondary btnRecupGithubProject">Récupérer les projets Github</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(document).on('click', '.btnRecupGithubProject', function(){
            $('.divChildRecupGithubProject div').html('<img height="50" src="/images/utils/loader.gif"/>');
            getGithubProjects()
        });
        $(document).on('click', '.aRecupGithubProject', function(){
            $('.divRecupGithubProject').html('<div class="divChildRecupGithubProject">\n' +
                '                    <div>\n' +
                '                        <button class="btn btn-secondary btnRecupGithubProject">Récupérer les projets Github</button>\n' +
                '                    </div>\n' +
                '                </div>');
            $('.divChildRecupGithubProject div').html('<img height="50" src="/images/utils/loader.gif"/>');
            getGithubProjects()
        });

        function getGithubProjects(){
            $.ajax({
                type: "GET",
                url: "/admin/ajax_getGithubProjects",
                dataType: 'html',
                success: function (data) {
                    $('.divRecupGithubProject').html(data);
                    $('.aRecupGithubProject').show();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    </script>
@endsection