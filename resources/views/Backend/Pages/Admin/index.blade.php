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
                                    <h5 class="card-title">Admin Table</h5>
                                    <a href="/admin/admin/create" class="btn btn-outline-success">Add</a>
                                    <table id="zero-conf" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->Name }}</td>
                                                    <td>{{ $admin->Username }}</td>
                                                    <td>{{ $admin->Email }}</td>
                                                    <td>{{ $admin->Password }}</td>
                                                    <td>
                                                        <a href="{{url('admin/admin/'.$admin->Id.'/edit')}}" class="btn btn-outline-success">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('admin/admin/'.$admin->Id.'/delete')}}" class="btn btn-outline-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
