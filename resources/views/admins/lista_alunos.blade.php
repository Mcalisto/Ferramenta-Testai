@extends('admins.admin_base')

@section('headerside')
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <li >
            <a href="{{url ('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="active">
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
        <li>
        <a href="{{url ('atividades')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Painel de Atividades</a>
        </li>


@endsection

@section('content')

<table class="table table-striped table-hover">
      <tr>
        <th></th>
        <th>Aluno</th>
        <th>Nome de Usuário</th>
        <th>Email</th>

      </tr>
      @foreach ($users as $user)
        <tr height="30">
          <td><i class="fa fa-2x fa-user"></i></td>
          <td>{{$user->name}}</td>
          <td>{{$user->username}}</td>
          <td>{{$user->email}}</td>
          <td ></td>
        </tr>
      @endforeach
    </table>

    <a type="button" class="button btn btn-default" data-toggle="modal" data-target="#addNota">
      Adicionar Comentários
    </a>

  <!-- Modal -->
  <div class="modal fade" id="addNota" tabindex="-1" role="dialog" aria-labelledby="addNotatLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="addNotaLabel">Adicionar Comentários</h4>
        </div>
        <div class="modal-body">
          <form class="form" action="{{url('add_notas')}}" method="post">
                  {{ csrf_field() }}


                  <div class="form-group">
                    <label for="name"> Nome do Aluno:</label>

                    <select class="form-control" id="name" name="name" placeholder="Nome" required>
                      @foreach ($users as $user)
                        <option>{{$user->name}}</option>
                        @endforeach
                    </select>

                  </div>

            <div class="form-group">
                <label for="name"> Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
            </div>


            <div class="form-group">
              <label for="name">Comentários:</label>
              <input type="text" class="form-control" id="nota" name="nota" placeholder="Nota" required>
            </div>


            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>

          </form>
        </div>
      </div>
    </div>
  </div><!--./modal -->
@endsection
