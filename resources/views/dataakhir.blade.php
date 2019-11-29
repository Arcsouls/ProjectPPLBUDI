@extends('master')
@section('konten')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th width="40%">File</th>
              <th width="40%">Keterangan</th>
              <!-- <th width="22%">OPSI</th> -->
            </tr>
          </thead>
          <tbody>
           @foreach($laporanakhir as $g)
            <tr>
              <td>{{$g->user->name.' '.$g->user->nama}}</td>
              <td>
                <a href="{{ asset('/Laporan Akhir/'.$g->file) }}">{{ asset('/Laporan Akhir/'.$g->file) }}</a>
              </td>
              <td>{{$g->keterangan}}</td>
              <!-- <td>
              @if($g->status==1)
                <a class="btn btn-success" href="{{url('/tabel/tampil/'.$g->id)}}">Tampilkan</a>
              @else
                <a class="btn btn-danger" href="{{url('/tabel/tampil/'.$g->id)}}">Tampilkan</a>
              @endif
              @if($g->status==0)
                <a class="btn btn-success" href="{{url('/tabel/urungkan/'.$g->id)}}">Urungkan</a>
              @else
                <a class="btn btn-danger" href="{{url('/tabel/urungkan/'.$g->id)}}">Urungkan</a>
              @endif
              </td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->


</div>

@endsection
