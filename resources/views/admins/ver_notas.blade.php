@extends('admins.admin_base')

@section('headerside')
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <li >
            <a href="{{url ('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li >
            <a href="{{url ('lista_alunos')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Lista de Alunos</a>
        </li>
        <li>
            <a href="{{url ('evosuiteForm')}}"><i class="fa fa-fw fa-table"></i> Evosuite</a>
        </li>
        <li >
            <a href="{{url ('uploads_folder')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Arquivos Java</a>
        </li>
        <li class="active">
        <a href="{{url ('ver_notas')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Comentários</a>
        </li>
        <li>
        <a href="{{url ('verFolders')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Diretórios</a>
        </li>
        <li>
        <a href="{{url ('atividades')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Painel de Atividades</a>
        </li>


@endsection

@section('content')

<table class="table table-striped table-hover">
      <tr>
        <th></th>
        <th>Nome de Usuário</th>
        <th>Titulo</th>
        <th>Conteúdo</th>
        <th>Data</th>

      </tr>
      @foreach ($notas as $nota)
        <tr height="30">
          <td><i class="fa fa-2x fa-comment"></i></td>
          <td>{{$nota->user_name}}</td>
          <td>{{$nota->title}}</td>
          <td>{{$nota->body}}</td>
          <td>{{$nota->created_at}}</td>

        </tr>
      @endforeach
    </table>



@endsection
