<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\File;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;
use View;
use App\Notes;
use Auth;
use App\Atividades;

class AlunosController extends Controller
{
  public function upload(){
    $atividades = Atividades::all();
    return view('alunos/uploads', ['atividades' => $atividades]);


  }

  public function aluno(){



    return view('alunos/aluno');
  }

  public function showNotas(){


    $users = Auth::user()->name;
    $notas = Notes::where('user_name', '=', $users)->get();

    //$users = User::where('tipo', '!=', 1)->get();

    return view('alunos/aluno_notas',['users'=> $users, 'notas' => $notas]);
  }




}
