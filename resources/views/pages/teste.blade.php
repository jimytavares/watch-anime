@php
    echo url()->previous();
@endphp
<br/>
{{ $usuario }}
<br/>
{{ $id_user_sse }}
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class SeuControlador extends Controller {
    private $suaVariavel;

    public function __construct() {
        // Pegar o valor da sessão no construtor
        $this->suaVariavel = Session::get('suaVariavel');
    }

    public function algumaFuncao() {
        // Agora você pode acessar $this->suaVariavel em qualquer função do controlador
        // Faça algo com $this->suaVariavel
    }
}


class SeuControlador extends Controller {
    private $suaVariavel;

    public function __construct() {
        // Inicializar a variável no construtor se necessário
        $this->suaVariavel = 'valor inicial';
    }

    public function funcao1() {
        // Acessar $this->suaVariavel
    }

    public function funcao2() {
        // Acessar $this->suaVariavel
    }
}
<p>next</p>
<br/>
<p><b>users::find(1):</b> {{$teste1}}</p>
<p><b>users::where('id', 5)->first():</b> {{$teste2}}</p>
<p><b>users::firstWhere('id', 5):</b> {{$teste3}}</p>
<p><b>t:</b> {{$exp_user}}</p>

@if($exp_user >= 22.00)
 <p>certo</p>
@else
<p>errado</p>
@endif

<br/>

@php
    echo asset('storage/text.txt')
@endphp

<img src="{{URL::asset('storage/text.txt')}}" target="_blank">
<img src="{{URL::asset('storage/imgs/foto_1703118031.jpg')}}" target="_blank">