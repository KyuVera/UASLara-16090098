@extends('Admin.template.home')

@section('content')

<section class="content-header">
    <h1>Movie List</h1>
    <ol class="breadcrumb">
      <li><a href="movielist"><i class="fa fa-home"></i>Home</a></li>
    </ol>
  </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                @method('PATCH')
                @include('flash')
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($artikel as $datartikel)
                  <?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$datartikel->judul}}</td>
                  <td>{{$datartikel->isi}}</td>
                  <td><img src="{{asset('private/storage/app/public/gambar/'.$datartikel->gambar)}}" width="80"></td>
                        <td><a href="{{route('ArtikelList.edit', $datartikel->id)}}" class="btn btn-primary" style="width: 65px;">Edit</a>  
                          <br><br>
                          <a href="{{route('HapusArtikel', $datartikel->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    @stop