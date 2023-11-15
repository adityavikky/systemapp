@extends('./layouts.mainlayout')

@section('title', 'Support')

@section('content')

    <div class="row align-items-center vh-100">
        <div class="col-md-6 mx-auto">
            <form action="/laporanpermohonan/store" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-body">
                        <img src={{ url('./images/LaporanKerusakanHeader.png') }} alt="" class="img-fluid mx-auto d-block mb-4">
                        <div class="form-group">
                            <label>Tanggal Permohonan</label>
                            <div class="input-group">
                                <input type="text" id="tanggal" name="tanggal" value="{{ date('d-m-Y') }}"
                                    class="form-control" readonly />
                                <input type="text" id="pukul" name="pukul" value="{{ date('H:i:s') }}"
                                    class="form-control" hidden />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Pemohon</label>
                            <select id="userselect" class="form-control select2" style="width: 100%;" name="userselect"
                                required>

                            </select>
                        </div>

                        <div class="form-outline my-2">
                            <label class="form-label" for="form12">Unit Kerja</label>
                            <select id="unitkerja" class="form-control select2" style="width: 100%;" name="unitkerja">
                                <option value="Belum ada data">Belum ada data</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kendala</label>
                            <textarea id="masalah" class="form-control" rows="3" placeholder="Jelaskan kendala yang dialami.."
                                name="masalah" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Unit Kerja Tindak Lanjut</label>
                            <select id="staffselect" class="form-control select2" style="width: 100%;" name="staffselect"
                                required>

                            </select>
                        </div>

                        <input id="status" class="form-control" placeholder="Jelaskan kendala yang dialami.."
                            value="Prosess" name="status" hidden></input>
                        <div class="d-grid gap-2">
                            <button class="btn btn-info btn-block" type="submit">Laporkan!!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Select Pemohon --}}
    <script>
        document.body.style.backgroundImage = "url({{ URL::asset('images/background.jpg') }})";

        $(document).ready(function() {
            $("#userselect").select2({
                placeholder: "-- Pilih Nama Pemohon --",
                ajax: {
                    url: "{{ route('nameUser.index') }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.name,
                                    text: item.name,
                                    selected: true,
                                }
                            })
                        }
                    }
                }
            });

            $("#staffselect").select2({
                placeholder: "-- Pilih Nama Staff --",
                ajax: {
                    url: "{{ route('nameStaff.index') }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.name,
                                    text: item.name,
                                    selected: true,
                                }
                            })
                        }
                    }
                }
            });

            $("#userselect").change(function() {
                let id = $(this).val();
                $("#unitkerja").select2({
                    placeholder: "-- Pilih Unit Kerja --",
                    ajax: {
                        url: "{{ url('selectUnit') }}/" + id,
                        processResults: function({
                            data
                        }) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.unitkerja,
                                        text: item.unitkerja,
                                    }
                                })
                            }
                        }
                    }
                });

            })
        });
    </script>
    <script>
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("tanggal").innerHTML = m + "/" + d + "/" + y;
    </script>



@endsection
