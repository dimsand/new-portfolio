@extends('layouts.admin')

@section('title')
    Tableau de bord
@endsection

@section('content')
<h1>Dashboard</h1>

<section class="placeholders">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Statistiques site</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:15px;">
        <div class="col-sm-3">
            <div class="card bg-dark text-white">
                <img class="card-img" src="http://via.placeholder.com/250?text=5" alt="Card image">
                <div class="card-img-overlay">
                    <h4 class="card-title">Nombre de projets</h4>
                    <p class="card-text">Dernier projet : </p>
                    <p class="card-text">Ajouté le xxx à xxx</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-dark text-white">
                <img class="card-img" src="http://via.placeholder.com/250?text=5" alt="Card image">
                <div class="card-img-overlay">
                    <h4 class="card-title">Années d'expériences</h4>
                    <p class="card-text">Dernier projet : </p>
                    <p class="card-text">Ajouté le xxx à xxx</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-dark text-white">
                <img class="card-img" src="http://via.placeholder.com/250?text=5" alt="Card image">
                <div class="card-img-overlay">
                    <h4 class="card-title">Années d'expériences</h4>
                    <p class="card-text">Dernier projet : </p>
                    <p class="card-text">Ajouté le xxx à xxx</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-dark text-white">
                <img class="card-img" src="http://via.placeholder.com/250?text=5" alt="Card image">
                <div class="card-img-overlay">
                    <h4 class="card-title">Années d'expériences</h4>
                    <p class="card-text">Dernier projet : </p>
                    <p class="card-text">Ajouté le xxx à xxx</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection