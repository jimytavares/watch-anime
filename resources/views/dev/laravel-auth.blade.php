@extends('layouts.main')

@section('title', 'Auth')

@section('content')

<style>
    th{color:#bac7b7;}
    td{color:#a9c276;}
</style>

    <div class="container" style="margin-top:40px;">
        
    @include('dev.laravel-title')

        <table class="table table-bordered" style="color:white; background-color:#252a37; margin-top:25px;">
      <thead>
        <tr>
          <th scope="col" style="color:#c28ae5 !important; width:15%"></th>
          <th scope="col" style="color:#c28ae5 !important;">Ações para criação de group específico para permissões de acesso as paginas nas rotas</th>
          <th scope="col" style="color:#c28ae5 !important;">Caminho</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Criar uma Middleware Admin para realizar as ações de check+auth+user+isAdmin</th>
          <td>php artisan make:middleware AdminMiddleware</td>
          <td>app/middleware/AdminMiddleare</td>
        </tr>
        <tr>
          <th scope="row">Criar função dentro do AdminMiddleware para verificação</th>
          <td>public function handle($request, Closure $next){<br/>
                if (auth()->check() && auth()->user()->isAdmin()) {<br/>
                    return $next($request);<br/>
                }<br/>
                abort(403, 'Unauthorized action.');<br/>
                }<br/>
            </td>
            <td>app/middleware/AdminMiddleare</td>
        </tr>
        <tr>
            <th scope="row">Dentro da Model User criar uma função 'isAdmin' para definição do nivel. Onde cargo = a coluna desejada e admin = nivel do usuario definido por você</th>
            <td>
              public function isAdmin(){<br/>
                    return $this->cargo === 'admin';<br/>
                }
            </td>
            <td>app/model/User</td>
        </tr>
        <tr>
            <th scope="row">Criar um novo protect dentro de 'app/Http/Kernel.php' referenciando 'AdminMiddleware' criado</th>
            <td>protected $routeMiddleware = [<br/>
                'admin' => \App\Http\Middleware\AdminMiddleware::class,<br/>
              ];
            </td>
            <td>app/Http/Kernel.php</td>
        </tr>
        <tr>
          <th scope="row">Definição do grupo 'Admin' criado no group web.php</th>
          <td>
            Route::middleware(['auth', 'admin'])->group(function () {<br/>
                *coloca as rotas aqui dentro<br/>
            });
          </td>
            <td>web.php</td>
      </tbody>
    </table>

    </div>
@endsection