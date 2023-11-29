@extends('layout.main')

@section('title', 'Editando:' . $table_assistidos->id) 

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
                <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> Animes A s s i s t i n d o</h5>
                <hr style="border-top: 1px solid white; opacity:0.4;">
            </div>
            
            <!-- form -->
            <div class="container" style="margin-left:3%; width: 1000px; margin-top:30px; border: ;">
                
                <form action="/aprendendo-laravel/public/formassistindo/update/{{$table_assistidos->id}}" method="POST" enctype="multipart/form-date" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                    @csrf
                    @method('PUT')
                   <!-- <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <p>Nome do Anime:</p>
                            </div>
                            <div class="col">
                                <select class="form-control" name="id_anime">
                                    <option defaut>{{$table_assistidos->id}}</option>
                                </select>
                            </div>
                        </div>
                    </div>-->

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Epísodios:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$table_assistidos->episodio}}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Dia Semana:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="dia_semana" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$table_assistidos->dia_semana}}">
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Nota:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="nota" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$table_assistidos->nota}}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Descrição:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="descricao" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$table_assistidos->descricao}}">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                            <p>Link:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$table_assistidos->link}}">
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
            
        </div>
        
    </section>
@endsection
    
