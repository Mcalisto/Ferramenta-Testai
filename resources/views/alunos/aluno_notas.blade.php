@extends('layouts.app')

@section('header')
<li ><a href="{{ url ('/aluno') }}">Pagina Inicial </a></li>
<li><a href="{{ url ('alunos/uploads') }}">Upload </a></li>
<li class="active"><a href="{{ url ('/aluno_notas') }}">Ver Comentários </a></li>
<li><a href="{{ url ('/logout') }}">Sair </a></li>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class=" ">
            <div class="panel panel-warning">
                <div class="panel-heading">
                  @if( Auth::check() )
                  <h2 class="text-success"> {{ Auth::user()->name}}</h2>
                  @endif

                </div>
                <div class="panel-body">
                <table class="table table-striped table-hover">
                      <tr>
                        <th></th>
                        <th class="text-primary" style="text-align:center;">Aluno</th>
                        <th class="text-primary" style="text-align:center;">Titulo</th>
                        <th class="text-primary" style="text-align:center;"> Comentários</th>

                      </tr>
                      @foreach ($notas as $nota)
                        <tr height="30">
                          <td ><i class="fa fa-2x fa-user"></i></td>
                          <td class="text-warning">{{$nota->user_name}}</td>
                          <td class="text-warning">{{$nota->title}}</td>
                          <td class="text-warning">{{$nota->body}}</td>
                          <td ></td>
                        </tr>
                      @endforeach
                    </table>

            </div>
        </div>
    </div>
</div>

@endsection
