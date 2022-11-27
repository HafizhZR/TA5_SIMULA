@extends('template')
@section('content')
@include('layouts.css')
<div class="card" style="width: 100%;">
    <div class="card text-center">
        <div class="card-header">
          Sistem Informasi Pengunjung Museum Lampung
        </div>
        <div class="card-body">
          <h5 class="card-title">Selamat Datang</h5>
          <p class="card-text">Silakan Mengisi Form Pengunjung</p>
          <a href="/formTambah" class="btn btn-primary">Tambah Pengunjung</a>
        </div>
      </div>
    <img class="card-img-top" src="{{asset('frontend/images/bg-1.jpg')}}" alt="Card image cap">
  </div>

@endsection
