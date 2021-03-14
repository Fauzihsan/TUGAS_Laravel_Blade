@extends('layouts.app')
@section('title', 'APK GUDANG - INPUT ITEM')

@section('content')

    <div class="row">
        <div class="col">
            <h2>INPUT ITEM</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <x-modal theme="primary" judulModal="Input Barang" aksi="INPUT">
                INI MODAL INPUT BARANG
            </x-modal>
        </div>
    </div>

@stop