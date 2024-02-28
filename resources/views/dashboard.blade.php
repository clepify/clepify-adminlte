@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="ml-2">Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <x-adminlte-button label="Kirim Surat" theme="primary" icon="fas fa-paper-plane" class="w-100 mb-4"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <x-adminlte-small-box title="424" text="Surat Aktif" icon="fas fa-envelope" theme="info" url="#" url-text="View details"/>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <x-adminlte-small-box title="424" text="Arsip Surat" icon="fas fa-box-archive" theme="info" url="#" url-text="View details"/>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <x-adminlte-small-box title="424" text="Mahasiswa" icon="fas fa-users" theme="info" url="#" url-text="View details"/>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <x-adminlte-small-box title="424" text="Views" icon="fas fa-check" theme="info" url="#" url-text="View details"/>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .small-box > .inner {
            padding: 20px 10px 10px 20px;
        }
        .small-box h5 {
            font-size: 1rem;
            text-transform: uppercase;
        }
        .small-box > .small-box-footer {
            text-align: start;
            padding: 10px 20px;
        }
    </style>
@stop
