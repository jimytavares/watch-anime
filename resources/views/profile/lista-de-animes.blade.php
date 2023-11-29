@extends('layout.main')

@section('title', 'DB: List Animes')

@section('content')

    {{-- title --}}
    <div class="" style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white; height:60px;">
        <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> <b style="color:#333333;">TABLE:</b> Search Anime</h5>
    </div>

    {{-- table --}}
        <div class="row">
        @foreach($table_animes as $table_anime)
            <div class="" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; margin-left:20px; width:450px; margin-top:20px; height:240px;">
                <div class="row">
                    <div class="col-4">
                        <img src="{{URL::asset('img/animes/' . $table_anime->imagem )}}" style="width:100%; height:170px; border-radius:5px; margin-top:10px;">
                        <div class="row">
                            <div class="col">
                                <p>Nota:</p>
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
                            </div>
                            <div class="col-12" style="margin-top:10px;">
                                <a href="/aprendendo-laravel/public/formassistindo/addparados/{{$table_anime->id}}"><button class="btn btn-primary btn-sm" style="width:90px; background-color:#2d3e50; border:none;"><i class="fa fa-times" aria-hidden="true" style="font-size:22px; color:red;"></i> Pausar</button></a>
                                <a href="/aprendendo-laravel/public/formassistindo/addranking/{{$table_anime->id}}"><button class="btn btn-primary btn-sm" style="width:130px; background-color:#2d3e50; border:none;"><i class="fa fa-check-square-o" aria-hidden="true" style="font-size:21px; color:#00e600;"></i> Add Ranking</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>


@endsection