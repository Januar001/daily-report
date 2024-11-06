@extends('layout.main')
@section('title', 'Halaman Report Survei')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color :#e8f805bb">
                <h3 class="card-title">Report Survei</h3>
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
                            <th>Lokasi Survei</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($survei as $index => $item)
                            <tr>
                                <td>{{ $index + 1 + ($survei->currentPage() - 1) * $survei->perPage() }}</td>
                                {{-- <td><img src="{{ asset('template/dist/assets/img/user1-128x128.jpg') }}" class="rounded"
                                        alt="..."></td> --}}
                                <td><img src="{{ $item->foto }}" class="rounded" style="max-height: 10vh" alt="...">
                                </td>
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->latitude }}, {{ $item->longitude }}</td>
                                <td>{{ $item->lokasi_kunjungan }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('H.i') . ' WIB' }}<br>({{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }})
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="mt-2">
            {{ $survei->links('pagination::bootstrap-5') }}
        </div>
        <!-- /.card -->
    </div>
@endsection
