@extends('master')
@section('konten')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Permohonan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="text-align: center;">
            <tr>
              <th width="20%">Nama</th>
              <th>Keterangan</th>
              <th>status</th>
              <th width="10%">OPSI</th>
            </tr>
          </thead>
          <tbody>
            {{ csrf_field() }}
             @foreach($izin as $I)
             <tr>
            <td>{{$I->user->name.' '.$I->user->nama}}</td>
            <td>{{$I->keterangan}}</td>
            <td>{{$I->status}}</td>
            <td style="text-align: center;">
              <a class="btn btn-danger" href="{{url('detail/'.$I->id)}}">Detail</a></td>
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
