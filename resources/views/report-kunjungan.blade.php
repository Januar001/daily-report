@extends('layout.main')
@section('title', 'Halaman Report Kunjungan')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #ff3b34bd">
                <h3 class="card-title">Report Kunjungan</h3>
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
                            <th>Nasabah</th>
                            <th>Kol</th>
                            <th>Alamat</th>
                            <th>latlong</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('template/dist/assets/img/user1-128x128.jpg') }}"
                                    class="rounded "alt="..."></td>
                            <td>Hendro</td>
                            <td>Sunandar</td>
                            <td><span class="badge bg-success">KOL 1</span></td>
                            <td>Jl. Kepuh Kembar RT.04 RW50 Sidoklumpuk - Sidoarjo</td>
                            <td>-7.0920190,112.290190</td>
                            <td>Jl. Kepuh Kembar RT.04 RW50 Sidoklumpuk - Sidoarjo</td>
                            <td>Tidak Berada dirumah</td>
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
