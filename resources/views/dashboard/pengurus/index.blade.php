@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between ml-2 mr-2">
                <h4 class="card-title">Data Pengurus</h4>
                <a href="{{route('db.pengurus.create')}}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Foto
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Jabatan
                    </th>
                    <th>
                      No Hp
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
                                <td><img style="width: 100px !important; height: 150px !important; border-radius: 10%;object-fit: cover !important;" src="{{asset('storage/pengurus/' . $item->foto)}}" alt="Foto Pengurus"></td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->hp}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('db.pengurus.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{route('db.pengurus.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data</td>
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