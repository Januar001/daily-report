@extends('layout.main')
@section('title', 'Halaman Detail Nasabah')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title fw-bold">Detail Nasabah</h5>
                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i
                                data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse"
                                class="bi bi-dash-lg"></i> </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i
                                class="bi bi-x-lg"></i> </button>
                    </div>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="row">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <td>{{ $nasabah->nama }}</td>
                                </tr>
                                <tr>
                                    <th>CIF</th>
                                    <th>:</th>
                                    <td>{{ $nasabah->CIF }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <td>{{ $nasabah->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Account Officer</th>
                                    <th>:</th>
                                    <td>{{ $nasabah->user->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Kolektibilitas</th>
                                    <th>:</th>
                                    <td>
                                        @if ($nasabah->Kolektibilitas === 'KOL 1')
                                            <span class="badge bg-primary">{{ $nasabah->Kolektibilitas }} - LANCAR</span>
                                        @elseif ($nasabah->Kolektibilitas === 'KOL 2')
                                            <span class="badge bg-success">{{ $nasabah->Kolektibilitas }} - DALAM PERHATIAN
                                                KHUSUS</span>
                                        @elseif ($nasabah->Kolektibilitas === 'KOL 3')
                                            <span class="badge bg-warning">{{ $nasabah->Kolektibilitas }} - KURANG
                                                LANCAR</span>
                                        @elseif ($nasabah->Kolektibilitas === 'KOL 4')
                                            <span class="badge bg-danger">{{ $nasabah->Kolektibilitas }} - DIRAGUKAN</span>
                                        @else
                                            <span class="badge bg-secondary">{{ $nasabah->Kolektibilitas }} - MACET</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div> <!--end::Row-->
                    </div> <!--end::Row-->
                </div> <!-- ./card-body -->
            </div> <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title fw-bold">Lokasi Kunjungan Terakhir</h5>
                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i
                                data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse"
                                class="bi bi-dash-lg"></i> </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i
                                class="bi bi-x-lg"></i> </button>
                    </div>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="row">
                        <div class="card-body table-responsive p-0">
                            @if ($latlong === null)
                                <h6 class="text-center">Tidak ada peta yang di tampilkan</h6>
                            @else
                                <div id="map" style="width: auto; height: 400px;"></div>
                            @endif
                        </div> <!--end::Row-->
                    </div> <!--end::Row-->
                </div> <!-- ./card-body -->
            </div> <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title fw-bold">Detail Kunjungan</h5>
                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i
                                data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse"
                                class="bi bi-dash-lg"></i> </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i
                                class="bi bi-x-lg"></i> </button>
                    </div>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="row">
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->
                                <div class="tab-pane active" id="timeline">
                                    @if ($latlong === null)
                                        <h6 class="text-center">Tidak ada kunjungan yang di tampilkan</h6>
                                    @else
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            @foreach ($report as $index => $item)
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-primary text-white">
                                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d M. Y') }}
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i>
                                                            {{ \Carbon\Carbon::parse($item->created_at)->format('H.i') }}</span>

                                                        <h3 class="timeline-header"><a
                                                                href="#">{{ $item->user->nama }}</a> -
                                                            {{ $item->jenis_kunjungan }}
                                                            ({{ $item->kolek_lap }})
                                                        </h3>

                                                        <div class="timeline-body">
                                                            <div class="mb-3">{{ $item->keterangan }}</div>
                                                            <div><img src="{{ $item->foto }}" class="img-thumbnail"
                                                                    alt=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <!-- END timeline item -->
                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    @endif

                                </div>

                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                    </div> <!--end::Row-->
                </div> <!-- ./card-body -->
            </div> <!-- /.card -->
        </div>

    </div>
@endsection
@push('custom-style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
@endpush
@push('custom-script')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        const latlongs = {!! json_encode($latlong) !!};
        const namaNasabah = {!! json_encode($nasabah->nama) !!};

        const map = L.map('map').setView([{{ $latlong }}], 14);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Januar BPRBDP'
        }).addTo(map);


        const marker = L.marker([{{ $latlong }}]).addTo(map)
            .bindPopup('<b>' + namaNasabah + '</b><br /><a href="https://maps.google.com?q=' + latlongs +
                '" target="_blank">Lihat di Google Maps</a>').openPopup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(`You clicked the map at ${e.latlng.toString()}`)
                .openOn(map);
        }

        map.on('click', onMapClick);
    </script>
@endpush
