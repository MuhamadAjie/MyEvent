@extends('eo.eo_base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Event</h3>
            </div>
            <!-- /.box-header -->
<!--            form start -->
            <form role="form" action="/CreateEvent" method="post">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Event</label>
                  <input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Masukan Judul Event">
                </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="kategori" style="width: 100%;">
                  <option value="Konser">Konser</option>
                  <option value="Seminar">Seminar</option>
                  <option value="Festival">Festival</option>
                  <option value="Bazar">Bazar</option>
                  <option value="Kajian">Kajian</option>
                  <option value="Pelatihan">Pelatihan</option>
                </select>
              </div>
              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Open Gate</label>

                  <div class="input-group">
                    <input type="text" name="jam_event" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                              <!-- Date -->
              <div class="form-group">
                <label>Tanggal event</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_mulai" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="3" placeholder="Enter ..."></textarea>
              </div>

              <div class="form-group">
                  <label>Alamat Event</label>
                  <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..."></textarea>
              </div>

              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Kuota Peserta</label>
                  <input type="text" class="form-control" name="kuota_peserta" id="exampleInputEmail1" >
                </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Harga Tiket</label>
                  <input type="text" class="form-control" name="harga_tiket" id="exampleInputEmail1" >
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <!-- /.box --> -->
 


            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection