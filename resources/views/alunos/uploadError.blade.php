@extends('layouts.app')

@section('header')

<li ><a href="{{ url ('aluno') }}">Voltar </a></li>
<li><a href="{{ url ('/logout') }}">Sair </a></li>

@endsection

@section('content')
<?php
echo "<pre>File is not an java file or</pre>";

echo "<pre>Sorry, file already exists or</pre>";

echo "<pre>Sorry, your file is too large or</pre>";

echo "<pre>Sorry, only java files are allowed or</pre>";

  echo "<pre>Sorry, your file was not uploaded or</pre>";

    echo "<pre>Sorry, there was an error uploading your file.</pre>";

?>
@endsection
