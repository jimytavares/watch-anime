@extends('layouts.main')

@section('title', 'DB: Form Animes')

@section('content')

    <section class="container-fluid">
        
        {{-- ./Parados --}}
        <div class="row thema-black py-4" style="width:100%; margin-top:40px; box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;">
            <div class="container">

                {{-- .title --}}
                <div class="row">
                    <div class="col-10">
                        <h4 style="letter-spacing:2px;"><i class="fas fa-hourglass-half"></i> Animes Pausados</h4>
                    </div>
                    <div class="col-2 activ">
                        <a><i class="fas fa-sync-alt"></i> Minimizar</a>
                    </div>
                </div>

                {{-- .table --}}
                <div class="row" style="margin-top:20px;">
                    @foreach($table_parados as $animes_parados)
                        <div class="col-2">
                            <img src="{{ URL::asset('storage/animes/' . $animes_parados->nome_anime->image) }}" style="width:100%; border-radius:5px;"/>
                            <p style="color:white;"><b>Episódio Parado:</b> {{$animes_parados->episodio}} <br/> <small style="letter-spacing:1px;">{{$animes_parados->nome_anime->temporada}}</small> <br/> <small>Data: {{date('d.m.Y', strtotime($animes_parados->updated_at)) }}</small></p>
                            <div class="row">
                                <div class="col-md-auto">
                                    <button class="btn btn-success btn-sm" style="background-color:#33ffbb; color:black;"><i class="far fa-thumbs-up"></i></button>
                                </div>
                                <div class="col">
                                    <a href="{{$animes_parados->link}}" target="_blank"><button class="btn btn-outline-success btn-sm" style="width:100%;">Assistir</button></a>
                                </div>
                                <div class="col-md-auto">
                                    <form action="{{ url('/paradosdestroy', $animes_parados->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" style="background-color:#ff3399; border:none; color:white;"><i class="fa fa-trash-o" style="font-size:20px; border:none; color:white;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        
    </section>

@endsection
    
