@extends('StructureView')


@section('title','Manage Event')
@section('page-title', 'Event')
@section('page-wrap')
<div class="col-5">
  <h4 class="page-title">Acara</h4>
  <div class="d-flex align-items-center">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Acara</li>
          </ol>
      </nav>
  </div>
</div>
@endsection
@section('content')
<div class="col-lg">
    <div class="card  shadow">   
        <div class="card-body">
          <div class="row">
            <div class="col d-flex justify-content-center mt-2">
              <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Manage Acara</h1>
            </div>
          </div>
            <form action="" method="post">
              
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" name="title" value="" class="form-control justify-content-center" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <center><h3>Jadwal Akad</h3></center>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                  <center><label for="exampleInputEmail1">Nama Acara</label></center>
                                  <input type="text" name="nama" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Jam Mulai</label></center>
                                          <input type="time" name="jam1" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Jam Akhir</label></center>
                                          <input type="time" name="jam2" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Tanggal - Hari</label></center>
                                          <input type="text" name="tanggal1" value="" class="form-control" id="exampleInputEmail1" placeholder="Tanggal-Bulan-Tahun">
                                        </div>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                  <center><label for="exampleInputEmail1">Keterangan</label></center>
                                  <textarea class="form-control" name="keterangan" rows="10"></textarea>
                                </div>
                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <center><h3>Jadwal Respsi</h3></center>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                  <center><label for="exampleInputEmail1">Nama Acara</label></center>
                                  <input type="text" name="namaa" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Jam Mulai</label></center>
                                          <input type="time" name="jam11" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Jam Akhir</label></center>
                                          <input type="time" name="jam22" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <center><label for="exampleInputEmail1">Tanggal</label></center>
                                          <input type="text" name="tanggal11" value="" class="form-control" id="exampleInputEmail1" placeholder="Tanggal-Bulan-Tahun">
                                        </div>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                  <center><label for="exampleInputEmail1">Keterangan</label></center>
                                  <textarea class="form-control" name="keterangann" rows="10"></textarea>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="box">
                        <div class="box-footer">
                            <button type="submit" class="btn btn-block btn-info pull-right">Update</button>
                        </div>
                    </div>
                </div>
                </form>
          </div>
     </div>
</div>
@endsection