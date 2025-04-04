@extends('Backend.Layout.main')
@section('content')
    <body class="page-sidebar-collapsed">

        <div class="page-container">
          </div>
            <div class="page-content">
              <a href="/admin/product/create" class="btn btn-outline-success">Add</a>
              
                <div class="main-wrapper">
                  <div class="row">
                    <div class="col-sm-12 col-md-4">
                      @foreach($products as $product)
                      <div class="card">
                        <img src="{{url('uploads/products/'.$product->Image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->Name}}</h5>
                          <p class="card-text">{{$product->Description}}</p>
                          <p class="card-text">{{$product->Price}}</p>
                          <a href="{{url('admin/product/'.$product->Id.'/edit')}}" class="btn btn-outline-success">Edit</a>
                          <a href="{{url('admin/product/'.$product->Id.'/delete')}}" class="btn btn-outline-danger">Delete</a>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                </div>
              </div>
    </body>
</html>
@endsection