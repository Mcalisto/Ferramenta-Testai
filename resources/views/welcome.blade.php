@extends('layouts.app')

@section('header')

<li class="active"><a href="/home">Home</a></li>
<li><a href="{{ url ('/login') }}">Login</a></li>
<li><a href="{{ url ('/register') }}">Registrar</a></li>
<li><a href="{{ url ('loginAdmin') }}">Admin Login</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-8 col-md-offset-2 ">
            <div class="panel panel-warning">
                <div class="panel-heading"><h2 class="text-info">Pagina Inicial</h2></div>

                <div class="panel-body">
                    <h2 class="text-success">Bem Vindo </h2>
                </div>


            </div>

            <div class="inner cover">

              <h1 class="cover-heading">Teste sua aplicação</h1>

              <p class="lead">Trabalho de Conlusão de Curso</p>

            </div>
        </div>
    </div>
</div>

@endsection
