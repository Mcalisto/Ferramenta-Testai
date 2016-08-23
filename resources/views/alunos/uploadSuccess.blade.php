@extends('layouts.app')


@section('header')

<li ><a href="{{ url ('aluno') }}">Voltar </a></li>
<li><a href="{{ url ('/logout') }}">Sair </a></li>

@endsection

@section('content')

 <div class="container">
     <div class="row">
         <div class=" ">
             <div class="panel panel-success">
                 <div class="panel-heading"><h1>
                   <?php echo  "Arquivo ". basename( $_FILES["file"]["name"]). " salvo com sucesso!.";?>
                     
             </div>
         </div>
     </div>
 </div>
@endsection
