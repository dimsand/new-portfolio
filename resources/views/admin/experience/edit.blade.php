@extends('layouts.admin')

@section('title')
    Edition de l'expérience {{$experience->title}}
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
    <h2>Edition de l'experience {{$experience->title}}</h2>

    <section class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin_edit_experience_form', ['id'=>$experience->id]) }}">
                    {{ csrf_field() }}
                    
                    <div class="md-form">
                        <input type="text" id="title" class="form-control" name="title" placeholder="Titre" required
                            autofocus value="{{$experience->title}}">
                    </div>

                    <div class="md-form">
                        <textarea type="text" id="description" class="md-textarea" name="description" rows="5"
                            placeholder="Description"
                            required>{{$experience->description}}</textarea>
                    </div>

                    <div class="md-form">
                        <input type="date" id="date_debut" class="form-control" name="date_debut" placeholder="Début" required
                            value="{{$experience->date_debut}}">
                    </div>

                    <div class="md-form">
                        <input type="date" id="date_fin" class="form-control" name="date_fin" placeholder="Fin" required
                            value="{{$experience->date_fin}}">
                    </div>
                    
                    <select class="single_select" name="experience_type_id" placeholder="Choisir le type d'expérience...">
                        <option value=""></option>
                        @foreach($listExperienceTypes as $key => $label)
                            <option value="{{$key}}" {{$experience->experience_type_id == $key ? 'selected' : ''}}>{{$label}}</option>
                        @endforeach
                    </select>

                    <select class="single_select" name="company_id" placeholder="Choisir le type de techno...">
                        <option value=""></option>
                        @foreach($listCompanies as $key => $label)
                            <option value="{{$key}}" {{$experience->company_id == $key ? 'selected' : ''}}>{{$label}}</option>
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
