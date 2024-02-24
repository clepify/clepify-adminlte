{{-- Setup data for datatables --}}
@php
$heads = [
    'No',
    'Tanggal',
    'Nama Pengirim',
    'Jenis',
    'Kategori',
    'Status',
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnDetails = '<button class="btn btn-sm btn-info mx-1" title="Details">
                   <i class="fa fa-fw fa-eye"></i>
               </button>';
$btnEdit = '<button class="btn btn-sm btn-primary mx-1" title="Edit">
                <i class="fa fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-sm btn-danger" title="Delete">
                  <i class="fa fa-fw fa-trash"></i>
              </button>';

$config = [
    'data' => [
        [1, '21-02-2024', 'John Bender', 'Absensi', 'Izin', 'Pending', '<nobr>'.$btnDetails.$btnEdit.$btnDelete.'</nobr>'],
        [2, '22-02-2024', 'Sophia Clemens', 'Absensi', 'Izin', 'Pending', '<nobr>'.$btnDetails.$btnEdit.$btnDelete.'</nobr>'],
        [3, '23-02-2024', 'Peter Sousa', 'Absensi', 'Izin', 'Pending', '<nobr>'.$btnDetails.$btnEdit.$btnDelete.'</nobr>'],
        // ... more data
    ],
    'order' => [[0, 'desc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

@extends('adminlte::page')

@section('title', 'Surat Aktif')

@section('content_header')
    <h1 class="ml-2">Surat Aktif</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <x-adminlte-datatable id="letters" :heads="$heads" bordered striped hoverable>
                            @foreach($config['data'] as $row)
                                <tr>
                                    @foreach($row as $cell)
                                        <td>{!! $cell !!}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </x-adminlte-datatable>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
