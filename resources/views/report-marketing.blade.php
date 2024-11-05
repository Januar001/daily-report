@extends('layout.main')
@section('title', 'Halaman Report Marketing')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #36f805b2">
                <h3 class="card-title">Report Marketing</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search...">
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>AO</th>
                            <th>latlong</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('template/dist/assets/img/user1-128x128.jpg') }}" class="rounded"
                                    alt="..."></td>
                            <td>Hendro</td>
                            <td>-7.0920190,112.290190</td>
                            <td>Jl. Kepuh Kembar RT.04 RW50 Sidoklumpuk - Sidoarjo</td>
                            <td>Marketingan</td>
                            <td>16.00 WIB<br>(17 Oktober 2024)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
