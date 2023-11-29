@extends('layouts.main')

@section('title', 'Ranking Animes')

@section('content')

    <!-- #### BOX-WHITE 01: result #### -->
    <div class="" style="margin-top:40px; background-color:white; border-radius:3px; height: 100%; width:98%; margin-left:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

        <!-- title -->
        <div class="" style="background-image: linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d); color:white;">
            <h5 style="margin-left: 33px; font-family: 'Poppins', sans-serif; padding-top:20px;"> List: <b>Ranking</b> </h5>
            <hr style="border-top: 1px solid white; opacity:0.4;">
        </div>

        <div class="container">
            
            <table class="container-fluid table table-borderless" style="margin-top: 20px; width:90%; font-size:13px;">
                <thead>
                    <tr style="background-image: linear-gradient(to right, #b21f1f, #fdbb2d); color:white; opacity:0.8;">
                      <th scope="col" style="width:3%; text-align:center;">Nota</th>
                      <th scope="col" style="text-align:center;">Episódios</th>
                      <th scope="col" style="width:20%;">Nome</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Link</th>
                    </tr>
                  </thead>
                  <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                    @foreach($table_rank as $table_ranking)
                        <tr>
                          <th style="text-align:center;">{{ $table_ranking->nota }}</th>
                          <th style="text-align:center;">{{ $table_ranking->episodio }}</th>
                          <th>{{ $table_ranking->nome_anime->nome}}</th>
                          <th>{{ $table_ranking->descricao }}</th>
                          <th>{{ $table_ranking->link }}</th>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                
        </div>
        

    </div>

@endsection