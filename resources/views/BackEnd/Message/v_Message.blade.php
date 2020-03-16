@extends('StructureView')


@section('title','Message')
@section('page-title', 'Greeting Message')

@section('page-wrap')
<div class="col-5">
  <h4 class="page-title">Message</h4>
  <div class="d-flex align-items-center">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Message</li>
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
              <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">greeting message</h1>
            </div>
          </div>

          <div class="row">
              <div class="col">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>

          
          
        </div>
     </div>
</div>
@endsection