@extends('layouts.app')
@section('title', 'APK GUDANG - HOME')

@section('content')
    <div class="row">
        <div class="col">
            <h2>SELAMAT DATANG DI APLIKASI GUDANG, Hello {!!$users[0] !!}</h2>
        </div>
    </div>
    <div class="row" style="margin-top: 70px">
        <div class="col-md-6">
            <p style="vertical-align: middle;">Ini merupakan Aplikasi Pengelolaan Gudang dimana nanti Admin bisa menginput,mengupdate,menghapus,dan melihat daftar barang</p>
            <h5>PT. Ihsan Sejahtera Maju Jaya Makmur</h5>
        </div>
        <div class="col-md-6">
            <div class="scene" id="scene">
                <img data-depth="0.60" src="{{'/asset/img/imageHome.png'}}" alt="" width="300px">
            </div>
        </div>
    </div>
@stop