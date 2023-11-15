@extends('./dashboard.layouts.mainlayout')

@section('title', 'Laporan Permohonan')

@section('content')

    <h4>Laporan Kerusakan</h4>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Laporan Kerusakan</h3>
                    <div class="card-tools">
                        <div class="row">
                            <div class="col">
                                <div class="" style="width: 400px">
                                    <select id="userselect" class="form-control select2" style="width: 100%;" required>

                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group" style="width: 400px; margin-top: 0.7px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Pukul</th>
                                <th>Nama</th>
                                <th>Unit Kerja</th>
                                <th>Unit Tindak Lanjut</th>
                                <th>Kendala</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonan as $index => $p)
                                <tr>
                                    <td>{{ $index + 1 - 0 }}</td>
                                    <td>{{ $p->tanggal }}</td>
                                    <td>{{ $p->pukul }}</td>
                                    <td>{{ $p->namapemohon }}</td>
                                    <td>{{ $p->unitkerja }}</td>
                                    <td>{{ $p->staffdimohon }}</td>
                                    <td>{{ $p->masalahdihadapi }}</td>
                                    <td>
                                        <p id="status">
                                            {{ $p->status }}
                                        </p>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Selesai</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


@endsection
