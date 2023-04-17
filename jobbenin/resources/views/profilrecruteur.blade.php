@extends('templates.dashboard')

@section('document')

<main>

  <div class="container-scroller">


    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/">
            <img src="{{asset('assets/img/logo/logojob.png')}}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Salut, <span class="text-black fw-bold">{{ $user->name }}</span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>


          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
              </div>
              <a class="dropdown-item" href=" {{ route('profilrecruteur', ['id' => $user->id]) }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="{{('annonce')}}">
              <i class="mdi mdi-rename-box menu-icon"></i>
              <span class="menu-title">Vos Annonces</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('attentecv')}}">
              <i class="mdi mdi-alarm menu-icon"></i>
              <span class="menu-title">CV en Attente</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('selectioncv')}}">
              <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title">CV Sélectionnés</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('entretien')}}">
              <i class="mdi mdi mdi-amplifier menu-icon"></i>
              <span class="menu-title">Entretiens passés</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('brouillon')}}">
              <i class="mdi mdi-archive menu-icon"></i>
              <span class="menu-title">Brouillons</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="row">
          <div class="col-9 ">
            <h4 class="infoo">Vos informations</h4>
          </div>
          <div class="col-3 pa">
            <p>
              <button class="button1" data-modal="modal-mod">Modifier vos informations</button>
            </p>
          </div>
        </div>

        <div class="information">
          <h4>Nom de votre Entreprise</h4>
          <h5>{{ $user->name }}</h5> <br>
          <h4>Ville</h4>
          <h5>{{ $user->villeR }}</h5> <br>
          <h4>Email</h4>
          <h5>{{ $user->email }}</h5><br>
          <h4>Description</h4>
          <h5 style="width: 200px;height:100px;">{{ $user->description_recruteur }}</h5>

        </div>
        <div id="modal-mod" class="modal1">
          <div class="modal1-content">
            <div class="contact-form">
              <a class="close">x</a>
              <form action=" {{route('recruteur.update',['id' => $user->id])}}" method="POST" class="form1">
              <h2>Modifier les informations</h2>

                @csrf 
                @method('PUT')

                <div>
                  <input class="fname" type="text" name="name" value="{{ $user->name }}"/> <br><br>
                  <input class="fname" type="text" name="villeR"  value="{{ $user->villeR }}" /> <br><br>
                  <input class="fname" type="text" name="email" value="{{ $user->email }}" /> <br><br>
                </div> 
                <span>Description</span>
                <div>
                  <textarea class="fname" name="description_recruteur" rows="4" >{{ $user->description_recruteur }}</textarea>
                </div>
                <button type="submit" href="">Envoyer</button>
              </form>
            </div>
          </div>
        </div>
        <script>
          let modalBtns = [...document.querySelectorAll(".button1")];
          modalBtns.forEach(function(btn) {
            btn.onclick = function() {
              let modal1 = btn.getAttribute("data-modal");
              document.getElementById(modal1).style.display = "block";
            };
          });
          let closeBtns = [...document.querySelectorAll(".close")];
          closeBtns.forEach(function(btn) {
            btn.onclick = function() {
              let modal1 = btn.closest(".modal1");
              modal1.style.display = "none";
            };
          });
          window.onclick = function(event) {
            if (event.target.className === "modal1") {
              event.target.style.display = "none";
            }
          };
        </script>



      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
</main>
@endsection