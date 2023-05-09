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
                            <img class="img-xs rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

                                    <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                                    <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
                                </div>
                                <a class="dropdown-item" href=" {{ route('profilrecruteur', 
                ['id' => $user->id]) }}">
                                    Mon Profil</a>

                                <a href="{{ route('logout') }}" class="dropdown-item" class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                <li class="nav-item">
            <a class="nav-link" href=" {{ route('profilrecruteur', 
                ['id' => $user->id]) }}">
                <i class="icon-head" style="margin-left:6px;"></i>  
              <span class="menu-title" style="margin-left:15px;margin-top:7px"> Mon Profil</span>
            </a>
          </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/annonce')}}">
                            <i class="mdi mdi-rename-box menu-icon"></i>
                            <span class="menu-title">Vos Annonces</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/attentecv')}}">
                            <i class="mdi mdi-alarm menu-icon"></i>
                            <span class="menu-title">CV en Attente</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/selectioncv')}}">
                            <i class="mdi mdi-clipboard-check menu-icon"></i>
                            <span class="menu-title">CV Sélectionnés</span>
                        </a>
                    </li>
                    <li class="nav-item">
  <a class="nav-link" href="{{('/entretiencreate')}}">
    <i class="mdi mdi-calendar-plus menu-icon"></i>
    <span class="menu-title">Entretiens programmés</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{('/entretien')}}">
    <i class="mdi mdi-calendar-check menu-icon"></i>
    <span class="menu-title">Entretiens passés</span>
  </a>
</li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{('/publicite')}}">
                            <i class="mdi mdi-archive menu-icon"></i>
                            <span class="menu-title">Publicité</span>
                        </a>
                    </li>

                    <li class="nav-item">
  <a class="nav-link" href="{{ route('logout') }}" class="dropdown-item" class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="mdi mdi-logout menu-icon"></i>
    <span class="menu-title">Déconnexion</span>
  </a>
</li>
                </ul>
            </nav>
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
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                     
                                                                        <u><h2 style="color:#242b5e;text-align:center">Programmer un entretien</h2></u>
                                                                        <div class="row">
                                                                        <div class="col-lg-8 col-md-8">
                                                                    
                                                                            <form method="post" action="{{route('programmer', ['id' => $id, 'offreid' => $offreid]) }}">
                                                                            @csrf
                                                                            <div class="mt-10">
                                                                                    <label>Sujet :</label>

                                                                                    <input type="text" name="topic" placeholder="ex:entretien" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ex:entretien'" required class="single-input">
                                                                                </div> <br>
                                                                                <div class="mt-10">
                                                                                    <label>Date et heure :</label>
                                                                                    <input type="datetime-local" name="start_time" placeholder="Date et heure" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date et heure'" required class="single-input">
                                                                                </div> <br>
                                                                                <div class="mt-10">
                                                                                    <label>Durée (en minutes) :</label>
                                                                                    <input type="number" name="duration" value="60" min="1" max="1440" placeholder="Durée" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Durée'" required class="single-input">
                                                                                </div> <br>

                                                                                <div class="input-group-icon mt-10">
                                                                                    <div aria-hidden="true"></div>
                                                                                    <label>Zone horaire :</label>

                                                                                    <div  id="default-select">

                                                                                        <select name="timezone">
                                                                                            <option value="Europe/Paris">UTC+1</option>
                                                                                           
                                                                                        </select>
                                                                                    </div> <br><br>
                                                                                </div> 

                                                                                <div class="mt-10">
                                                                                    <label>Description :</label>
                                                                                    <textarea class="single-textarea" name="agenda" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" required></textarea>
                                                                                </div> <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                    <div class="switch-wrap d-flex justify-content-between">
                                                                                    <p>Êtes-vous sûr de programmer cet entretien?</p>
                                                                                    <div class="primary-checkbox" style=" margin-top: 8px; margin-left:20px">
                                                                                        <input type="checkbox" name="host_video" value="1" id="primary-checkbox" checked>
                                                                                        <label for="primary-checkbox"></label>
                                                                                    </div>
                                                                                </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                    <div class="switch-wrap d-flex justify-content-between">
                                                                                    <p>Vous informer à l'approche de l'entretien?</p> 
                                                                                    <div class="primary-checkbox"  style=" margin-top: 8px;margin-left:20px">
                                                                                        <input type="checkbox" name="participant_video" value="1" id="primary-checkbox" checked>
                                                                                        <label for="primary-checkbox"></label>
                                                                                    </div>
                                                                                </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <button type="submit" class="genric-btn primary e-large">Programmer</button>

                                                                              
                                                                            </form>
                               
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
</main>
@endsection