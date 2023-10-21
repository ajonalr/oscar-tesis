@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">TOTAL DE PROFESORES</h4>
                    <p class="card-text"># {{$profesor}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">TOTAL DE GRADOS</h4>
                    <p class="card-text"># {{$grados}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">TOTAL DE ESTUDIANTES</h4>
                    <p class="card-text"># {{$estudiante}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">TOTAL PADRES</h4>
                    <p class="card-text"># {{$padres}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <img src="{{asset('logos/logo.png')}}" alt="" srcset="">
        </div>
    </div>
</div>
@endsection