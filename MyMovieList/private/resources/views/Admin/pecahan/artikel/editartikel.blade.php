@extends('Admin.template.home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Artikel
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('MovieList.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Artikel</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('ArtikelList.update', $artikel->id)}}" enctype="multipart/form-data" method="POST">
            	@include('flash')
              {!! csrf_field() !!}
              @method('PATCH')

              <div class="box-body">
                <div class="form-group">
                  <label for="judul">judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul" value="{{$artikel->judul}}">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <textarea type="text" class="form-control" name="isi" style="width: 1065px; height: 250px;">{{ $artikel->isi}}</textarea>
                </div>
                <div class="form-group">
                  <label for="gambar">File Input</label>
                  <img src="{{asset('private/storage/app/public/gambar/'.$artikel->gambar)}}" width="80" id="showgambar">
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