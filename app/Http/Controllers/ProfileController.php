<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\table_anime;
use App\Models\table_assistindo;
use App\Models\table_ranking;
use App\Models\table_continua;
use App\Models\AnimesParados;
use App\Models\users;

class ProfileController extends Controller
{
    private $id_user2;
    private $idUserSs;
    
    /* Display the user's profile form */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /*  Update the user's profile information */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /* Delete the user's account */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    public function __construct(){
        
        $this->id_user2 = 'teste construct';
        
        /* ve porque ta retornando 0 na tela form_assistindo 
        $this->idUserSs = Auth::id() ?? Session::get('user_id');*/
        /*if (Auth::check()) {
        $this->idUserSs = Auth::id();
        } else {
            $this->idUserSs = Session::get('user_id', 0);
        }*/
        
    }
    
    public function index() {
        
        return view('welcome');
    }
    
    public function teste(){
        
        /* Recuperando todos os valores em array ad sessao */
        $usuario = auth()->user();
        $id_user_sse = $usuario->id;
        
        // Retrieve a model by its primary key...
        $teste1 = users::find(5);

        // Retrieve the first model matching the query constraints...
        $teste2 = users::where('id', 5)->first();

        // Alternative to retrieving the first model matching the query constraints...
        $teste3 = users::firstWhere('id', 5);
        
        return view('pages.teste', compact(["usuario", "id_user_sse", "teste1", "teste2", "teste3"]));
    }
    
    public function home(){
        
        /* Globals */
        $nome = "jimy";
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        $idade = "30";
        
        $buscar2 = request('search2');
        $dt = date('d/m/Y');
        $dataAtual = date('Y-m-d');
        
        $session_user = auth()->user();
        $id_user_sse = $session_user->id;
        
        /* Selects table */ 
        $table_animes = table_anime::all();
        $table_continua = table_continua::with('nome_anime')->get();
        $table_parados = AnimesParados::with('nome_anime')->get();
        
        /* Section ranking anime*/
        $rankingAnime = table_anime::where('temporada', 'summer/julho')
            ->orderBy('nome', 'asc')
            ->take(4)
            ->get();
        $ranking10Anime = table_ranking::where('nota', 10)
            ->orderBy('episodio', 'desc')
            ->take(4)
            ->get();
        
        /* Filtrando id da sessao para colocar a exp do nivel do ususario */
        $session_user = auth()->user();
        $id_user_sse = $session_user->id;
        $nivel_usuario = users::where('id', $id_user_sse)->get();
        
        $busca = request('search');
        if($buscar2){
            $table_assistidos = table_assistindo::where([ ['dia_semana', 'like', '%'.$buscar2.'%'] ])->get();
        }else{
            $table_assistidos = table_assistindo::where('id_usuario', $id_user_sse)
                ->join('table_anime', 'table_anime.id', '=', 'table_assistindo.id_anime')
                ->orderBy('table_anime.data_semana')
                ->select('table_assistindo.*')
                ->with(['nome_anime' => function ($query) {$query->orderBy('data_semana');}])
                ->get();
        }
        
        return view('pages.home', compact(["nome", "idade", "table_assistidos", "buscar2", "table_continua", "dt", "table_parados", "table_animes", "busca", "dataAtual", "ranking10Anime", "rankingAnime", "id_user_sse", "nivel_usuario", "level_user", "exp_user"]));
    }
    
    public function formanime(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_usuario = users::where('id', $id_user_sse)->get();
        
        $DataAtual = date('Y');
        
        $table_animes = table_anime::all();
        
        return view('pages.form-dbanime', ["DataAtual" => $DataAtual, "table_animes" => $table_animes, "id_user_sse" => $id_user_sse, "level_user" => $level_user, "exp_usuario" => $exp_usuario]);
    }
    
