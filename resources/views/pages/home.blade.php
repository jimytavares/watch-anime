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
                                <img src="{{URL::asset('storage/animes/' . $table_assistindo->nome_anime->image )}}" style="width:100%; height:170px; border-radius:5px; border: 2px solid #00ff00; margin-top:10px;">
                            @else
                                <img src="{{URL::asset('storage/animes/' . $table_assistindo->nome_anime->image )}}" style="width:100%; height:170px; border-radius:5px; margin-top:10px;">
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
                            <hr>
                            <div class="">
                                <?php $next_ep = $table_assistindo->episodio + 1; ?>
                                <small>Próximo Ep: <span style="color:#1aff1a;">{{$next_ep}} - {{date('d.m.Y', strtotime($table_assistindo->nome_anime->data_semana)) }}</span></small>
                                <a href="{{ route('decreanime', [ 'id_anime' => $table_assistindo->id_anime, 'id_assist' => $table_assistindo->id ] ) }}"><img src="{{URL::asset('storage/plus2.png')}}" style="width:30px; margin-left:5px;"/></a>
                                <a href="{{ route('plusanime', [ 'id_anime' => $table_assistindo->id_anime, 'id_assist' => $table_assistindo->id ] ) }}" style="border:none;"><img src='{{URL::asset("storage/plus1.png")}}' style='width:30px; margin-left:5px;'/></a>
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
                                    <div class="dropdown">
                                      <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ações Animes
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ URL::asset('create_parados/' . $table_assistindo->id) }}" style="text-align:center;"><i class="fa fa-times" aria-hidden="true" style="font-size:18px; color:red;"></i> Pausar</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <form action="{{ url('destroy_assistindo/' . $table_assistindo->id) }}" method="post" class="dropdown-item" style="text-align:center;">
                                                @csrf
                                                @method('DELETE')
                                                <i class="fa fa-trash-o" style="font-size:20px; border:none; color:red;"></i> Excluir
                                            </form>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('addranking', $table_assistindo->id) }}" style="text-align:center;"><i class="fa fa-check-square-o" aria-hidden="true" style="font-size:18px; color:green;"></i> Ranking</a></li>
                                      </ul>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <a href="{{$table_assistindo->link}}" target="_blank"><button class="btn btn-outline-success btn-sm" style="width:110px; background-color:; border:;"><i class='fas fa-tv' style='font-size:15px; margin-top:3px;'></i> Assistir</button></a>
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

        {{-- ./ranking --}}
        <section class="row     thema-black resume py-5 d-lg-flex justify-content-center align-items-center" id="resume" style="margin-top:30px; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4" style="color:#66ffff;">Melhores do Mês <span style="letter-spacing:2px;"></span></h2>

                        <div class="timeline">
                            @foreach($rankingAnime as $rankingAnimes)
                                <div class="timeline-wrapper">
                                     <div class="timeline-yr">
                                          <img src="{{URL::asset('storage/animes/' . $rankingAnimes->image )}}" style="width:100%; height:; border-radius:5px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
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

                        <div class="row">
                            @foreach($ranking10Anime as $ranking10Animes)
                                 <div class="col-2">
                                      <img src="{{URL::asset('storage/animes/' . $ranking10Animes->nome_anime->image )}}" style="width:100%; border-radius:5px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                      <p>{{$ranking10Animes->nome_anime->temporada}}</p>
                                 </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </section>

@endsection