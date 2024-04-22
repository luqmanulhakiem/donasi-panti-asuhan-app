@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between ml-2 mr-2">
                <h4 class="card-title">Data Anak Asuh</h4>
                <a href="{{route('db.anak-asuh.create')}}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Nama Lengkap
                    </th>
                    <th>
                      Kelas
                    </th>
                    <th>
                      Jenjang Pendidikan
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      Umur
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
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->jenjang}}</td>
                                <td>{{$item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan'}}</td>
                                <td>{{$item->umur}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('db.anak-asuh.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{route('db.anak-asuh.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Hapus</a>
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