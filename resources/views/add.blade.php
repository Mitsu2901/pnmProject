@extends('master')
@section('title', 'Tambah Artikel')
@section('main')

<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea class="form-control" name="deskripsi" rows="15"></textarea>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label>Tambah Gambar</label>
                <input type = "file" name="gambar" class="form-control">
            </div>
        </div>
</div>
@endsection

@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:180px ">
    <div class="form-group">
        <label>Upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
    <div class="form-group">
        <a href="/admin"><button class="form-control btn btn-success">Kembali</button>
    </div>
</div>
</form>
@endsection