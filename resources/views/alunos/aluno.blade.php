@extends('layouts.app')

@section('header')

<li class="active"><a href="{{ url ('/aluno') }}">Pagina Inicial </a></li>
<li><a href="{{ url ('alunos/uploads') }}">Upload </a></li>
<li><a href="{{ url ('/aluno_notas') }}">Ver Comentários </a></li>
<li><a href="{{ url ('/logout') }}">Sair </a></li>



@stop

@section('content')
<div class="container">
    <div class="row">
        <div class=" ">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-info">Pagina Inicial</h2></div>

                <div class="panel-body">
                  @if( Auth::check() )
                  <h2 class="text-success"> Bem vindo {{ Auth::user()->name}} !</h2>
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
