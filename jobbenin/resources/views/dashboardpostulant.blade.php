@extends('templates.app')

<header>
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
     
        <div>
          <a class="navbar-brand brand-logo" href="{{route('dashboardpostulant')}}">
            <img src="images/logojob.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboardpostulant')}}">
            <img src="" alt="">
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Bienvenue, <span class="text-black fw-bold">AKP Djemi</span></h1>
           
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
       
         
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" 
          src="{{asset('assets/img/team/person.jpg')}} " >
              </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-xs rounded-circle"
                src="{{asset('assets/img/team/person.jpg')}} " >
                <p class="mb-1 mt-3 font-weight-semibold">AKP Djemi</p>
                <p class="fw-light text-muted mb-0">Djemidjemi@mail.com</p>
              </div>
              <a class="dropdown-item" href="profil.html"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile <span class="badge badge-pill badge-danger">1</span></a>
            
              <a class="dropdown-item" href="index.html"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se Déconnecter</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
</header>
 
<main>

  <div class="container-scroller">
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">TONS DE LA BARRE LATTERALE</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3">

          </div>CLAIR</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3">

          </div>SOMBRE</div>
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
            <a class="nav-link" href="{{route('dashboardpostulant')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Offres En Attente</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('recommandationpostulant')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Offres Recommandées</span>
            </a>
          </li>
         </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="text-align: center;">
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
                                    <h4 class="card-title card-title-dash">Offres En Attente</h4>
                                   <p class="card-subtitle card-subtitle-dash">7 Offres en Attentes</p>
                                  </div>
                               
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Entreprise</th>
                                        <th>Poste</th>
                                        <th>Date D'Annonce</th>
                                        <th>Statuts</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                <h6>Creative Agency  </h6></a>
                                              <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              
                                                <a class="monlien" href="job_details.html"style="text-decoration:none">
                                                  <h6>Creative Agency  </h6></a>
                                                <a class="monlien" href="job_details.html"style="text-decoration:none"> 
                                                  <p>Porto Novo</p> </a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Developeur Mobile</h6>
                                          <p>Temps Partiel</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success"> 12-02-2022</p>
                                              
                                            </div>
                                           
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">En Cours</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                       
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        
              
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
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 </main>
 <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">JobBénin <a href=""></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
          </div>
        </footer>