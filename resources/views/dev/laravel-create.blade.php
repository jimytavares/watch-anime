@extends('layouts.main')

@section('title', 'Eloquent ORM')

@section('content')

<style>
    th{color:#bac7b7;}
    td{color:#ffc373; letter-spacing: 1PX;}
</style>

    <div class="container" style="margin-top:40px;">
        
        @include('dev.laravel-title')

        <table class="table table-bordered" style="color:white; background-color:#252a37;">
          <thead>
            <tr>
              <th scope="col" style="color:#c28ae5 !important; width:15%">CREATE PROJECT</th>
              <th scope="col" style="color:#c28ae5 !important;">Criando projeto Laravel/Laravel com Breeze (estrutura pronta e personalizável para login, incluindo cadastro de usuário e recuperação de senha.)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1º</th>
              <td colspan="2">composer create-project laravel/laravel nome_do_seu_projeto</td>
            </tr>
            <tr>
              <th scope="row">2º</th>
              <td colspan="2">composer require laravel/breeze --dev</td>
            </tr>
            <tr>
              <th scope="row">3º</th>
              <td colspan="2">php artisan breeze:install </td>
            </tr>
            <tr>
              <th scope="row">4º</th>
              <td colspan="2">Site para instalar o Node.JS pra usar o "npm" no cmd: https://nodejs.org/en</td>
            </tr>
            <tr>
              <th scope="row">5º</th>
              <td colspan="2">npm install</td>
            </tr>
            <tr>
              <th scope="row">6º</th>
              <td colspan="2">npm run dev</td>
            </tr>
          </tbody>
        </table>
        
        <table class="table table-bordered" style="color:white; background-color:#252a37;">
          <thead>
            <tr>
              <th scope="col" style="color:#c28ae5 !important; width:15%">ERRO's</th>
              <th scope="col" style="color:#c28ae5 !important;">Criando projeto Laravel/Laravel com Breeze (estrutura pronta e personalizável para login, incluindo cadastro de usuário e recuperação de senha.)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">ERRO: composer update</th>
              <td colspan="2">ERRO: "Failed to download laravel/laravel from dist: The zip extension and unzip/7z commands are both missing, skipping. The php.ini used by your command-line PHP is: C:\xampp\php\php.ini Now trying to download from source"
                  <br/>SOLUCAO: va em C:\xampp\php\php.ini procure por extension=zip e extension=unzip para tirar o ; antes de cada um</td>
            </tr>
          </tbody>
        </table>
        
    </div>
@endsection