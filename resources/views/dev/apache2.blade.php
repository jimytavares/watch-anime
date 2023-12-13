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
          <th scope="col" style="color:#c28ae5 !important; width:15%">função</th>
          <th scope="col" style="color:#c28ae5 !important;">Comandos Rotina Servidor Apache2</th>
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
          <th scope="col" style="color:#c28ae5 !important; width:15%">função</th>
          <th scope="col" style="color:#c28ae5 !important;">Implementações Web no servidor</th>
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
        
    <table class="table table-bordered" style="color:white; background-color:#252a37; margin-top:30px;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%">função</th>
          <th scope="col" style="color:#c28ae5 !important;">Gerar chave SSH - liberação servidor para github</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Gerar senha:</th>
          <td>ssh-keygen -t ed25519 -C "seuEmail"</td>
        </tr>
        <tr>
          <th scope="row">ele vai perguntar se vc deseja armazerar a chave ssh em "/root/.ssh/id_ed25519"</th>
          <td>ENTER</td>
        </tr>
        <tr>
          <th scope="row">Escolher uma senha</th>
          <td>"digitar/criar uma senha"</td>
        </tr>
        <tr>
          <th scope="row">comando para visualizar senha: </th>
          <td>eval "$(ssh0agent -s)"</td>
        </tr>
          <tr>
          <th scope="row">ENTER</th>
          <td>ssh-add ~/.ssh/</td>
        </tr>
          <tr>
          <th scope="row">Inserir a chave de acesso que fica dentro da pasta que foi criada a chave</th>
          <td>ssh-add ~/.ssh/id_0000</td>
        </tr>
      </tbody>
    </table>

    </div>
@endsection