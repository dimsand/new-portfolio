<?php use Carbon\Carbon; ?>

@extends('layouts.admin')

@section('title')
    Expériences
@endsection

@section('content')
<h2>Expériences</h2>

<section class="">
    
    <fieldset>
        <legend>Mes expériences</legend>
        <a href="{{ route('admin_add_experience') }}" class="btn btn-info btn-sm btn_add_experience pull-right mb-2" role="button"
            aria-disabled="true"><i class="fa fa-plus" aria-hidden="true"></i>Ajouter une expérience</a>
        <table class="table table-hover table-va table-sm table-bordered table-striped table_experience">
            <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Type</th>
                <th>Entreprise</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($experiences as $c)
                <tr>
                    <th scope="row">{{$c['id']}}</th>
                    <td>{{$c['title']}}</td>
                    <td>{{ $c['date_debut'] ? (new Carbon($c['date_debut']))->format('m/Y') : '?' }}</td>
                    <td>{{ $c['date_fin'] ? (new Carbon($c['date_fin']))->format('m/Y') : '?' }}</td>
                    <td>{{$c['experienceType']['libelle']}}</td>
                    <td>{{$c['company']['nom']}}</td>
                    <td>
                        <a role="button" href="{{ route('admin_edit_experience', ['id' => $c['id']]) }}" class="btn btn-primary btn-sm pull-left">Editer</a>
                        {{ Form::open(array('url' => route('admin_delete_experience', ['id' => $c['id']]), 'class' => 'pull-left ml-2')) }}
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