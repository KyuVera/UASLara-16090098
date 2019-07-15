@extends('Admin.template.home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Movie
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('MovieList.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Movie</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Movie</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('MovieList.store')}}" enctype="multipart/form-data" method="POST">
              @include('flash')
              {!! csrf_field() !!}

              <div class="box-body">
                <div class="form-group">
                  <label for="movie">Judul Movie</label>
                  <input type="text" class="form-control" name="movie" placeholder="Masukan Judul Movie">
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinposis</label>
                  <textarea type="text" class="form-control" name="sinopsis" placeholder="Masukan Sinopsis" style="width: 1210px; height: 250px;"></textarea>
                </div>
                <div class="form-group">
                  <label for="genre">Genre</label>
                  <input type="text" class="form-control" name="genre" placeholder="Masukan Genre">
                </div>
                <div class="form-group">
                  <label for="tanggal_rilis">Tanggal Rilis</label>
                  <input type="date" class="form-control" name="tanggal_rilis" placeholder="Masukan Tanggal Rilis">
                </div>
                <div class="form-group">
                  <label for="rating_usia">Rating Usia</label>
                  <input type="text" class="form-control" name="rating_usia" placeholder="Masukan Rating Usia">
                </div>
                <div class="form-group">
                  <label for="gambar">Masukan Gambar</label>
                  <input type="file" name="gambar">

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