<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #242d5e;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #242d5e;">
        <a class="navbar-brand brand-logo" href="{{('tableaudebord')}}"><img src="{{asset('assets/img/logo/jobbenin.png')}}" style="height:50%;" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{('tableaudebord')}}"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
              <a href="{{'/addadmin'}}">
              <button type="button" class="btn btn-info font-weight-bold">+ Ajouter un administrateur</button>

              </a>
            </li>
        
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Parametres</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profil
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Deconnexion
              </a>
            </div>
          </li>
        
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #242d5e;">
      
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{('/tableaudebord')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Utilisateurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column ">
                <li class="nav-item"> <a class="nav-link" href="{{('/recruteur')}}">Recruteurs</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('/postulant')}}">Postulants</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('/freelancera')}}">Freelancers</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Offres</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="basic">
              <ul class="nav flex-column ">
              <li class="nav-item"> <a class="nav-link" href="{{('/touteslesoffres')}}">Toutes les Offres</a></li>
             <li class="nav-item"> <a class="nav-link" href="{{('/nouvelpub')}}">Demandes de publications</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('/offremodif')}}">Offres modifiées</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('/offresignal')}}">Offres signalées</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/transaction')}}">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Transactions</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#a" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Administrateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="a">
              <ul class="nav flex-column ">
                <li class="nav-item"> <a class="nav-link" href="{{('/adminj')}}"> Liste Administrateur </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('/addadmin')}}"> Ajouter un Administrateur</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>