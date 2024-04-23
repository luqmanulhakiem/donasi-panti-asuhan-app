@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between ml-2 mr-2">
                <h4 class="card-title">Data Donatur</h4>
            </div>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Nama Donatur
                    </th>
                    <th>
                      Alamat
                    </th>
                    <th>
                      Hp
                    </th>
                    <th>
                      Email
                    </th>
                    <th class="text-center">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($data) > 0)
                        <?php $num = 1 ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$num++}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->hp}}</td>
                                <td>{{$item->email}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('db.donatur.show', ['id' => $item->id])}}" class="btn btn-sm btn-secondary">Lihat Donasi</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data</td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                    {{$data->links()}}
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection