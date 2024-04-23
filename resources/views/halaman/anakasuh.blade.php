@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Anah Asuh</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="about mb-5">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12">
            <table class="table table-condensed">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Kelas</th>
                     <th>Jenis Kelamin</th>
                     <th>Umur</th>
                  </tr>
               </thead>
               <tbody>
                  @if (count($data) > 0)
                  <?php $num = 1 ?>
                  @foreach ($data as $item)
                     <tr>
                        <td>{{$num++}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}} {{$item->jenjang}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->umur}}</td>
                     </tr>
                  @endforeach
                  @else
                     <tr>
                        <td colspan="5" class="text-center">Belum ada data</td>
                     </tr>
                  @endif
               </tbody>
            </table>
          </div> 
       </div>
    </div>
 </div>
@endsection