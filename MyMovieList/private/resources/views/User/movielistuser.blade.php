@extends('User.pages.user')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
        <center><h2 class="card-title"><b>Movie List</b></h2></center>
        <br>
        <div class="table-responsive">
          <div class="col-md-12">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Movie</th>
                        <th>Sinopsis</th>
                        <th>Genre</th>
                        <th>Tanggal Rilis</th>
                        <th>Rating Usia</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($movie as $datas)
                  <?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td><a href="{{route('Detail', $datas->id)}}">{{$datas->movie}}</a></td>
                  <td>{{$datas->sinopsis}}</td>
                  <td>{{$datas->genre}}</td>
                  <td>{{$datas->tanggal_rilis}}</td>
                  <td>{{$datas->rating_usia}}</td>
                  <td><img src="{{asset('private/storage/app/public/gambar/'.$datas->gambar)}}" width="80"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
@stop