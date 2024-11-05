@extends('layout.main')
@section('title', 'Halaman Nasabah')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nasabah</h3>

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
                            <th>CIF</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>AO</th>
                            <th>Kolektibilitas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0983298910</td>
                            <td>Sunandar</td>
                            <td>Jl. Kepuh Kembar RT.04 RW50 Sidoklumpuk - Sidoarjo</td>
                            <td>Hari Wicaksono</td>
                            <td><span class="badge bg-success">KOL 1</span></td>
                            <td>Create,Update,Delete</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>0983298921</td>
                            <td>Supiyanda</td>
                            <td>Jl. Kepuh kiriman RT.05 RW.01 Sidosermo - Surabaya</td>
                            <td>Hendro</td>
                            <td><span class="badge bg-warning">KOL 4</span></td>
                            <td>Create,Update,Delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
