@extends('admins.admin_base')

@section('headerside')
<li class="active">
    <a href="{{url ('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
</li>
<li>
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
<a href="{{url ('folders')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Diretórios</a>
</li>
<li>
<a href="{{url ('atividades')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Painel de Atividades</a>
</li>

@endsection


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Painel de Controle <small>Dados Gerais</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard




                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>
    <!-- /.row -->




    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Painel de Tarefas</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">

                          @foreach ($atividades as $atividade)
  <a href="{{url ('atividades')}}" class="list-group-item">
                          <tr>
                            <div class="list-group">
                            <td>{{$atividade->nome}}</td>
                              </div>
                          </tr>
</a>
                          @endforeach




                    </div>
                    <a type="button" class="button btn btn-default" data-toggle="modal" data-target="#addAtv">
                      Adicionar Atividade
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Painel de Alunos</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Alunos</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                  <td>{{$user->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Lista de Envios</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Arquivos</th>
                                    <th>Data</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                <tr>
                                  <td>{{$file->file}}</td>
                                  <td>{{$file->updated_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

<!-- Modal de ADD ATIVIDADE-->
<div class="modal fade" id="addAtv" tabindex="-1" role="dialog" aria-labelledby="addAtv">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addAtv">Adicionar Atividade</h4>
      </div>
      <div class="modal-body">
        <form class="form" action="{{url('criarDiretorio')}}" method="post">
                {{ csrf_field() }}


                <div class="form-group">
                  <label for="name"> Nome da Atividade:</label>


                  <input type="text" class="form-control" id="diretorio" name="diretorio" placeholder="Titulo" required>


                </div>

          <div class="form-group">
              <label for="name"> Descrição:</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Titulo" required>
          </div>


          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Criar</button>

        </form>
      </div>
    </div>
  </div>
</div><!--./modal -->
@endsection
