<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/neo/theme/templates/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2024 12:57:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neo - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
    <link href="{{ url('Backend/Assests/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('Backend/Assests/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('Backend/Assests/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ url('Backend/Assests/plugins/pace/pace.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ url('Backend/Assests/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ url('Backend/Assests/css/custom.css') }}" rel="stylesheet">
</head>

<body class="login-page">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                        </div>
                        <div class="authent-text">
                            <p>Register</p>
                            <p>Enter your details to create your account</p>
                        </div>
                        <form action="{{url('/admin/register/store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Name" id="Name" name="Name">
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Username" id="Username" name="Username">
                                    <label for="floatingInput">User name</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput1"
                                        placeholder="name@example.com" id="Email" name="Email">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" id="Password" name="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs">Register</button>
                            </div>
                        </form>
                        <div class="authent-login">
                            <p>Already have an account? <a href="/login">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
