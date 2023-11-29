@extends('layouts.main')

@section('title', 'DB: Form Animes')

@section('content')
<style>
    .whitebox-group{background-color:white; width: 98%; margin-top:23px; margin-left:10px; border-radius:3px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;}
    .form-group{margin-top: 20px;}
    .form-group input{width:400px !important;}
</style>

    <section class="container-fluid">
        
        <div class="whitebox-group">
            
            <!-- title -->
            <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> Animes A s s i s t i n d o</h5>
                <hr style="border-top: 1px solid white; opacity:0.4;">
            </div>
            
            <!-- form -->
            <div class="container" style="margin-left:3%; width: 1000px; margin-top:30px; border: ;">
                
                <form action="{{ route('assistindoAdd') }}" method="POST" enctype="multipart/form-date" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <p>Nome do Anime:</p>
                            </div>
                            <div class="col">
                                <select class="form-control" name="id_anime">
                                    <option defaut>..:: Selecione Anime ::..</option>
                                     @forelse ($table_animes as $table_anime)
                                            <option value="{{$table_anime->id}}">{{ $table_anime->nome }}</option>
                                        @empty
                                            <option value="">Nenhum item cadastrado</option>
                                     @endforelse
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Epísodio:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Dia Semana:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="dia_semana" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Nota:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="nota" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Descrição:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="descricao" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Link:</p>
                        </div>
                        <div class="col-8">
                            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-2">
                            {{-- passando o id da sessão do usuário --}}
                            <input type="text" name="id_usuario" class="form-control" id="exampleFormControlInput1" value="{{$id_user_sse}}" placeholder="{{$id_user_sse}}" style="color:white; border:none;">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-success" style="border:none;">Salvar</button>
                        </div>
                      </div>
                    </div>
                </form>
                
            </div><br/>
            
            <p>{{ $teste2 }}</p>
            <p>ID DA SESSAO: {{ $teste3 }}</p>
            
        </div>
        
    </section>
@endsection
    
