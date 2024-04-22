@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Konfigurasi</h4>
            <form class="forms-sample" action="{{route('konfigurasi.update')}}" method="POST">
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
                <label for="exampleInputUsername1">Alamat Panti Asuhan</label>
                <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" placeholder="Alamat Panti Asuhan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email Panti Asuhan</label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Email Panti Asuhan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Whatsapp Panti Asuhan</label>
                <input type="text" name="whatsapp" class="form-control" value="{{$data->whatsapp}}" placeholder="Whatsapp Panti Asuhan" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection