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
                        @foreach ($kunjungan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 + ($kunjungan->currentPage() - 1) * $kunjungan->perPage() }}</td>
                                {{-- <td><img src="{{ asset('template/dist/assets/img/user1-128x128.jpg') }}"
                                        class="rounded "alt="..."></td> --}}
                                <td><img src="{{ $item->foto }}" class="rounded" style="max-height: 10vh" alt="...">
                                </td>
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->nasabah->nama }}</td>
                                <td>
                                    @if ($item->nasabah->Kolektibilitas === 'KOL 1')
                                        <span class="badge bg-primary">{{ $item->nasabah->Kolektibilitas }}</span>
                                    @elseif ($item->nasabah->Kolektibilitas === 'KOL 2')
                                        <span class="badge bg-success">{{ $item->nasabah->Kolektibilitas }}</span>
                                    @elseif ($item->nasabah->Kolektibilitas === 'KOL 3')
                                        <span class="badge bg-warning">{{ $item->nasabah->Kolektibilitas }}</span>
                                    @elseif ($item->nasabah->Kolektibilitas === 'KOL 4')
                                        <span class="badge bg-danger">{{ $item->nasabah->Kolektibilitas }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ $item->nasabah->Kolektibilitas }}</span>
                                    @endif
                                </td>
                                <td>{{ $item->nasabah->alamat }}</td>
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
            {{ $kunjungan->links('pagination::bootstrap-5') }}
        </div>
        <!-- /.card -->
    </div>
@endsection
