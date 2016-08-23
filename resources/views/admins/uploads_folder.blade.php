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
        <li class="active">
            <a href="{{url ('uploads_folder')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Arquivos Java</a>
        </li>
        <li>
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
        <th>Nome Do Arquivo</th>
        <th>Data</th>
        <th>Situação</th>

      </tr>
      @foreach ($files as $file)
        <tr height="30">
          <td><i class="fa fa-2x fa-user"></i></td>
          <td>{{$file->user_name}}</td>
          <td>{{$file->file}}</td>
          <td>{{$file->updated_at}}</td>
          <td>{{$file->tested}}</td>

        </tr>
      @endforeach
    </table>

    <a type="button" class="button btn btn-default" data-toggle="modal" data-target="#DeleteFile">
      Deletar Arquivo
    </a>


    <!-- Modal -->
    <div class="modal fade" id="DeleteFile" tabindex="-1" role="dialog" aria-labelledby="DeleteFileLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="DeleteFileLabel">Deletar Arquivo</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="{{url('deleteFile')}}" method="post">
                    {{ csrf_field() }}


                    <div class="form-group">
                      <label for="name"> Nome do Aluno:</label>

                      <select class="form-control" id="username" name="username" placeholder="Nome" required>
                        @foreach ($users as $user)
                          <option>{{$user->username}}</option>
                          @endforeach
                      </select>

                    </div>

                    <div class="form-group">
                      <label for="name">Nome do Arquivo:</label>

                      <select class="form-control" id="fileName" name="fileName" placeholder="Arquivo" required>
                        @foreach ($files as $file)
                          <option>{{$file->file}}</option>
                          @endforeach
                      </select>

                    </div>


              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Deletar</button>

            </form>
          </div>
        </div>
      </div>
    </div><!--./modal -->
@endsection
