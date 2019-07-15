@extends('Admin.template.home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Movie
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('MovieList.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Movie</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Movie</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('MovieList.update', $movie->id)}}" enctype="multipart/form-data" method="POST">
            	@include('flash')
              {!! csrf_field() !!}
              @method('PATCH')

              <div class="box-body">
                <div class="form-group">
                  <label for="movie">Judul Movie</label>
                  <input type="text" class="form-control" name="movie" placeholder="Masukan Judul" value="{{$movie->movie}}">
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinposis</label>
                  <textarea type="text" class="form-control" name="sinopsis" style="width: 1065px; height: 250px;">{{ $movie->sinopsis}}</textarea>
                </div>
                <div class="form-group">
                  <label for="genre">Genre</label>
                  <input type="text" class="form-control" name="genre" placeholder="Masukan Genre" value="{{$movie->genre}}">
                </div>
                <div class="form-group">
                  <label for="tanggal_rilis">Tanggal Rilis</label>
                  <input type="date" class="form-control" name="tanggal_rilis" placeholder="Masukan Tangga Rilis" value="{{$movie->tanggal_rilis}}">
                </div>
                <div class="form-group">
                  <label for="rating_usia">Rating Usia</label>
                  <input type="text" class="form-control" name="rating_usia" placeholder="Masukan Pengarang" value="{{$movie->rating_usia}}">
                </div>
                <div class="form-group">
                  <label for="gambar">File Input</label>
                  <img src="{{asset('private/storage/app/public/gambar/'.$movie->gambar)}}" width="80" id="showgambar">
                  <input type="file" name="gambar" class="form-control" id="inputgambar">

                  <p class="help-block">Ukuran Gambar 10mb.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button> || 
                <button type="submit" class="btn btn-danger">Batal</button>
              </div>
            </form>
          </div>
  </section>
       <!-- /.content -->
@stop

@section('js')
<script type="text/javascript">
    
    function readURL(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function (e){
                $('$showgambar').attr('src', e.target.result);
            }

            reader.readAsDataUrl(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>