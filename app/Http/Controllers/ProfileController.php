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
    private $user_id_sse;
    
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
        
        $this->id_user2 = 'teste';
        
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        $session_user = auth()->user();
        $this->user_id_sse = Session::get($session_user->id);
        
        /*$id_user = $session_user->id;
        users::findOrFail($id_user)->increment('exp', 1);*/
        
    }
    
    public function index() {
        
        return view('welcome');
    }
    
    public function teste(){
        
        /* Recuperando todos os valores em array ad sessao */
        $usuario = auth()->user();
        $id_user_sse = $usuario->id;
        
        return view('pages.teste', ["usuario" => $usuario, "id_user_sse" => $id_user_sse]);
    }
    
    public function home(){
        $nome = "jimy";
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
        
        return view('pages.home', compact(["nome", "idade", "table_assistidos", "buscar2", "table_continua", "dt", "table_parados", "table_animes", "busca", "dataAtual", "ranking10Anime", "rankingAnime", "id_user_sse", "nivel_usuario"]));
    }
    
    public function formanime(){
        $DataAtual = date('Y');
        
        $table_animes = table_anime::all();
        
        return view('pages.form-dbanime', ["DataAtual" => $DataAtual, "table_animes" => $table_animes]);
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
    
    /* Assistindo */
    public function formassistindo(){
        $nome = "jimy";
        $table_animes = table_anime::all();
        
        $teste2 = $this->id_user2;
        
        $session_user = auth()->user();
        $id_user_sse = $session_user->id;
        $nivel_usuario = users::where('id', $id_user_sse)->get();
        
        return view('pages.form-assistindo', ["nome" => $nome, "table_animes" => $table_animes, "nivel_usuario" => $nivel_usuario, "id_user_sse" => $id_user_sse, "teste2" => $teste2]);
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
}
