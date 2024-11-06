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
                        @foreach ($nasabah as $index => $item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->CIF}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->AO}}</td>
                                <td><span class="badge bg-success">{{$item->Kolektibilitas}}</span></td>
                                <td>Create,Update,Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="mt-2">
            {{ $nasabah->links('pagination::bootstrap-5')  }}
        </div>
        <!-- /.card -->
    </div>
@endsection


