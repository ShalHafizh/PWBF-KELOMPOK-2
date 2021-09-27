@extends('layouts.main')
    
    @section('container')
    <h1>Nama Anggota Kelompok</h1>
    <h3>{{ $nama1 }} </h3>
    <img src="img/{{ $image1 }}" alt="{{ $nama1 }}" width="200">
    <h3>{{ $nama2 }}</h3>
    <img src="img/{{ $image2 }}" alt="{{ $nama2 }}" width="200">
    @endsection