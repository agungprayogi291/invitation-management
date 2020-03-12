@extends('StructureView')
@section('page-title', 'Tentang Kita')
@section('title','Manage Tentang Kita')
@section('content')
<div class="col-xl-12">
    <div class="card shadow">   
   <div class="card-body">
     <div class="row">
       <div class="col d-flex justify-content-center mt-2">
         <h1>Manage Tentang Kita</h1>
       </div>
     </div>
     <div class="box">
       <div class="box-body">  
           <form role="form" action="" method="post" enctype="multipart/form-data">                   
             <div class="box-body">
               <div class="row justify-content-center">
                 <div class="col-md-4 col-md-offset-4">
                   <div class="form-group">
                     <label for="exampleInputFile">Title</label>
                     <input type="text" class="form-control" name="title" value="">

                   </div>
                 </div>
               </div>
               <div class="row justify-content-center">
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="exampleInputFile">Keterangan Singkat</label>
                     <input type="text" class="form-control" name="keterangan_judul" value="">
                   </div>
                 </div>
               </div>
               <div class="row">

                 <div class="col-md-6">
                   <center>
                     <img style="width: 150px;" class="img-responsive pad" src="" alt="Photo">
                   </center>

                   <div class="form-group">
                     <label for="exampleInputFile">Nama Penganten 1</label>
                     <input type="text" class="form-control" name="nama1" value="">

                   </div>

                   <div class="form-group">
                     <label for="exampleInputFile">Keterangan</label>
                     <textarea name="keterangan1" class="form-control" rows="10"></textarea>

                   </div>

                   <div class="form-group">
                     <label for="exampleInputFile">Ganti Gambar Penganten</label>
                     <input type="file" name="gambar1" id="exampleInputFile">

                   </div>
                 </div>

                 <div class="col-md-6">
                   <center>
                     <img style="width: 150px;" class="img-responsive pad" src="" alt="Photo">
                   </center>

                   <div class="form-group">
                     <label for="exampleInputFile">Nama Penganten 2</label>
                     <input type="text" class="form-control" name="nama2" value="">

                   </div>

                   <div class="form-group">
                     <label for="exampleInputFile">Keterangan</label>
                     <textarea name="keterangan2" class="form-control" rows="10"></textarea>

                   </div>

                   <div class="form-group">
                     <label for="exampleInputFile">Ganti Gambar Penganten</label>
                     <input type="file" name="gambar2" id="exampleInputFile">

                   </div>
                 </div>

               </div>

             </div>
             

             <div class="box-footer">
               <button type="submit" class="btn btn-block btn-primary">Upload</button>
             </div>
           </form>
         </div>
    </div>
   </div>
 </div>
</div>
@endsection