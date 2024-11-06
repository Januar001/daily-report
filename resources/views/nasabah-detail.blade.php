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
                                    <td>{{ $nasabah->AO }}</td>
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
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
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
