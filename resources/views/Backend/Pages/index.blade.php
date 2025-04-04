@extends('Backend.Layout.main')
@section('content')
    

<body class="page-sidebar-collapsed">
    <div class="page-container">
      
        <div class="page-content">
          
          <div class="main-wrapper">
            
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card stats-card">
                      <div class="card-body">
                        <div class="stats-info">
                            <h5 class="card-title">{{$totalProduct}}<span class="stats-change stats-change-success"></span></h5>
                            <p class="stats-text">Total Product</p>
                        </div>
                        <div class="stats-icon change-success">
                            <i class="material-icons">trending_up</i>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card stats-card">
                      <div class="card-body">
                        <div class="stats-info">
                            <h5 class="card-title">{{$totalCategory}}<span class="stats-change stats-change-success"></span></h5>
                            <p class="stats-text">Total Category</p>
                        </div>
                        <div class="stats-icon change-success">
                            <i class="material-icons">trending_up</i>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card stats-card">
                      <div class="card-body">
                        <div class="stats-info">
                            <h5 class="card-title">{{$totalClient}}<span class="stats-change stats-change-success"></span></h5>
                            <p class="stats-text">Total Client</p>
                        </div>
                        <div class="stats-icon change-success">
                            <i class="material-icons">trending_up</i>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card stats-card">
                      <div class="card-body">
                        <div class="stats-info">
                            <h5 class="card-title">{{$totalOrder}}<span class="stats-change stats-change-success"></span></h5>
                            <p class="stats-text">Total Order</p>
                        </div>
                        <div class="stats-icon change-success">
                            <i class="material-icons">trending_up</i>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card stats-card">
                      <div class="card-body">
                        <div class="stats-info">
                            <h5 class="card-title">{{$totalRevenue}}<span class="stats-change stats-change-success"></span></h5>
                            <p class="stats-text">Total Revenue</p>
                        </div>
                        <div class="stats-icon change-success">
                            <i class="material-icons">trending_up</i>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
@endsection