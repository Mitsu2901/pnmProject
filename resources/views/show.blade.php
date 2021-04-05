@extends('master')
@section('title', 'Info Lalu Lintas')
@section('header')
    <center>
    <div class="row"></div>
        <h2>Info Lalu lintas</h2>
        <a href="/tambah"><button class="btn btn-success">Tambah Artikel</button></a>
        <a href="/login"><button class="btn btn-primary">Jadilah Admin</button></a>
    </center>
@endsection
@section('main')
    <center>
    @foreach ($articles as $article)
    <div class="card mt-5">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $article->judul }}</h2>
            <p class="card-text">{{ $article->deskripsi}}</p>
            <a href="/detail/{{ $article->id }}" class="btn btn-primary">Baca Artikel &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $article->created_at }}
            <a href="#">Sumber</a>
          </div>
    </div>
   @endforeach
   <center>
@endsection