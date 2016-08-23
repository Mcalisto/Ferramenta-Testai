@extends('layouts.app')

@section('header')

<li><a href="{{ url ('/aluno') }}">Pagina Inicial </a></li>
<li class="active"><a href="{{ url ('alunos/uploads') }}">Upload </a></li>
<li ><a href="{{ url ('/aluno_notas') }}">Ver Comentários </a></li>
<li><a href="{{ url ('/logout') }}">Sair </a></li>



@stop


@section('content')


<div class="upload">
      <form id="upload" action="{{ url('/uploadFile') }}" method="post" enctype="multipart/form-data">
        <select class="btn btn-info" name="dirName" id="dirName">
        @foreach ($atividades as $atividade)
        <option>{{$atividade->nome}}</option>
        @endforeach
        </select>

      </br></br>

      <input type="file" name="file" id="file" class="btn btn-warning btn-lg center-block" required>
      </br><input type="submit"  class="btn-info btn-lg "></br>
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      </form>
</div>




@endsection
