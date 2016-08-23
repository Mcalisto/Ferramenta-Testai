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
        <li>
        <a href="{{url ('uploads_folder')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Arquivos Java</a>
        </li>
        <li>
        <a href="{{url ('ver_notas')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Comentários</a>
        </li>
        <li>
        <a href="{{url ('verFolders')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Diretórios</a>
        </li>
        <li class="active">
        <a href="{{url ('atividades')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Painel de Atividades</a>
        </li>


@endsection

@section('content')

<table class="table table-striped table-hover">
      <tr>
        <th></th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Data de Criação</th>

      </tr>
      @foreach ($atividades as $atividade)
        <tr height="30">
          <td><i class="fa fa-2x fa-user"></i></td>
          <td>{{$atividade->nome}}</td>
          <td>{{$atividade->description}}</td>
          <td>{{$atividade->created_at}}</td>

          <td ></td>
        </tr>
      @endforeach
    </table>

    <a type="button" class="button btn btn-default" data-toggle="modal" data-target="#DeleteFile">
      Deletar Atividade
    </a>


    <!-- Modal -->
    <div class="modal fade" id="DeleteFile" tabindex="-1" role="dialog" aria-labelledby="DeleteFileLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="DeleteFileLabel">Deletar Atividade</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="{{url('deleteAtividade')}}" method="post">
                    {{ csrf_field() }}


                    <div class="form-group">
                      <label for="nome"> Nome da Atividade:</label>

                      <select class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        @foreach ($atividades as $atividade)
                          <option>{{$atividade->nome}}</option>
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
