@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Detail Donatur</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama Donatur</label>
                  <input type="text" class="form-control" value="{{$data->nama}}" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Hp</label>
                  <input type="text" class="form-control" value="{{$data->hp}}" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" value="{{$data->email}}" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" value="{{$data->alamat}}" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Riwayat Donasi</div>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal</th>
                  <th>Nominal</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $num = 1 ?>
                @foreach ($data->donasi as $item)
                  <tr>
                    <td>{{$num++}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->nominal}}</td>
                    <td>{{$item->ket}}</td>
                  </tr>
                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
@endsection