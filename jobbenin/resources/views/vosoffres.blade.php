@extends('templates.dashboard')

@section('document')

<main>
  <div class="container-scroller">

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
          <a class="navbar-brand brand-logo-mini" href="/">
            <img src="{{asset('assets/img/logo/logojob.png')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
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
              <a class="dropdown-item" href=" {{('profilpostulant')}}">
               </i> Mon Profil</a>

              <a href="{{ route('logout') }}" class="dropdown-item"  class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

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
          <p class="settings-heading">TONS DE LA BARRE LATTERALE</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">TONS DE L'ENTETE</p>
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
      

        <li class="nav-item" >
          <a class="nav-link" href="{{('profilpostulant')}}">  
            <i class="icon-head" style="margin-left:6px;"></i>  
              <span class="menu-title" style="margin-left:15px;margin-top:7px"> Mon Profil</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{('vosoffres')}}">
            <i class="mdi mdi-alarm menu-icon"></i>
              <span class="menu-title">Vos Offres</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('recommandation')}}">
            <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title">Offres Recommandées</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('entretienpostulant')}}">
            <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title">Vos Entretiens</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" class="dropdown-item" class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i  class="dropdown-item-icon mdi mdi-power text-primary me-2" ></i>
            <span class="menu-title">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
      <h2 class="welcome-text">Salut, <span class="text-black fw-bold">{{ $user->name }}</span></h2>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
             
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 

                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Vos Offres</h4>
                                  </div>
                                 
                                </div>
                                <div class="table-responsive  mt-1">
<table class="table select-table">
  <thead>
    <tr>
      <th>Entreprise</th>
      <th>Statut</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($offres as $offre)
        <tr>
            <td>
                <div class="d-flex">
                <img src="{{ asset('storage/photoslogo/' . $offre['user']['logo_entreprise'] )}}" alt="Logo Entreprise" class="avatar">
                                           
                    <div>
                        <a class="monlien" href="" style="text-decoration:none">
                            </a>
                            <a class="monlien" href="" style="text-decoration:none">
                                <h6>{{ $offre['user']['name'] }}</h6>
                            </a>
                            <a class="monlien" href="" style="text-decoration:none"> 
                                <p>{{ $offre['user']['villeR'] }}</p>
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="badge badge-opacity-warning"style="font-weight:40px;font-size:13px"  ><b>{{ $offre['statut'] }}</b></div>
                </td>
                <td>
                    <div class="template-demo mt-4">
                    <a href="{{ route('detail_offre', $offre['id']) }}">
                      <button type="button" class="btn btn-success" 
                      style="color:white;background-color: green;font-weight:40px;font-size:13px" >Voir+</button></a>
                               
                  <a href="{{ route('supprimer_offre', $offre['id']) }}">
                            <button type="button" class="btn btn-success" style="color:white;background-color: red;font-weight:40px;font-size:13px" >Supprimer</button>
                        </a>
                    </div>
                </td>
            </tr>
    @endforeach
 </tbody>

</table>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Jobbenin.</span>
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
