<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job_Benin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JobBenin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/base/vendor.bundle.base.css')}}">


  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/admin/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">


  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
</head>
<body>
@include('Admin.components.adminheader')


@yield('document')

@include('Admin.components.adminfooter')


  <!-- base:js -->
  <script src="{{asset('assets/admin/vendors/base/vendor.bundle.base.js')}}"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>

  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>
</body>
</html>