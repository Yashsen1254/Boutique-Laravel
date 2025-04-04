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
                                    <h5 class="card-title">Client Table</h5>
                                    <table id="zero-conf" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($clients as $client)
                                          <tr>
                                              <td>{{$client->Name}}</td>
                                              <td>{{$client->Username}}</td>
                                              <td>{{$client->Email}}</td>
                                              <td>{{$client->Password}}</td>
                                          </tr>
                                      @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
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
