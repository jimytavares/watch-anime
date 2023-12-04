@extends('layouts.main')

@section('title', 'Apache 2')

@section('content')

<style>
    th{color:#bac7b7;}
    td{color:#a9c276;}
</style>

    <div class="container" style="margin-top:40px;">
        
    <div class="">
        <img src="{{ URL::asset('img/linux/apache2.png') }}" style="width:300px"; />    
    </div>

    <table class="table table-bordered" style="color:white; background-color:#252a37;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%">SERVER COMMANDS</th>
          <th scope="col" style="color:#c28ae5 !important;">comandos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Inicia o apache no server</th>
          <td>sudo systemctl start apache2</td>
        </tr>
        <tr>
          <th scope="row">Restartar o apache no servidor</th>
          <td>sudo systemctl restart apache2 || sudo service apache2 restart</td>
        </tr>
        <tr>
          <th scope="row">Recarrega sem precisar encerrar o apache no servidor</th>
          <td colspan="2">sudo systemctl reload apache2</td>
        </tr>
        <tr>
          <th scope="row">Vê os Status do apache se ta funcionando ou não</th>
          <td colspan="2">sudo systemctl status apache2</td>
        <tr>
          <th scope="row">Verifica a Versão do apache</th>
          <td colspan="2">apache2 -v</td>
        </tr>
      </tbody>
    </table>
        
        <table class="table table-bordered" style="color:white; background-color:#252a37; margin-top:30px;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%">CREATE SITE</th>
          <th scope="col" style="color:#c28ae5 !important;">implementações no servidor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Ativa um site depois de configurar um arquivo.conf na pasta sites-available</th>
          <td>sudo a2ensite nome_do_arquivo.conf</td>
        </tr>
        <tr>
          <th scope="row">Desativa um site depois de configurar um arquivo.conf na pasta sites-available</th>
          <td>sudo a2dissite nome_do_arquivo.conf</td>
        </tr>
      </tbody>
    </table>

    </div>
@endsection