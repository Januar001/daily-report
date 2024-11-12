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
                                <td>{{ $index + 1 + ($nasabah->currentPage() - 1) * $nasabah->perPage() }}</td>
                                <td><a href="{{ route('nasabah.show', $item->CIF) }}"
                                        style="text-decoration: none;">{{ $item->CIF }}</a> </td>

                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->AO }}</td>
                                <td>
                                    @if ($item->Kolektibilitas === 'KOL 1')
                                        <span
                                            class="badge
                                        bg-primary">{{ $item->Kolektibilitas }}</span>
                                    @elseif ($item->Kolektibilitas === 'KOL 2')
                                        <span class="badge bg-success">{{ $item->Kolektibilitas }}</span>
                                    @elseif ($item->Kolektibilitas === 'KOL 3')
                                        <span class="badge bg-warning">{{ $item->Kolektibilitas }}</span>
                                    @elseif ($item->Kolektibilitas === 'KOL 4')
                                        <span class="badge bg-danger">{{ $item->Kolektibilitas }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ $item->Kolektibilitas }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="mt-2">
            {{ $nasabah->links('pagination::bootstrap-5') }}
        </div>
        <!-- /.card -->
    </div>
@endsection
