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
                                    <h5 class="card-title">Update Admin</h5>
                                    <form action="{{url('admin/admin/'.$admin->Id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="Name" name="Name" value="{{$admin->Name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="Username" name="Username"value="{{$admin->Username}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="Email" name="Email" value="{{$admin->Email}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="Password" name="Password" value="{{$admin->Password}}">
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
