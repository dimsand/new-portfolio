@extends('layouts.admin')

@section('title')
    Ajout compétence
@endsection

@section('style')
    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <style>
        textarea {
            width: 100%;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.25;
            color: #495057;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

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
    <h1>Ajout projet</h1>

    <section class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin_add_competence_form') }}">
                    {{ csrf_field() }}
                    
                    <div class="md-form">
                        <input type="text" id="libelle" class="form-control" name="libelle" placeholder="Nom" required
                               autofocus value="">
                    </div>
                    
                    <div class="md-form">
                        <div class="md-form">
                                <input type="number" id="title" class="form-control" name="note" placeholder="Note" required
                                    min='0' max='10' step="0.1" value="">
                            </div>
                    </div>
                    
                    <select class="single_select" name="techno_type_id" placeholder="Choisir le type de techno...">
                        <option value=""></option>
                        @foreach($listTechnoTypes as $key => $label)
                            <option value="{{$key}}">{{$label}}</option>
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
