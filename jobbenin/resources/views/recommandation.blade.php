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
          <a class="navbar-brand brand-logo" href="{{('vosoffres')}}">
          <img src="{{asset('assets/img/logo/logojob.png')}}" alt="">
          </a>
          <a class="navbar-brand brand-logo-mini"href="{{('vosoffres')}}"></a>
          
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Salut, <span class="text-black fw-bold">John Doe</span></h1>
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
                <p class="mb-1 mt-3 font-weight-semibold">John Doe</p>
                <p class="fw-light text-muted mb-0">DoeJohn@gmail.com</p>
              </div>
              <a class="dropdown-item"href=" {{('profilpostulant')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile<span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"href=" {{('connexion')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se Déconnecter</a>
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
            <a class="nav-link" href="{{('dashboardpostulant')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tableau De Bord</span>
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
      
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
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
                                 

                                <section class="featured-job-area feature-padding">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 mt-10">
                <div class="section-tittle section-tittle2 text-center esp">
                    <h2>Quelques offres</h2>
                    <span >Trouvez l'emploi de vos rêves</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-xl-10 mt-120">
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img 
                            src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 7heures</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}">
                                <img src="{{asset('assets/img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 1 jour</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list3.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Ouvrier en mécanique industrielle</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Abomey-Calavi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offfre</a>
                        <span>23 Fev 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list4.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Secretaire </h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Parakou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>31 Jan 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                 <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span> 23 Dec 2022</span>
                    </div>
                </div>
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>15 Dec 2022</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                                      </div>
                                      </div>  </div>  </div>
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
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
          <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
  </div>
</main>
@endsection