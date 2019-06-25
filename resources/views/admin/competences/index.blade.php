@extends('layouts.admin')

@section('title')
    Compétences
@endsection

@section('content')
<h1>Compétences</h1>

<section class="">
    
    <fieldset>
        <legend>Mes compétences</legend>
        <a href="{{ route('admin_add_competence') }}" class="btn btn-info btn-sm btn_add_competence pull-right mb-2" role="button"
            aria-disabled="true"><i class="fa fa-plus" aria-hidden="true"></i>Ajouter une compétence</a>
        <table class="table table-hover table-va table-sm table-bordered table-striped table_competence">
            <thead>
            <tr>
                <th>#</th>
                <th>Techno</th>
                <th>Note</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($competences as $c)
                <tr>
                    <th scope="row">{{$c['id']}}</th>
                    <td>{{$c['libelle']}}</td>
                    <td>{{ $c['note'] ? $c['note'] : '?' }} / 10</td>
                    <td>{{$c['technoType']['libelle']}}</td>
                    <td>
                        <a role="button" href="{{ route('admin_edit_competence', ['id' => $c['id']]) }}" class="btn btn-primary btn-sm pull-left">Editer</a>
                        {{ Form::open(array('url' => route('admin_delete_competence', ['id' => $c['id']]), 'class' => 'pull-left ml-2')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Supprimer', array('class' => 'btn btn-danger btn-sm')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </fieldset>

</section>
@endsection