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
          <th scope="col" style="color:#c28ae5 !important; width:15%">functions</th>
          <th scope="col" style="color:#c28ae5 !important;">comandos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Select todos os registros</th>
          <td>$variavel = User::all();</td>
        </tr>
        <tr>
          <th scope="row">Select registro específico</th>
          <td>$variavel = User::findOrFail($id);<br/>
                $variavel = users::find(5);<br/>
        </td>
        </tr>
        <tr>
          <th scope="row">Select WHERE + unico registro + PRIMEIRO</th>
          <td>$variavel = users::where('id', 5)->first(); <br/> $variavel = users::firstWhere('id', 5);</td>
        </tr>
        <tr>
          <th scope="row">Select WHERE</th>
          <td colspan="2">$variavel = User::where('votes', '>', 100)->firstOrFail(); <br/> $variavel = User::where('product_line_id', 1)->get(); <br/> $variavel = User::where('product_line_id', 1)->orderBy('product_line_id','description')->take(10)->get();</td>
        </tr>
        <tr>
          <th scope="row">condition COUNT</th>
          <td colspan="2">$variavel = product::where('product_line_id', 1)->count();</td>
        <tr>
          <th scope="row">Executa uma query retornando a SOMA DE TODOS os preços do resultado da busca</th>
          <td colspan="2">$variavel = product::where('product_line_id', 1)->sum('price');</td>
        </tr>
        <tr>
          <th scope="row">Executa uma query que retorna a MÉDIA DE PREÇO do resultado da busca</th>
          <td colspan="2">$variavel = product::where('product_line_id', 1)->avg('price');</td>
        </tr>
        <tr>
          <th scope="row">Executa uma query que retorna o maior preço encontrado na busca</th>
          <td colspan="2">$variavel = product::where('product_line_id', 1)->max('price');</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td colspan="2"></td>
        </tr>
      </tbody>
    </table>
        
    <table class="table table-bordered" style="color:white; background-color:#252a37; margin-top:40px;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%">Here</th>
          <th scope="col" style="color:#c28ae5 !important;">Explanation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Request $Request</th>
          <td>Pega todos os dados que vem da requisição HTTP de outra página <br/> $variavel = $request->all();</td>
        </tr>
        <tr>
          <th scope="row">Action - Request $Request</th>
          <td colspan="2">table_assistindo::findOrFail($request->id)->algumaAção($request->all()); <br/> increment, decrement, update</td>
        </tr>
      </tbody>
    </table>
        
    </div>
@endsection