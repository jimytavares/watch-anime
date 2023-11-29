@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
            
        {{-- ./Assistindo --}}
        <div class="row thema-black" style="margin-top:40px; width:100%; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
            
            @foreach($table_assistidos as $table_assistindo)
                <div class="" style="box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px; margin-left:20px; width:450px; margin-top:20px; height:100%;">
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-4">
                            @if($table_assistindo->nota == '10')
                                <img src="{{URL::asset('img/animes/' . $table_assistindo->nome_anime->image )}}" style="width:100%; height:170px; border-radius:5px; border: 2px solid #00ff00; margin-top:10px;">
                            @else
                                <img src="{{URL::asset('img/animes/' . $table_assistindo->nome_anime->image )}}" style="width:100%; height:170px; border-radius:5px; margin-top:10px;">
                            @endif
                            <div class="row">
                                <div class="col-md-auto">

                                </div>
                                <div class="col">
                                    <p style="color:white;">Nota: {{$table_assistindo->nota}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h5 style="padding-top:5px;">{{$table_assistindo->nome_anime->nome}}</h5>
                            <div class="" style="background-color:;">
                                <small>Próximo Ep: <span style="color:green;">{{date('d.m.Y', strtotime($table_assistindo->nome_anime->data_semana)) }}</span></small>
                                <a href="{{ route('decreanime', [ 'id_anime' => $table_assistindo->id_anime, 'id_assist' => $table_assistindo->id ] ) }}"><img src="{{URL::asset('img/plus2.png')}}" style="width:30px; margin-left:5px;"/></a>
                                <a href="{{ route('plusanime', [ 'id_anime' => $table_assistindo->id_anime, 'id_assist' => $table_assistindo->id ] ) }}" style="border:none;"><img src='{{URL::asset("img/plus1.png")}}' style='width:30px; margin-left:5px;'/></a>
                            </div>

                            @if ( $table_assistindo->nome_anime->data_semana > $dataAtual)
                                <div class="progress" style="margin-top:3px;">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{$table_assistindo->episodio}}0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep {{$table_assistindo->episodio}} - {{date('d.m.Y', strtotime($table_assistindo->updated_at))}}</div>
                                </div>
                            @elseif ( $table_assistindo->nome_anime->data_semana == $dataAtual )
                                <div class="progress" style="margin-top:3px;">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{$table_assistindo->episodio}}0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep {{$table_assistindo->episodio}} - {{date('d.m.Y', strtotime($table_assistindo->updated_at))}}</div>
                                </div>
                            @else
                                <div class="progress" style="margin-top:3px;">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: {{$table_assistindo->episodio}}0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep {{$table_assistindo->episodio}} - {{date('d.m.Y', strtotime($table_assistindo->updated_at))}}</div>
                                </div>
                            @endif

                            <p class="about" style="margin-top:10px;">Lançamento: {{$table_assistindo->dia_semana}}</p>

                            <div class="row btn-actions">
                                <div class="col-6">
                                    <a href="{{$table_assistindo->link}}" target="_blank"><button class="btn btn-outline-success btn-sm" style="width:110px; background-color:; border:;"><i class='fas fa-tv' style='font-size:15px; margin-top:3px;'></i> Assistir</button></a>
                                </div>
                                <div class="col-6">
                                    <a href="/aprendendo-laravel/public/formassistindo/addparados/{{$table_assistindo->id}}"><button class="btn btn-primary btn-sm" style="width:110px; background-color:#2d3e50; border:none;"><i class="fa fa-times" aria-hidden="true" style="font-size:20px; color:red;"></i> Pausar</button></a>
                                </div>
                                <div class="col-6" style="margin-top:10px;">
                                    <form action="/aprendendo-laravel/public/formassistindo/{{$table_assistindo->id}}" method="post" style="margin-top:;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" style="width:110px; background-color:#2d3e50; border:none; color:white;"><i class="fa fa-trash-o" style="font-size:20px; border:none; color:red;"></i> Excluir</button>
                                    </form>
                                </div>
                                <div class="col-6" style="margin-top:10px;">
                                    <a href="/aprendendo-laravel/public/formassistindo/addranking/{{$table_assistindo->id}}"><button class="btn btn-primary btn-sm" style="width:110px; background-color:#2d3e50; border:none;"><i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; color:#00e600;"></i> Ranking</button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            
            <div class="">
                .
            </div>
        </div>

        {{-- ./Parados --}}
        <section class="thema-black py-4" style="width:100%; margin-top:40px; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
            <div class="container">

                <div class="row">
                    <div class="col-10">
                        <h4 style="letter-spacing:2px;"><i class="fas fa-hourglass-half"></i> Animes Pausados</h4>
                    </div>
                    <div class="col-2 activ">
                        <a><i class="fas fa-sync-alt"></i> Minimizar</a>
                    </div>
                </div>

                <div class="row" id="categorias01">

                    @foreach($table_parados as $animes_parados)
                        <div class="col-5" style="margin-top:20px; background-color:; margin-left:10px;">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="{{ URL::asset('img/animes/' . $animes_parados->nome_anime->image) }}" style="width:130px; border-radius:5px;"/>
                                </div>
                                <div class="col">
                                    <h5 style="color:#ffff33;">{{$animes_parados->nome_anime->nome}}</h5>
                                    <p style="color:white;"><b>Episódio Parado:</b> {{$animes_parados->episodio}}</p>
                                    <small style="color:white;">{{$animes_parados->descricao}}</small>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-auto">
                                            Data: {{date('d.m.Y', strtotime($animes_parados->updated_at)) }}
                                        </div>
                                        <div class="col">
                                            <a href="{{$animes_parados->link}}" target="_blank"><button class="btn btn-outline-success btn-sm" style="width:50%;">Assistir</button></a>
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#paradosDestroy" style="width:50%;">Excluir</button>

                                            <!-- ./destroy-animes-parados -->
                                            <div class="modal fade" id="paradosDestroy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmação de Busca</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p style="color:black;">{{$animes_parados->nome_anime->nome}}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            <form action="{{ url('/paradosdestroy', $animes_parados->id) }}" method="post" style="margin-top:10px;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-outline-danger btn-sm" style="background-color:#2d3e50; border:none; color:white;"><i class="fa fa-trash-o" style="font-size:20px; border:none; color:red;"></i> Excluir</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<form action="{{ url('/paradosdestroy', $animes_parados->id) }}" method="post" style="margin-top:10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm" style="background-color:#2d3e50; border:none; color:white; width:50%;"><i class="fa fa-trash-o" style="font-size:20px; border:none; color:red;"></i> Excluir</button>
                                            </form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- ./ranking --}}
        <section class="thema-black resume py-5 d-lg-flex justify-content-center align-items-center" id="resume" style="margin-top:30px; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4" style="color:#66ffff;">Melhores do Mês <span style="letter-spacing:2px;"></span></h2>

                        <div class="timeline">
                            @foreach($rankingAnime as $rankingAnimes)
                                <div class="timeline-wrapper">
                                     <div class="timeline-yr">
                                          <img src="{{URL::asset('img/animes/' . $rankingAnimes->image )}}" style="width:100%; height:; border-radius:5px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                     </div>
                                     <div class="timeline-info">
                                          <h4><span>{{$rankingAnimes->nome}}</span><small style="color:#3385ff;">Ep: {{$rankingAnimes->episodio}}</small></h4>
                                          <p>a</p>
                                     </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                      <h2 class="mb-4 mobile-mt-2" style="letter-spacing:2px; color:#66ffff;">Top Ranking Animes</h2>

                        @foreach($ranking10Anime as $ranking10Animes)
                            <div class="row">
                                 <div class="col-3">
                                      <img src="{{URL::asset('img/animes/' . $ranking10Animes->nome_anime->image )}}" style="width:100%; height:; border-radius:5px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                 </div>
                                 <div class="col-9">
                                      <h5><span>{{$ranking10Animes->nome_anime->nome}}</span><small style="color:#3385ff;">Nota: {{$ranking10Animes->nota}}</small></h5>
                                      <p>{{$ranking10Animes->descricao}}</p>
                                      <img src="{{ URL::asset('img/icons/2-icon.gif') }}" />
                                      <p>{{$ranking10Animes->nome_anime->temporada}}</p>
                                      <a href="#" style="color:green;"><i class="far fa-arrow-alt-circle-right"></i> Saiba mais</a>
                                 </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>

@endsection