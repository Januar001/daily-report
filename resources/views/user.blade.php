@extends('layout.main')
@section('title', 'Halaman User')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User</h3>

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
                            <th>CODE</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hari</td>
                            <td>Hari Wicaksono</td>
                            <td>0895336782518</td>
                            <td>hari.w@gmail.com</td>
                            <td><span class="badge bg-warning">Account Officer</span></td>
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
