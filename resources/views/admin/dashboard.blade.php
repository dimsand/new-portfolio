@extends('layouts.admin')

@section('title')
    Tableau de bord
@endsection

@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="dashboard">

        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h2>Tableau de bord
                        <small></small>
                    </h2>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                        <li class="pull-right">
                            <div id="reportrange" class="btn btn-green btn-square date-picker">
                                <i class="fa fa-calendar"></i>
                                <span class="date-range">February 15, 2017 - March 16, 2017</span> <i
                                        class="fa fa-caret-down"></i>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-users fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Users
                        </div>
                        <div class="circle-tile-number text-faded">
                            265
                            <span id="sparklineA"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading green">
                            <i class="fa fa-money fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            Revenue
                        </div>
                        <div class="circle-tile-number text-faded">
                            $32,384
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading orange">
                            <i class="fa fa-bell fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">
                            Alerts
                        </div>
                        <div class="circle-tile-number text-faded">
                            9 New
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading blue">
                            <i class="fa fa-tasks fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded">
                            Tasks
                        </div>
                        <div class="circle-tile-number text-faded">
                            10
                            <span id="sparklineB"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading red">
                            <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded">
                            Orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            24
                            <span id="sparklineC"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading purple">
                            <i class="fa fa-comments fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Mentions
                        </div>
                        <div class="circle-tile-number text-faded">
                            96
                            <span id="sparklineD"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tile tile-img tile-time morning" style="height: 200px">
                    <p class="time-widget">
                        <span class="time-widget-heading">It Is Currently</span>
                        <br>
                        <strong><span id="datetime">Friday<br>March 17th, 2017<br>12:43:17 PM</span></strong>
                    </p>
                </div>
            </div>
        </div>

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
    </section>
@endsection