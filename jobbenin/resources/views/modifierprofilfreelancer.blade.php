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
          <a class="navbar-brand brand-logo-mini"href="{{('vosoffres')}}">>
            <img src="" alt="">
          </a>
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
                <p class="mb-1 mt-3 font-weight-semibold">AKP DJEM</p>
                <p class="fw-light text-muted mb-0">DjemiDjemi@gmail.com</p>
              </div>
              <a class="dropdown-item" href=" {{('profilfreelancer')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile<span class="badge badge-pill badge-danger">1</span></a>
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
            <a class="nav-link" href="{{('dashboardfreelancer')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tableau De Bord</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{('dashboardfreelancer')}}">
            <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title"> Publicité</span>
            </a>
          </li>
      
        </ul>
      </nav>
			<!-- partial -->
				
						
      <form action="" method="POST">
                                <div class="container rounded bg-white mt-5 mb-5">
			        <div>	<h2 style="color:#da2461;text-align:center;padding-top:10px;left:50px"> Modifier Vos Informations</h2></div>
            
            

						<div class="col-md-10 border-right">
							<div class="row mt-6" style="">
								
								<div class="col-md-12">
                                <input class="fname" type="text" name="name" placeholder="Nom Complet" />
                                 <input class="fname" type="text" name="email" placeholder="Email" /> <br>
                        
                                 <div>	<h2 style="color:#da2461;text-align:center;padding-top:10px"> Completer votre profil</h2></div>
                  <div class="col-md-12">
                    	<select name="sexe" id="" class="fname">
                  <option selected>Sexe</option>
										<option value="F">Féminin</option>
										<option value="M">Masculin</option>
									</select>
                  <br> <br>
                  </div>
								
								</div>
                <div class="col-md-12"><input type="text" name="service_freelancer" placeholder="Entrez Vos Services" value="" /></div>
								<div class="col-md-12"><input type="text" name="contact_freelancer" placeholder="Entrez Votre Numéro de Telephone" value="" /></div>
						
							 </div>
					
                        
									<textarea name="description_recruteur" id="" cols="34" rows="10" placeholder="Décrivez-vous en quelques lignes"></textarea>
								
									<br />
						     <textarea name="competence_freelancer" id="" cols="33" rows="10" placeholder="Compétences"></textarea>
							    <button type="" href="">Sauvegarder</button>
          </form>
		</div>
	</div>

	<!-- page-body-wrapper ends -->
</main>
@endsection
