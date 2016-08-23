<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use App\File;
use App\Atividades;

class FilesController extends Controller
{
  public function uploadFile(){

    $dir = Input::get('dirName');

    $target_dir = "JavaFiles/$dir/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $target_file1 = basename($_FILES["file"]["name"], ".class");
    $uploadOk = 1;
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $name = Auth::user()->username;
    $data = Carbon::now();
    DB::table('files')->insertGetId(['user_name' => $name, 'file' => $target_file1, 'updated_at' => $data]);
    // Check if image file is a actual image or fake image
    if(isset($_POST["btn-upload"])) {

        $check = pathinfo($_FILES["file"]["tmp_name"]);
        if($check !== false) {

            $uploadOk = 1;
        } else {
            return view('alunos.uploadError');
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {

        return view('alunos.uploadError');
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {

        return view('alunos.uploadError');
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($FileType != ("class" || "java")) {

        return view('alunos.uploadError');
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {

        return view('alunos.uploadError');
    // if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {


        } else {

            return view('alunos.uploadError');
        }
    }
      return view('alunos/uploadSuccess');
  }

  public function deleteFile(){


    $name = Input::get('username');
    $file = Input::get('fileName');
    DB::table('files')->where('file', '=', $file)->where('user_name', '=', $name)->delete();

    $files = File::all();
    $users = User::where('type', '!=', 1)->get();



    return view('admins.uploads_folder', ['files'=> $files, 'users' => $users]);


  }
  public function deleteAtividade(){


    $name = Input::get('nome');
    //$file = Input::get('fileName');
    DB::table('activities')->where('name', '=', $name)->delete();

    $atividades = Atividades::all();
    //$users = User::where('tipo', '!=', 1)->get();



    return view('admins.atividades', ['atividades'=> $atividades]);


  }

}
