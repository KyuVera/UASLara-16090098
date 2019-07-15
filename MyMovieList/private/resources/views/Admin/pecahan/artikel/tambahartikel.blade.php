@extends('Admin.template.home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Artikel
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('MovieList.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Artikel</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('ArtikelList.store')}}" enctype="multipart/form-data" method="POST">
              @include('flash')
              {!! csrf_field() !!}

              <div class="box-body">
                <div class="form-group">
                  <label for="judul">judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                  <label for="isi">Sinposis</label>
                  <textarea type="text" class="form-control" name="isi" placeholder="Masukan isi" style="width: 1210px; height: 250px;"></textarea>
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