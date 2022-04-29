@extends('dashboard.layouts.main')

@section('content')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pekerjaan
                            <button type="button" class="badge border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="http://127.0.0.1:8000/icons/bag-plus.svg" alt="">
                            </button>
                        </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th> 
                                            <th>Action</th>        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>   
                                            <th>Action</th>                              
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($pekerjaans as $pekerjaan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pekerjaan->nama }}</td>              
                                            <td>
                                                <button type="button" class="badge border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="http://127.0.0.1:8000/icons/binoculars.svg" alt="">
                                                </button>
                                                <button type="button" class="badge border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="http://127.0.0.1:8000/icons/pencil-square.svg" alt="">
                                                </button>
                                                <form action="/dashboard/posts/ " method="post" class="d-inline"> 
                                                <button type="button" class="badge border-0" data-bs-toggle="modal">
                                                    <img src="http://127.0.0.1:8000/icons/trash.svg" alt="">
                                                </button>
                                                </form>
                                            </td>              
                                        </tr>                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-primary text-white">Tambah Data Pekerjaan</div>
                            <div class="modal-body">
                            <div class="form-floating mb-3">
                        <form action="/data/pekerjaan" method="post">
                            @csrf  
                                <input type="text" name="nama" class="form-control" id="jurusan" placeholder="jurusan" autofocus required>
                            </div>                            
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Save</button>
                        </form>
                            </div>
                          </div>
                        </div>
                    </div>

@endsection