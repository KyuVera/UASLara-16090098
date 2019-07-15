@extends('Admin.template.home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="container" style="margin-left: 180px;">
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            
              <h3>{{ $movie_jumlah }}<sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Movie</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route ('MovieList.index') }}" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $artikel_jumlah }}<sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Artikel</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route ('ArtikelList.index') }}" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$user_jumlah}}</h3>

              <p>Pengunjung</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.box -->

    </section>
       <!-- /.content -->
       </div>
@stop