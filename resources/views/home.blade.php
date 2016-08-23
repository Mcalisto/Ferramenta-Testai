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
        <div class=" ">
            <div class="panel panel-info">
                <div class="panel-heading"><h1>Pagina Inicial</h2></div>

                <div class="panel-body">
                    <h2>Bem Vindo!</h2>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