    public function animeAdd(request $request){
        $dbanime = new table_anime;

        $dbanime->nome = $request->nome;
        $dbanime->estreia = $request->estreia;
        $dbanime->temporada = $request->temporada;
        $dbanime->episodio = $request->episodio;
        $dbanime->genero = $request->genero;

        $dbanime->save();
        return redirect('/');
    }
    
    public function formassistindo(){
        
        /* Globals */
        $nome = "jimy";
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        /* Consultas */
        $table_animes = table_anime::all();
        
        $teste2 = $this->id_user2;
        $teste3 = $this->idUserSs;
        /* outra forma de pegar o id do usuario na sessao
        $session_user = auth()->user();
        $id_user_sse = $session_user->id;*/
        
        return view('pages.form-assistindo', ["nome" => $nome, "table_animes" => $table_animes, "teste2" => $teste2, "teste3" => $teste3, "id_user_sse" => $id_user_sse, "level_user" => $level_user, "exp_user" => $exp_user]);
    }
    
    public function assistindoAdd(request $request){
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        $session_user = auth()->user();
        $id_user = $session_user->id;
        users::findOrFail($id_user)->increment('exp', 1);
        
        /* Cadastrando novo anime */
        $animewatch = new table_assistindo;
        
        $animewatch->id_anime = $request->id_anime;
        $animewatch->episodio = $request->episodio;
        $animewatch->dia_semana = $request->dia_semana;
        
        $animewatch->nota = $request->nota;
        $animewatch->descricao = $request->descricao;
        $animewatch->id_usuario = $request->id_usuario;
        $animewatch->link = $request->link;

        $animewatch->save();
        return redirect('/formassistindo');
    }
    
    /* Funções Table Anime Home */
    public function destroy_assistindo($id){
        
        table_assistindo::findOrFail($id)->delete();
        return redirect('/');
    }
    
    public function destroy_parados($id){
        
        AnimesParados::findOrFail($id)->delete();
        return redirect('/');
    }
    
    public function edit_assistindo($id){
        
        $nome = "jimy";
        $idade = "30";
        
        $table_assistidos = table_assistindo::findOrFail($id);
        return view('pages.edit-assistindo', ["nome" => $nome, "idade" => $idade, "table_assistidos" => $table_assistidos]);
    }
    
    public function update_assistindo(Request $request){
        
        $nome = "jimy";
        $idade = "30";
        
        table_assistindo::findOrFail($request->id)->update($request->all());
        return redirect('/');
    }
    
    public function plusanime($id_anime, $id_assist){
        
        /* Add +1 em episodio, quando assistido */
        table_assistindo::findOrFail($id_assist)->increment('episodio', 1);
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        $session_user = auth()->user();
        $id_user = $session_user->id;
        users::findOrFail($id_user)->increment('exp', 1);
        
        /* Adicionando +7 dias na coluna data_semana */
        $tb_anime = table_anime::findOrFail($id_anime);
        $dataAnime = $tb_anime->data_semana;
        $newData = Carbon::parse($dataAnime)->addDay(7);
        table_anime::where('id', $id_anime)->update(['data_semana' => $newData]);

        return redirect('/home')->with('error', 'Ocorreu um erro ao atualizar as tabelas.');
    }
    
    public function decreanime($id_anime, $id_assist){
        
        /* subtrai 7 dias na coluna assistindo */
        table_assistindo::findOrFail($id_assist)->decrement('episodio', 1);
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        $session_user = auth()->user();
        $id_user = $session_user->id;
        users::findOrFail($id_user)->decrement('exp', 1);
        
        /* subtrai 7 dias na coluna data_semana */
        $tb_anime = table_anime::findOrFail($id_anime);
        $dataAnime = $tb_anime->data_semana;
        $newData = Carbon::parse($dataAnime)->subDays(7);
        table_anime::where('id', $id_anime)->update(['data_semana' => $newData]);
        
        return redirect('/home');
    }
    
