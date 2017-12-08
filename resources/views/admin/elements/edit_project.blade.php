@extends('layouts.admin')

@section('title')
    Edition du projet {{$project->title}}
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
    <h1>Edition du projet {{$project->title}}</h1>

    <section class="">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin_edit_project_form', ['id'=>$project->id]) }}">
                    {{ csrf_field() }}
                    <div class="md-form">
                        <input type="text" id="title" class="form-control" name="title" placeholder="Nom" required
                               autofocus value="{{$project->title}}">
                    </div>
                    <div class="md-form">
                    <textarea type="text" id="description" class="md-textarea" name="description" rows="5"
                              placeholder="Description"
                              required>{{$project->description}}</textarea>
                    </div>
                    <select class="single_select" name="company_id" placeholder="Choisir une entreprise...">
                        <option value=""></option>
                        @foreach($list_companies as $key => $label)
                            <option value="{{$key}}" {{$project->company_id == $key ? 'selected' : ''}}>{{$label}}</option>
                        @endforeach
                    </select>
                    <select class="multiple_select" name="categories[]" placeholder="Choisir une ou des catégories..." multiple>
                        @foreach($list_categories as $key => $label)
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
        $('.multiple_select').selectize({
            maxItems: 5,
            items: [
                @foreach($project['categories'] as $cat)
                {{$cat->id}},
                @endforeach
            ]
        });
    </script>
@endsection
