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
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{asset('assets/img/logo/logojob.png')}}" alt="logo">
              </div>
              <h4>Bienvenue</h4><br><br>
              @error('email')
                                <span role="alert" class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('password')
                                <span role="alert" class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              <form class="pt-3" method="POST" action="{{'connexionadmin'}}">
                @csrf
                <div class="form-group">
                    
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    
                    <input name="email" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Mot de Passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Mot de passe">                        
                  </div>
                </div>
             
                <div class="my-3">
                    <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Se connecter</button>
                </div>
             
                
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023  Tous droits réservés.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

    
  </body>
  <!-- container-scroller -->
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