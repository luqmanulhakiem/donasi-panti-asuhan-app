@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Total Data</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Total Postingan</th>
                <th>{{$postingan}}</th>
              </tr>
              <tr>
                <th>Total Kategori</th>
                <th>{{$kategori}}</th>
              </tr>
              <tr>
                <th>Total Galeri</th>
                <th>{{$galeri}}</th>
              </tr>
              <tr>
                <th>Total Donatur</th>
                <th>{{$donatur}}</th>
              </tr>
              <tr>
                <th>Total Anak Asuh</th>
                <th>{{$anakAsuh}}</th>
              </tr>
              <tr>
                <th>Total Pengurus</th>
                <th>{{$pengurus}}</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Riwayat Donasi</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama Donatur</th>
                  <th>Nominal</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                @if (count($riwayat) > 0)
                    @foreach ($riwayat as $item)
                        <tr>
                          <td>{{$item->tanggal}}</td>
                          <td>{{$item->donatur->nama}}</td>
                          <td>{{$item->nominal}}</td>
                          <td>{{$item->ket}}</td>
                        </tr>
                    @endforeach
                @else
                  <tr>
                    <td colspan="4" class="text-center">Belum ada data</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection