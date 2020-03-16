@extends('StructureView')


@section('title','Manage Banner')
@section('page-title', 'Banner')
@section('page-wrap')
<div class="col-5">
  <h4 class="page-title">Banner</h4>
  <div class="d-flex align-items-center">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Banner</li>
          </ol>
      </nav>
  </div>
</div>
@endsection
@section('content')
<div class="col-lg" >
          <div class="card shadow">
            
            <div class="card-body">
              <div class="row">
                <div class="col d-flex justify-content-center mt-2 mb-3">
                  <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Manage Banner</h1>
                </div>
              </div>
           
                <div class="row justify-content-center">

                    <div class="col-md d-flex">
                        <div class="box">
                            <div class="box-body">
                            <img class="img-responsive pad" width="160px" src="{{asset('BackEnd/assets/img/Banner/banner.jpg')}}" alt="Photo">
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="exampleInputFile">Ganti Gambar Banner</label>
                                      <input type="file" name="image" class="ml-4" id="exampleInputFile">
                                    </div>
                                  </div>
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                  </div>
                                </form>
                              </div>
                          </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md">
                  <div class="box">
                    <div class="box-body">

                        <form role="form" action="" method="post">
                       
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pengantin 1</label>
                                    <input type="text" name="nama1" value="" class="form-control" placeholder="Nama Pengantin 1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pengantin 2</label>
                                    <input type="text" name="nama2" value="" class="form-control" placeholder="Nama Pengantin 2">
                                    </div>
                                </div>
                            </div>

                              <!--<div class="form-group">
                              <label for="exampleInputPassword1">Title</label>
                              <input type="text" class="form-control" value="" name="title" placeholder="Kita akan Menikah">
                            </div>

                             <div class="form-group">
                            <label for="exampleInputPassword1">Waktu Mundur / Tanggal Acara</label>
                            <input type="text" class="form-control" value="" name="waktu_mundur" placeholder="Ex: We Are Getting Married">
                            <p class="help-block">Format : Feb 2, 2019 08:00:00</p>
                            </div> -->

                        </div>
                    

                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Update</button>
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