    public function addranking(request $request, $id){
        
        $table_assistidos = table_assistindo::findOrFail($id);
        
        $id_ranking = $table_assistidos->id_anime;
        $ep_ranking = $table_assistidos->episodio;
        $nota_ranking = $table_assistidos->nota;
        $desc_ranking = $table_assistidos->descricao;
        $link_ranking = $table_assistidos->link;
        
        $table_ranking = new table_ranking;
        
        $table_ranking->id_anime = $id_ranking;
        $table_ranking->episodio = $ep_ranking;
        $table_ranking->nota = $nota_ranking;
        $table_ranking->descricao = $desc_ranking;
        $table_ranking->link = $link_ranking;
        
        $table_ranking->save();
        
        return redirect('/');
    }
    
    public function addcontinua(request $request, $id){
        
        $table_assistidos = table_assistindo::findOrFail($id);
        
        $id_update = $table_assistidos->id_anime;
        $ep_update = $table_assistidos->episodio;
        $nota_update = $table_assistidos->nota;
        $desc_update = $table_assistidos->descricao;
        $link_update = $table_assistidos->link;
        
        $table_continua = new table_continua;
        
        $table_continua->id_anime = $id_update;
        $table_continua->episodio = $ep_update;
        $table_continua->nota = $nota_update;
        $table_continua->dia_semana = 'null';
        $table_continua->descricao = $desc_update;
        $table_continua->link = $link_update;
        
        $table_continua->save();
        
        return redirect('/');
    }
    
    public function addparados(request $request, $id){
        
        $table_assistidos = table_assistindo::findOrFail($id);
        
        $id_update = $table_assistidos->id_anime;
        $ep_update = $table_assistidos->episodio;
        $nota_update = $table_assistidos->nota;
        $desc_update = $table_assistidos->descricao;
        $link_update = $table_assistidos->link;
        
        $animePausados = new AnimesParados;
        
        $animePausados->id_anime = $id_update;
        $animePausados->episodio = $ep_update;
        $animePausados->nota = $nota_update;
        $animePausados->descricao = $desc_update;
        $animePausados->link = $link_update;
        
        $animePausados->save();
        
        return redirect('/');
    }
    
    public function infoanime($id){ 
        $table_anime = table_anime::findOrFail($id);
        
        return view('pages.info-anime', ["id" => $id, "table_anime" => $table_anime]);
    }
    
    public function listadeanimes(){ 
        $table_animes = table_anime::all();
        
        return view('pages.lista-de-animes', ["table_animes" => $table_animes]);
    }
    
    /* Page: Ranking */
    public function list_ranking(){
        
        $nome = "jimy";
        
        $table_rank = table_ranking::with('nome_anime')->get();
         
        return view('pages.list-ranking', compact(['nome', 'table_rank']));
    }
    
    /* Funções Table: Continuações Home */
    public function plusanimec(Request $request, $id){
                               
        table_continua::findOrFail($request->id)->increment('episodio', 1);

        return redirect('/');
    }
    
    public function decreanimec(Request $request){
        
        table_continua::findOrFail($request->id)->decrement('episodio', 1);
        return redirect('/');
    }
    
    /* DEV */
    public function apache2(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        return view('dev.apache2', compact(["id_user_sse", "level_user", "exp_user"]));
    }
    
    public function linuxComandos(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        return view('dev.linux-comandos', compact(["id_user_sse", "level_user", "exp_user"]));
    }
    
    public function laravelMigrations(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        return view('dev.laravel-migrations', compact(["id_user_sse", "level_user", "exp_user"]));
    }
    
    public function laravelEloquent(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        return view('dev.laravel-eloquent', compact(["id_user_sse", "level_user", "exp_user"]));
    }
    
    public function createProject(){
        
        /* Globals */
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $level_user = users::where('id', $id_user_sse)->value('level');
        $exp_user = users::where('id', $id_user_sse)->value('exp');
        
        return view('dev.laravel-create', compact(["id_user_sse", "level_user", "exp_user"]));
    }
    
}
