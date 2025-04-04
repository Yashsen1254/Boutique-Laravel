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
                                    <h5 class="card-title">Category Table</h5>
                                    <table id="zero-conf" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Client Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($checkouts as $checkout)
                                          <tr>
                                              <td>{{ $checkout->Name }}</td>
                                              <td>{{ $checkout->Mobile }}</td>
                                              <td>{{ $checkout->Email }}</td>
                                              <td>{{ $checkout->Address }}</td>
                                              <td>
                                                  {{$checkout->Cartid->clientid->name}}
                                              </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Client Name</th>
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
