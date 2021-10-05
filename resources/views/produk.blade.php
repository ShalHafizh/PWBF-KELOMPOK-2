@extends('layouts.main')
    
    @section('container')
    <h1>Produk & Layanan</h1>
    <br>
    @foreach ($posts as $post)
        <h5><a href="https://www.pengadaan.id/">{{ $post["title1"] }}</a></h5><br>
        <h5><a href="https://www.pengadaan.id/produk">{{ $post["title2"] }}</a></h5><br>
        <h5><a href="https://www.pengadaan.id/berita">{{ $post["title3"] }}</a></h5><br>
        <h5><a href="https://www.pengadaan.id/tender">{{ $post["title4"] }}</a></h5><br>
        <h5><a href="https://www.pengadaan.id/hukum">{{ $post["title5"] }}</a></h5><br>
        
    @endforeach
    @endsection

