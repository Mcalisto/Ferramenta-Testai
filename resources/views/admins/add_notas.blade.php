@extends('admins.admin_base')

@section('headerside')
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <li >
            <a href="{{url ('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="active">
            <a href="{{url ('lista_alunos')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Lista de Alunos</a>
        </li>
        <li >
            <a href="{{url ('evosuiteForm')}}"><i class="fa fa-fw fa-table"></i> Evosuite</a>
        </li>
        <li>
        <a href="{{url ('uploads_folder')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Arquivos Java</a>
        </li>
        <li>
        <a href="{{url ('ver_notas')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Comentários</a>
        </li>
        <li>
        <a href="{{url ('folders')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Ver Direterios</a>
        </li>
        <li>
        <a href="{{url ('atividades')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Painel de Atividades</a>
        </li>


@endsection

@section('content')






@endsection
