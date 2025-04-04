@extends('Backend.Layout.main')
@section('content')

    <body class="page-sidebar-collapsed">

        <div class="page-container">
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update Product</h5>
                                    <form action="{{ url('/admin/product/'.$product->Id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="Name" name="Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="Description" name="Description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Price</label>
                                            <input type="number" class="form-control" id="Price" name="Price">
                                        </div>
                                        <div class="mb-3">
                                          <label for="formFile" class="form-label">Image</label>
                                          <input class="form-control" type="file" id="Image" name="Image">
                                        </div>
                                        <div class="mb-3">
                                          <label for="formFile" class="form-label">Category</label>
                                          <select class="form-select" id="Categoryid" name="Categoryid">
                                            @foreach($categories as $category)
                                                        <option value="{{ $category->Id }}">{{ $category->Name }}</option>
                                                    @endforeach
                                          </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
