@extends('StructureView')

@section('title','Manage Gallery')
@section('page-title',  'Manage Gallery')

@section('content')
<div class="col-xl-12">
    <div class="card  shadow">   
        <div class="card-body">
          <div class="row">
            <div class="col d-flex justify-content-center mt-2">
              <h1>Manage Story</h1>
            </div>
          </div>

          <div class="row">
              <div class="col">
                  <form action="" method="get" class="form-group">
                      <label for="">Upload Gambar Untuk Gallery</label>
                      <input type="file" name="" id="" class="form-control">
                  </form>
              </div>
          </div>

          <div class="row mt-2">
              <div class="col-md">
                <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>
            <div class="col-md">
                <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>
            <div class="col-md">
                <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>     
          </div>   

          <div class="row mt-2">
            <div class="col-md">
              <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>
          <div class="col-md">
              <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>
          <div class="col-md">
              <img src="assets/img/gallery/gallery-1-600x400.jpg" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>     
        </div> 
          
          
        </div>
     </div>
</div>
@endsection