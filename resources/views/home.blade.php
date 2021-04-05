@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Sudah Menjadi Admin
                </div>
                <div class="mb-3">
                <center><a href="/admin"><button class="btn btn-success">Kembali</button></a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
