@extends('layouts.master')
@section('title')
    RHResolve - Inicial
@endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <!-- page content -->
    <div class="">
        <div id="Slide1">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="container" style="margin-left:95%; ">
                    <!-- Indicators -->
                    <ol id="indicadores" class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active" id="indica"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" id="indica"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" id="indica"></li>
                    </ol>
                </div>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="img/fundos/01.jpg" alt="Slider Image">
                        <div class="container">
                            <div class="carousel-centered">

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/fundos/02.jpg" alt="Slider Image">
                        <div class="container">
                            <div class="carousel-centered">

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="img/fundos/03.jpg" alt="Slider Image">
                        <div class="container">
                            <div class="carousel-centered">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- page content -->
@endsection
@section('js')
    <script>
    </script>
@endsection
