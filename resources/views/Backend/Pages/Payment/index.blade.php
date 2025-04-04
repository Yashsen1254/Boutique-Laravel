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
                                                <th>Total Amount</th>
                                                <th>Delevered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($payments as $payment)
                                          <tr>
                                              <td>
                                                  {{$payment->ClientName}}
                                              </td>
                                              <td>
                                                  {{$payment->Totalamount}}
                                              </td>
                                              <td>Delivered</td>
                                          </tr>
                                      @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Total Amount</th>
                                                <th>Delevered</th>
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
