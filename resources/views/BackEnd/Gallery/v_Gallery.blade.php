@extends('StructureView')

@section('title','Manage Gallery')
@section('page-title',  'Manage Gallery')
@section('page-wrap')
<div class="col-5">
  <h4 class="page-title">Gallery</h4>
  <div class="d-flex align-items-center">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
              <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Manage Gallery</h1>
            </div>
          </div>

          <div class="row">
              <div class="col">
                  <form action="" method="get" class="form-group">
                      <label for="">Upload Gambar Untuk Gallery</label>
                      <input type="file" name="" id="img" multiple class="form-control" onchange='readURL(event)'> <br>
                      <img  id='output' src="#" width="120px" alt="your image" />
                      <script>
                          var readURL= function(event) {
                            var input = event.target;

                            var reader = new FileReader();
                            reader.onload = function(){
                              var dataURL = reader.result;
                              var output = document.getElementById('output');
                              output.src = dataURL;
                            };
                            reader.readAsDataURL(input.files[0]);
                          };
                        </script>
                      <button type="submit" class="btn btn-primary mt-2">Upload</button>
                  </form>
              </div>
          </div>

          <div class="row mt-2">
              <div class="col-md">
              <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>
            <div class="col-md">
                <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>
            <div class="col-md">
                <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
                <a href="" class="btn btn-danger mt-2">Hapus</a>
            </div>     
          </div>   

          <div class="row mt-2">
            <div class="col-md">
              <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>
          <div class="col-md">
              <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>
          <div class="col-md">
              <img src="{{asset('BackEnd/assets/img/gallery/gallery-1-600x400.jpg')}}" alt="..." class="img-thumbnail" width="200px" height="200px"><br>
              <a href="" class="btn btn-danger mt-2">Hapus</a>
          </div>     
        </div> 
          
          
        </div>
     </div>
</div>
@endsection

