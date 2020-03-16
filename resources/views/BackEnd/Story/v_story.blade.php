@extends('StructureView')


@section('title','Manage Story')
@section('page-title', 'Story')
@section('content')
<div class="col-lg">
    <div class="card  shadow">   
        <div class="card-body">
          <div class="row">
            <div class="col d-flex justify-content-center mt-2">
              <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Manage Story</h1>
            </div>
          </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
            
                              <form role="form" action="" method="post" enctype="multipart/form-data">
                              <div class="box-body">
            
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                          <label for="exampleInputFile">Title 1</label>
                                          <input type="text" class="form-control" name="title1" value="">
            
                                          <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                          <label for="exampleInputFile">Keterangan Judul</label>
                                          <input type="text" class="form-control" name="title2" value="">
            
                                          <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                    </div>
                                </div>     
            
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Judul Kisah</label>
                                          <input type="text" name="judul" value="" class="form-control" placeholder="Judul">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Tanggal</label>
                                          <input type="text" name="tanggal" class="form-control" value="" placeholder="18 DECEMBER 2020">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Keterangan</label>
                                          <textarea name="keterangan" class="form-control" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputFile">Gambar input</label>
                                          <input type="file" name="image" id="exampleInputFile">
            
                                          <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                    </div>
                                </div>
            
                              </div>
                              <!-- /.box-body -->
            
                              <div class="box-footer">
                                <button type="submit" class="btn btn-block btn-primary">Tambah Cerita</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </div>
            
            
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <center><h3></h3></center>
                        </div>
                        <div class="box-body">
                          <img class="img-responsive pad mt-2 mb-3" src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" style="width: 150px;" alt="Photo">
            
                              <form role="form" action="" class="mt-4" method="post" enctype="multipart/form-data">
                              
                              <div class="box-body">
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Judul</label>
                                  <input type="text" name="judul" value="" class="form-control" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Tanggal</label>
                                  <input type="text" name="tanggal" class="form-control" value="" placeholder="Ex: DECEMBER 25, 2015">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Keterangan</label>
                                  <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Ganti Gambar Banner</label>
                                  <input type="file" name="image" id="exampleInputFile">
            
                                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                              </div>
                              <!-- /.box-body -->
            
                              <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="" class="btn btn-danger btn-hapus" style="float: right;">Hapus</a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <center><h3></h3></center>
                        </div>
                        <div class="box-body">
                          <img class="img-responsive pad mt-2 mb-3" src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" style="width: 150px;" alt="Photo">
            
                              <form role="form" action="" method="post"  class="mt-4" enctype="multipart/form-data">
                              
                              <div class="box-body">
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Judul</label>
                                  <input type="text" name="judul" value="" class="form-control" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Tanggal</label>
                                  <input type="text" name="tanggal" class="form-control" value="" placeholder="Ex: DECEMBER 25, 2015">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Keterangan</label>
                                  <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Ganti Gambar Banner</label>
                                  <input type="file" name="image" id="exampleInputFile">
            
                                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                              </div>
                              <!-- /.box-body -->
            
                              <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="" class="btn btn-danger btn-hapus" style="float: right;">Hapus</a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-header">
                            <center><h3></h3></center>
                        </div>
                        <div class="box-body">
                          <img class="img-responsive pad mt-2 mb-3" src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="Photo"style="width: 150px;">
            
                              <form role="form" action="" method="post"  class="mt-4" enctype="multipart/form-data">
                              
                              <div class="box-body">
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Judul</label>
                                  <input type="text" name="judul" value="" class="form-control" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Tanggal</label>
                                  <input type="text" name="tanggal" class="form-control" value="" placeholder="Ex: DECEMBER 25, 2015">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Keterangan</label>
                                  <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Ganti Gambar Banner</label>
                                  <input type="file" name="image" id="exampleInputFile">
            
                                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                              </div>
                              <!-- /.box-body -->
            
                              <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="" class="btn btn-danger btn-hapus" style="float: right;">Hapus</a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
     </div>
</div>
@endsection