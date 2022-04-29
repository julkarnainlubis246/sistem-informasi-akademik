@extends('dashboard.layouts.main')
@section('content')

<style>
    .form-my {
        float: left; width : 100px;
    }
    .width-form-my {
        width: 250px;
    }
    .grid-my {
        float: left;
    }
    .grid-my-left {
        float: right;
    }
</style>

                    <!-- DataTales Example -->
                    <div class="card shadow mt-2 mb-4">
                        <div class="card-header py-2">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa
                                <button type="button" class="badge border-0" data-bs-toggle="modal" data-bs-target="#create">
                                    <img src="http://127.0.0.1:8000/icons/bag-plus.svg" alt="">
                                </button>
                              
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-scrollable" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Jurusan</th>
                                            <th>Wali</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswas as $mahasiswa)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->jurusan->nama }}</td>
                                            <td>{{ $mahasiswa->wali->nama_wali }}</td>
                                            <td class="text-center"> 
                                                <a class="badge border-0" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                                    <img src="http://127.0.0.1:8000/icons/binoculars.svg" alt="">
                                                </a>                                             
                                                <form action="/dashboard/posts/ " method="post" class="d-inline"> 
                                                <button type="button" class="badge border-0">
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
{{-- Create --}}
                    <div class="modal fade" id="create"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="/data/mahasiswa" method="post">
                            @csrf
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">    
                                            <div class="card shadow mt-2 mb-4">
                                                <div class="card-header py-2">
                                                    <h6 class="m-0">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;
                                                        Data Mahasiswa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                      
                                                        Data Wali
                                                    </h6>
                                                </div>
                                                <div>
                                                       
                                                <div class="grid-my">
                                                    <div class="form-floating mb-3 mt-3">
                                                        <div class="form-my">&nbsp;Nama</div>                                                     
                                                        <input class="width-form-my" type="text" required name="nama">                                                                                                  
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-my">&nbsp;Nim</div>
                                                        <input class="width-form-my" type="text" required name="nim">                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-my">&nbsp;Jurusan</div>                                                       
                                                            <select class="width-form-my" required name="jurusan_id">
                                                                <option value=""></option>
                                                                @foreach ($jurusans as $jurusan)
                                                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                                                                @endforeach
                                                            </select>                                                       
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-my">&nbsp;Alamat</div>
                                                        <input class="width-form-my" type="text" required name="alamat">                                                     
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-my">&nbsp;No Hp</div>
                                                        <input class="width-form-my" type="text" required name="no_hp">                                                       
                                                    </div>
                                                </div>
{{-- Data Wali --}}
                                                <div class="grid-my-left">
                                                    <div class="form-floating mb-3 mt-3">
                                                        <div class="form-my">&nbsp;Nama</div>
                                                        <input class="width-form-my" type="text" required name="nama_wali">
                                                    </div>
                                                    <div class="form-floating mb-3 mt-3">
                                                        <div class="form-my">&nbsp;Alamat</div>
                                                        <input class="width-form-my" type="text" required name="alamat_wali">
                                                    </div><div class="mb-3">
                                                        <div class="form-my">&nbsp;Pekerjaan</div>                                                       
                                                            <select class="width-form-my" required name="pekerjaan_id">
                                                                <option value=""></option>
                                                                @foreach ($pekerjaans as $pekerjaan)
                                                                <option value="{{ $pekerjaan->id }}">{{ $pekerjaan->nama }}</option>
                                                                @endforeach
                                                                <option value="1000">Lain - lain</option>
                                                            </select>                                                       
                                                    </div>
                                                    <div class="form-floating mb-3 mt-3">
                                                        <div class="form-my">&nbsp;No Hp</div>
                                                        <input class="width-form-my" type="text" required name="no_hp_wali">
                                                    </div>
                                                </div> 
                                                </div>                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>                                                                              
                                </div>
                        </form>
                    </div>
{{-- Read --}}
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card shadow mt-2 mb-4">
                                    <div class="card-header py-2">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa | {{ $mahasiswa->nama }}
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th>Nama</th>
                                                        <th>Nim</th>
                                                        <th>Jurusan</th>
                                                        <th>Alamat</th>
                                                        <th>No Hp</th>
                                                        <th>Wali</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mahasiswas as $mahasiswa)
                                                    <tr>
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td>{{ $mahasiswa->nama }}</td>
                                                        <td>{{ $mahasiswa->nim }}</td>
                                                        <td>{{ $mahasiswa->jurusan->nama }}</td>
                                                        <td>{{ $mahasiswa->alamat }}</td>
                                                        <td>{{ $mahasiswa->no_hp }}</td>
                                                        <td>{{ $mahasiswa->nama_wali }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                            </div>
                        </div>
                        </div>
                    </div>
{{-- Update --}}
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Hide this modal and show the first with the button below.
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                            </div>
                        </div>
                        </div>
                    </div>
@endsection