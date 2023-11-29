@extends('layout.main')

@section('title', 'DB: List Animes')

@section('content')

    <!-- #### BOX-WHITE 01: result #### -->
    <div class="" style="margin-top:40px; background-color:white; border-radius:3px; height: 100%; width:98%; margin-left:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

        <!-- title -->
        <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
            <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> <b style="color:#333333;">TABLE:</b> Search Anime</h5>
            <hr style="border-top: 1px solid white; opacity:0.4;">
        </div>

        <div class="container">
            
            <div class="row">
                    <div class="col-4">
                        <img src="{{URL::asset('img/animes/' . $table_anime->imagem )}}" style="width:100%; height:170px; border-radius:5px; margin-top:10px;">
                        <div class="row">
                            <div class="col-md-auto">
                                <form action="/aprendendo-laravel/public/formassistindo/{{$table_anime->id}}" method="post" style="margin-top:5px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o" style="font-size:20px; border:none; background-color:transparent;"></i></button>
                                </form>
                            </div>
                            <div class="col">
                                <p>Nota: {{$table_anime->nota}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h5 style="padding-top:5px;">{{$table_anime->nome}}</h5>
                        <small>Próximo Ep: <span style="color:green;">{{date('d', strtotime($table_anime->data_semana)) + 7}}{{date('.m.Y', strtotime($table_anime->data_semana))}}</span></small>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{$table_anime->episodio}}0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep {{$table_anime->episodio}} - {{date('d.m.Y', strtotime($table_anime->updated_at))}}</div>
                        </div>
                        <p class="about" style="margin-top:10px;">Lançamento: {{$table_anime->dia_semana}}</p>
                        <div class="btn-actions">
                            <div class="col-12">
                                <a href="{{$table_anime->link}}" target="_blank"><button class="btn btn-primary btn-sm" style="width:130px; background-color:#2ecd6f; border:none;"><i class='fas fa-tv' style='font-size:15px; margin-top:3px;'></i> Assistir</button></a>
                                <a href="/aprendendo-laravel/public/formassistindo/decreanime/{{$table_anime->id}}"><img src="{{URL::asset('img/plus2.png')}}" style="width:30px; margin-left:5px;"/></a>
                                <a href="/aprendendo-laravel/public/formassistindo/plusanime/{{$table_anime->id}}" style="border:none;"><img src='{{URL::asset("img/plus1.png")}}' style='width:30px; margin-left:5px;'/></a>
                            </div>
                            <div class="col-12" style="margin-top:10px;">
                                <a href="/aprendendo-laravel/public/formassistindo/addparados/{{$table_anime->id}}"><button class="btn btn-primary btn-sm" style="width:90px; background-color:#2d3e50; border:none;"><i class="fa fa-times" aria-hidden="true" style="font-size:22px; color:red;"></i> Pausar</button></a>
                                <a href="/aprendendo-laravel/public/formassistindo/addranking/{{$table_anime->id}}"><button class="btn btn-primary btn-sm" style="width:130px; background-color:#2d3e50; border:none;"><i class="fa fa-check-square-o" aria-hidden="true" style="font-size:21px; color:#00e600;"></i> Add Ranking</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        

    </div>


@endsection