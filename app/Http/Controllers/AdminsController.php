<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\File;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;
use View;
use App\Notes;
use App\Atividades;

class AdminsController extends Controller
{
    public function adminIndex(){

      $users = User::where('type', '!=', 1)->get();
      $files = File::all();
      $atividades = Atividades::all();


      return view('admins/admin', ['users'=> $users, 'files'=> $files, 'atividades' => $atividades]);
    }

    public function criarDiretorio(){

      $dir = Input::get('diretorio');
      mkdir("JavaFiles/$dir", 0777);
      $descricao = Input::get('descricao');
      $data = Carbon::now();
      DB::table('activities')->insertGetID(['name' => $dir, 'description' => $descricao, 'created_at' => $data]);

      $atividades = Atividades::all();
      return view('admins.atividades', ['atividades' => $atividades]);

    }

    public function verFolders(){

      $atividades = Atividades::all();
      return view('admins.folders', ['atividades' => $atividades]);
    }

    public function verAtividades(){
      $atividades = Atividades::all();

      return view('admins.atividades', ['atividades' => $atividades]);
    }

    public function evoSuite(){

      $arquivo = Input::get('arquivo');
      $username = Input::get('username');
      $dir = Input::get('dirName');

      //$arquivo = ('/home/teste/TCC1-25-27-v1.0/public/JavaFiles/');
      $projectCP = ('/home/marcus/TCC1-25-27-v2.0-final/public/JavaFiles/');
      $a = shell_exec("java -jar evosuite-1.0.3.jar -class $dir.$arquivo  -projectCP $projectCP ");


      if(strstr($a, 'Done') == true) {
        //echo 'Teste completado com sucesso';
        DB::table('files')->where('file', '=', $arquivo)->where('user_name', '=', $username)->update(array('testado' => 'OK'));
        $files = File::all();
        $users = User::where('type', '!=', 1)->get();
        return view('admins.uploads_folder', ['files'=> $files, 'users'=> $users]);


      }else {
        return 'Deu B2';
      }



  }

  public function lista(){
    $users = User::where('type', '!=', 1)->get();
    return view('admins.lista_alunos', ['users'=> $users]);
  }
  public function listaArquivos(){

    $files = File::all();
    $users = User::where('type', '!=', 1)->get();
    return view('admins.uploads_folder', ['files'=> $files, 'users'=> $users]);

  }

  public function evoSuiteForm(){

    $files= File::all();
    $users = User::where('type', '!=', 1)->get();
    $atividades = Atividades::all();

    return view('admins.evosuiteForm', ['files' => $files, 'users'=> $users, 'atividades' => $atividades]);

  }


  public function addNotas(){

    $user = Input::get('name');
    $nota = Input::get('nota');
    $titulo = Input::get('titulo');
    $data = Carbon::now();
    //DB::table('notas')->('name',$user)->update(['created_at' => $data,  'notas' => $nota]);
    DB::table('notes')->insertGetID(['user_name' => $user, 'body' => $nota, 'title' => $titulo, 'created_at' => $data]);
    $users = User::where('tipo', '!=', 1)->get();


    return view('admins.lista_alunos', ['users'=> $users]);
  }

  public function verNotas(){

    //DB::table('notas')->insertGetID(['user_name' => $user, 'body' => $nota, 'title' => $titulo, 'created_at' => $data]);
    $notas = Notes::all();
    return view('admins.ver_notas', ['notas'=> $notas]);


  }
  public function folders(){

    $dir = Input::get('dirName');
   //$files1 = scandir($dir, 0);


    return view('admins.folders', ['dirName' => $dir]);
}
}
