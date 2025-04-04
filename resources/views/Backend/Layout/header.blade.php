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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{url('Backend/Assests/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('Backend/Assests/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('Backend/Assests/assets/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{url('Backend/Assests/plugins/pace/pace.css')}}" rel="stylesheet">
    <link href="{{url('Backend/Assests/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{url('Backend/Assets/plugins/DataTables/datatables.min.css')}}" rel="stylesheet">   
    <link href="{{url('Backend/Assests/css/main.min.css')}}" rel="stylesheet">
    <link href="{{url('Backend/Assests/css/custom.css')}}" rel="stylesheet">
</head>

@if(!session()->has('Adminid'))
    <script>
        window.location.href = "{{ route('admin.login') }}";
    </script>
@endif