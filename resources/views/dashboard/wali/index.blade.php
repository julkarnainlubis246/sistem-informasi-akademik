@extends('dashboard.layouts.main')

@section('content')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Wali</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>No Hp</th>
                                            <th>Mahasiswa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>No Hp</th>
                                            <th>Mahasiswa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($walis as $wali)                                            
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $wali->nama_wali }}</td>
                                            <td>{{ $wali->alamat_wali }}</td>
                                            <td>{{ $pekerjaan->nama }}</td>
                                            <td>{{ $wali->no_hp_wali }}</td>
                                            <td>{{ $wali->mahasiswa->nama }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection