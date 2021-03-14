@extends('layouts.app')
@section('title', 'APK GUDANG - DAFTAR BARANG')

@section('content')

    <div class="row">
        <div class="col " id="daftarBarang">
            <h2>Daftar Barang</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @foreach ($items as $item)
                {{$item}} <hr>
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($stocks as $stock)
                {{$stock}} <hr>
            @endforeach
        </div>
    </div>

@stop