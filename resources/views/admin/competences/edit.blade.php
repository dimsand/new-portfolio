@extends('layouts.admin')

@section('title')
    Edition de la compétence {{$competence->libelle}}
@endsection

@section('style')
    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <style>
        .md-form {
            margin-bottom: 6px;
        }

        .selectize-input {
            width: 100%;
            padding: .375rem 1.75rem .375rem .75rem;
            margin-bottom: 6px;
        }

        .single_select{
            width: 100%;
            margin-bottom: 6px;
        }
    </style>
@endsection

@section('content')
    <h1>Edition du projet {{$competence->libelle}}</h1>

    <section class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin_edit_competence_form', ['id'=>$competence->id]) }}">
                    {{ csrf_field() }}
                    <div class="md-form">
                        <input type="text" id="title" class="form-control" name="libelle" placeholder="Nom" required
                               autofocus value="{{$competence->libelle}}">
                    </div>

                    <div class="md-form">
                        <input type="number" id="title" class="form-control" name="note" placeholder="Note" required
                            min='0' max='10' value="{{$competence->note}}">
                    </div>
                    
                    <select class="single_select" name="techno_type_id" placeholder="Choisir le type de techno...">
                        <option value=""></option>
                        @foreach($listTechnoTypes as $key => $label)
                            <option value="{{$key}}" {{$competence->techno_type_id == $key ? 'selected' : ''}}>{{$label}}</option>
                        @endforeach
                    </select>
                    
                    <div class="text-center">
                        <input type="submit" class="btn btn-dark" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script>
        $('.single_select').selectize();
    </script>
@endsection
