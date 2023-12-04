@extends('layouts.main')

@section('title', 'Migrations')

@section('content')

<style>
    th{color:#bac7b7;}
    td{color:#ffc373;}
</style>

    <div class="container" style="margin-top:40px;">
        
    @include('dev.laravel-title')

    <table class="table table-bordered" style="color:white; background-color:#252a37;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%">functions</th>
          <th scope="col" style="color:#c28ae5 !important;">comandos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Instalar Migrations</th>
          <td>php artisan migrate:install</td>
        </tr>
        <tr>
          <th scope="row">Fazer/Subir migrações</th>
          <td>php artisan migrate</td>
        </tr>
        <tr>
          <th scope="row">Criar migrations</th>
          <td colspan="2">php artisan make:migration create_nome_tabela</td>
        </tr>
        <tr>
          <th scope="row">Voltar última ação</th>
          <td colspan="2">php artisan migrate:rollback || php artisan migrate:rollback --step=5</td>
        <tr>
          <th scope="row">Nova Coluna</th>
          <td colspan="2">php artisan make:migration ADD_nomecoluna_TO_table_anime_table</td>
        </tr>
        <tr>
          <th scope="row">Status</th>
          <td colspan="2">php artisan migrate:status</td>
        </tr>
        <tr>
          <th scope="row">Apagando as migration tudo e subindo novamente</th>
          <td colspan="2">php artisan migrate:fresh</td>
        </tr>
      </tbody>
    </table>
        
    </div>
@endsection