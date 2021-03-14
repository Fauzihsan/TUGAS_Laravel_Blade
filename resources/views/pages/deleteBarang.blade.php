@extends('layouts.app')
@section('title', 'APK GUDANG - DELETE ITEM')

@section('content')

    <div class="row">
        <div class="col">
            <h2>DELETE ITEM</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <x-modal theme="danger" judulModal="Hapus Barang" aksi="DELETE">
                INI MODAL DELETE BARANG
            </x-modal>
        </div>
    </div>
    

@stop