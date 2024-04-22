@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between ml-2 mr-2">
                <h4 class="card-title">Data Galeri</h4>
                <a href="{{route('db.galeri.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                      Deskripsi
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
                                <td><img 
                                  style="max-width: 100% !important;width: auto; height: 150px !important; border-radius: 0%;object-fit: cover !important;" 
                                  src="{{asset('storage/galeri/' . $item->foto)}}" alt="Foto Pengurus"></td>
                                <td>{{$item->desk == null ? '-' : $item->desk}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('db.galeri.edit', ['id' => $item->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{route('db.galeri.destroy', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data</td>
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