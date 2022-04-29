@extends('dashboard.layouts.main')

@section('content')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Nip</th>
                                            <th>Mengajar</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Nip</th>
                                            <th>Mengajar</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                                        
                                        @foreach ($dosens as $dosen)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dosen->nama }}</td>
                                            <td>{{ $dosen->nip }}</td>
                                            <td>{{ $dosen->jurusan->nama }}</td>
                                            <td>{{ $dosen->alamat }}</td>
                                            <td>{{ $dosen->no_hp }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection