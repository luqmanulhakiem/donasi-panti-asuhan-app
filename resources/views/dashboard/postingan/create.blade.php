@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Postingan</h4>
            <form class="forms-sample" action="{{route('db.postingan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 {{-- handle error --}}
                @if ($errors->any())
                <div class="pt-4 pb-2">
                    @foreach ($errors->all() as $error)
                    <p class="text-center small">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
              <div class="form-group">
                <label for="exampleInputUsername1">Foto</label>
                <input class="form-control" type="file" name="foto" id="" accept="image/*" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Judul Postingan</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Postingan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Kategori</label>
                <select class="form-control" name="id_kategori" id="">
                  <option value="{{null}}">-</option>
                  @foreach ($kategori as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Isi Postingan</label>
                <textarea class="form-control" name="desk" id="" cols="30" rows="10" required>

                </textarea>
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection