@extends('layouts.main')

@section('title', 'LINUX - Commands')

@section('content')

<style>
    th{color:#bac7b7;}
    td{color:#a9c276;}
</style>

    <div class="container" style="margin-top:40px;">
        
        <div class="">
            <img src="{{ URL::asset('img/linux/linux-icon.png') }}" style="width:300px"; />    
        </div>

        <table class="table table-bordered" style="color:white; background-color:#252a37; margin-top:20px;">
          <thead>
            <tr>
              <th scope="col" style="color:#c28ae5 !important; width:15%">COMMANDS</th>
              <th scope="col" style="color:#c28ae5 !important;">actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>
            </tr>
          </tbody>
        </table>

    </div>
@endsection