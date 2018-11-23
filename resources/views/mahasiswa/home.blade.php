@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $pesan)
        @if(Session::has('alert-' . $pesan))

        <p class="alert alert-{{ $pesan }}">
            {{ Session::get('alert-' . $pesan) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </p>
        @endif
        @endforeach
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Data Mahasiswa</h3></div>
        <div class="panel-body">Data Mahasiswa Program Studi Teknik Informatika</br>
        
        <br><a href="{{ url('home/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div>
        
        <table class"table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PROSES</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswa as $mahasiswa)
        <tr>
            <td>{{$mahasiswa -> id}}</td>
            <td>{{$mahasiswa -> nim}}</td>
            <td>
            <form method="GET" action="home/show">
            <a href="{{ url('home/'.$mahasiswa->id)}}">{{$mahasiswa -> nama}}</a></td>

            <td>
            <form method="POST" action="{{ url('home'.$mahasiswa->id)}}">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <a href="{{ url('home/'.$mahasiswa->id.'/edit')}}" class="btn btn-default"><span class="glyphicon glyphicon-folder-open"></span>
            <button class="btn btn-danger" onclick="var x = confirm('Hapus ?');
            if(x){return true;} else{return false;}">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>

        </div>
    </div>

@endsection