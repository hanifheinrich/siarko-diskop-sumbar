@extends('layouts.index')

@section('konten')
<div class="pcoded-content">
  <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Koperasi & UKM</h5>
                      <p class="m-b-0">Koperasi & UKM yang berada di Sumatera Barat</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Arsip PAD</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- Page-header end -->
<div class="pcoded-inner-content">
  <!-- Main-body start -->
                        <!-- Hover table card start -->
                        <div class="card">
                          <div class="card-header">
                            <h5>Tabel Koperasi & UKM Sumatera Barat</h5>
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci pariatur odit omnis atque architecto ipsa quas neque eveniet cumque.</span>
                            <div class="card-header-right">
                              <a href="/koperasi/create" class="btn btn-primary"><i class="ti-plus"></i> Tambah Koperasi</a>
                            </div>
                          </div>
                          <div class="card-block table-border-style">
                            <div class="table-responsive">
                              <table id="myTable" class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Koperasi & UKM</th>
                                    <th>Daerah</th>
                                    <th>Arsip Pendirian</th>
                                    <th>Arsip PAD 1</th>
                                    <th>Arsip PAD 2</th>
                                    <th>Arsip PAD 3</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $item)
                                  <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td> {{ $item->nama_koperasi }} </td>
                                    <td> {{ $item->wilayah['nama'] }} </td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                    <td><a href="/wilayah/edit"><button class="btn btn-info">Edit</button></a>  
                                    <form onsubmit="return confirm('Yakin mau hapus data?')" class="d-inline" action="/koperasi/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <!-- Hover table card end -->
  <div class="main-body">
      <div class="page-wrapper">
      </div>
      <div id="styleSelector"> </div>
  </div>
</div>
</div>
@endsection