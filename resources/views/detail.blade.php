@extends('master')
@section('konten')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Pemohon</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <form action="{{url('/verifikasi/'.$izin->id)}}" method="POST" enctype="multipart/form-data">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border: none;">
          {{ csrf_field() }}
          @method('put')
              <tbody>
              <tr>
                <td style="border: none;" width="30%">Nama Lengkap</td>
                <td style="border: none;">: {{Auth::user()->name.' '.Auth::user()->nama}}</td>
              </tr>
              <tr><td style="border: none;" width="30%">Surat Keterangna Kampus/Kepolisian</td>
                <td style="border: none;">: <a href="{{ url('/perijinan/'.$izin->desa) }}">{{url('/perijinan/'.$izin->desa)}}</a></td>
              </tr>
              <tr><td style="border: none;" width="30%">Surat Keterangan Sehat</td>
                <td style="border: none;">: <a href="{{ url('/perijinan/'.$izin->desa) }}">{{ url('/perijinan/'.$izin->desa) }}</a> </td>
              </tr>
              <tr>
                <td style="border: none;" width="30%">Keterangan</td>
                <td style="border: none;">: {{$izin->keterangan}}</td>
              </tr>
                <tr><td style="border: none;" width="30%">Status</td>
                <td style="border: none;">:
                @if($izin->status=='disetujui')
                  <input checked="checked" type="radio" name="status" class="btn btn-primary" value="disetujui">Disetujui
                @else
                  <input type="radio" name="status" class="btn btn-primary" value="disetujui">Disetujui
                @endif
                @if($izin->status=='tidak disetujui')
                  <input checked="checked" type="radio" name="status" class="btn btn-primary" value="tidak disetujui">Tidak Disetujui
                @else
                  <input type="radio" name="status" class="btn btn-primary" value="tidak disetujui">Tidak Disetujui
                @endif
                </td>
              </tr>
              <tr><td style="border: none;">
                  <input type="submit" value="Upload" class="btn btn-primary">
                </td>
              </tr>
              </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->


</div>

@endsection
