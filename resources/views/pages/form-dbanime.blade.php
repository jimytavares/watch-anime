@extends('layouts.main')

@section('title', 'DB: List Animes')

@section('content')

<style>
    .whitebox-section{background-color:#eeebf9; width: 96%; margin-top: 7px; border-radius: 5px; height: 100%;}
    .whitebox-group{background-color:white; width: 98%; margin-top:23px; margin-left:10px; border-radius:3px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;}
    .form-group{margin-top: 20px;}
    .form-group input{width:400px !important;}
</style>

    <section class="container-fluid whitebox-section">
        .
        <!-- #### BOX 01: Formulário #### -->
        <div class="whitebox-group">
            
            <!-- title -->
            <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> <b style="color:#333333;">ADMIN:</b> Cadastrar novo Anime</h5>
                <hr style="border-top: 1px solid white; opacity:0.4;">
            </div>
            
            <!-- form -->
            <div class="container" style="margin-left:3%; width: 1000px; margin-top:30px; border: ;">
                
                <form action="/aprendendo-laravel/public/formanime" method="POST" enctype="multipart/form-date" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                  @csrf
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <p>Nome:</p>
                            </div>
                            <div class="col">
                                <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="temporada" id="inlineRadio1" value="Janeiro Inverno {{$DataAtual}}">
                        <label class="form-check-label" for="inlineRadio1" style="color:black;">Janeiro Inverno 2023</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="temporada" id="inlineRadio2" value="Abril Primavera {{$DataAtual}}">
                        <label class="form-check-label" for="inlineRadio2" style="color:black;">Abril Primavera 2023</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="temporada" id="inlineRadio2" value="Junho Verão {{$DataAtual}}">
                        <label class="form-check-label" for="inlineRadio2" style="color:black;">Junho Verão 2023</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="temporada" id="inlineRadio2" value="Outubro {{$DataAtual}}">
                        <label class="form-check-label" for="inlineRadio2" style="color:black;">Outubro 2023</label>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Epísodios:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Estreia:</p>
                        </div>
                        <div class="col">
                            <input id="date" name="estreia" type="date">
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-top:5px;">
                        <div class="col-2">
                            <p>Gênero:</p>
                        </div>
                        <div class="col" style="color:black;">
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Ação">
                              <label class="form-check-label" for="inlineCheckbox1">Ação</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Aventura">
                              <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Cartas">
                              <label class="form-check-label" for="inlineCheckbox2">Cartas</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Comédia">
                              <label class="form-check-label" for="inlineCheckbox2">Comédia</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Drama">
                              <label class="form-check-label" for="inlineCheckbox2">Drama</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Escolar">
                              <label class="form-check-label" for="inlineCheckbox2">Escolar</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Fantasia">
                              <label class="form-check-label" for="inlineCheckbox2">Fantasia</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="RPG">
                              <label class="form-check-label" for="inlineCheckbox2">RPG</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Samurai">
                              <label class="form-check-label" for="inlineCheckbox2">Samurai</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Slice of Life">
                              <label class="form-check-label" for="inlineCheckbox2">Slice of Life</label>
                            </div>
                            <div class="col-3 form-check form-check-inline">
                              <input class="form-check-input" name="genero[]" type="checkbox" value="Misterio">
                              <label class="form-check-label" for="inlineCheckbox2">Misterio</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Data Semana:</p>
                        </div>
                        <div class="col">
                            <input id="date" name="data_semana" type="date">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <label for="formFile" class="form-label">Capa do Anime:</label>
                        </div>
                        <div class="col">
                            <input class="form-control" name="image" type="file">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-success" style="border:none;">Cadastrar</button>
                        </div>
                      </div>
                    </div>
                        
                </form>
                
            </div><br/>
            
        </div>
        
        <!-- #### BOX 02: table #### -->
        <div class="whitebox-group">
            
            <!-- title -->
            <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> <b style="color:#333333;">TABLE:</b> Todos os Anime</h5>
                <hr style="border-top: 1px solid white; opacity:0.4;">
            </div>
            
            <div class="container" style="padding-top:20px;">
                <table class="table table-borderless" style="font-size:13px;">
                  <thead>
                    <tr style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                      <th scope="col">ID</th>
                      <th scope="col">Nome Anime</th>
                      <th scope="col">Episódios</th>
                      <th scope="col">Temporada</th>
                      <th scope="col">Estreia</th>
                      <th scope="col">Gênero</th>
                      <th scope="col">Imagem</th>
                    </tr>
                  </thead>
                  <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                    @foreach($table_animes as $table_anime)
                        <tr>
                          <th>{{$table_anime->id}}</th>
                          <th>{{$table_anime->nome}}</th>
                          <th>{{$table_anime->episodio}}</th>
                          <th>{{$table_anime->temporada}}</th>
                          <th>{{$table_anime->estreia}}</th>
                          <th>
                            @foreach($table_anime->genero as $value)
                              {{$value}},&nbsp;
                            @endforeach
                          </th>
                          <th>{{$table_anime->image}}</th>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            
        </div>
        
        <!-- #### BOX 03: search #### -->
        <div class="whitebox-group">
            
            <!-- title -->
            <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> <b style="color:#333333;">TABLE:</b> Search Anime</h5>
                <hr style="border-top: 1px solid white; opacity:0.4;">
            </div>
            
            <div class="container" style="padding-top:20px;">
                <table class="table table-borderless" style="font-size:13px;">
                  <thead>
                    <tr style="background-image: linear-gradient(to right, #3A7EC7 ,#3A7EC7, #2F449C); color:white;">
                      <th scope="col">ID</th>
                      <th scope="col">Resultado Search Anime</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>id</th>
                    </tr>
                  </tbody>
                </table>
            </div>
            
        </div>
        
    </section>
    
@endsection