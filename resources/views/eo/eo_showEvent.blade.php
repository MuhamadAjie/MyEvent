@extends('eo.eo_base')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul Event</th>
                  <th>Kategori</th>
                  <th>Deskripsi</th>
                  <th>Alamat</th>
                  <th>Tanggal Event</th>
                  <th>Jam Event</th>
                  <th>Kuota</th>
                  <th>Harga Tiket</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($show as $return)
                <tr>
                  <td>{{$return->judul}}</td>
                  <td>{{$return->kategori}}</td>
                  <td>{{$return->deskripsi}}</td>
                  <td>{{$return->alamat}}</td>
                  <td>{{$return->tgl_mulai}}</td>
                  <td>{{$return->jam_event}}</td>
                  <td>{{$return->kuota_peserta}}</td>
                  <td>{{$return->harga_tiket}}</td>
                </tr>
                	@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
