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


          <li class="nav-item dropdown d-none d-lg-block postulant-dropdown">
            <a class="nav-link" id="postulantDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
             
            <img  class="img-xs rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
              <img src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" 
              alt="Logo Entreprise" class="img-md rounded-circle" >

                <p class="mb-1 mt-3 font-weight-semibold">{{$user->name }}</p>
                <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
              </div>
              <a class="dropdown-item" href="{{ route('profilrecruteur', ['id' => $user->id]) }}">
            <i class="mdi mdi-account menu-icon"></i>
            Mon Profil
          </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout menu-icon"></i> Déconnexion</a>

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
l;


        </ul>
      </nav>
<div class="main-panel">
    <div class="content-wrapper" style="font-size: 5px;color:black">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
               <u> <h4 class="card-title" style="font-size: large;">Detail :  Poste  ({{ $poste }} )</h4></u>
                  
                    <br><br>
                    <div class="row">
                        <div class="col-md-5">
                            <address>
                            <p style="font-size: large;">
                                   Nom du Candidat
                                    </p>
                                <p class="font-weight-bold" style="font-size: large;"> {{ $postulant->name }}</p>
                              
                                <br><br><br>
                                <address class="text-primary">
                                    <p class="font-weight-bold">
                                        E-mail
                                    </p>
                                    <p class="mb-2">
                                        {{ $postulant->email }}
                                    </p>
                                    <br><br>
                                </address>
                            </address>
                        </div>
                  
                        <div class="col-md-6 grid-margin stretch-card" style="">
                     
                            <div class="card">
                
                                <div class="card-body font-weight-bold">
                                <p style="font-size: large;">
                                       Lettre de motivation
                                    </p>
                                    <p>
                                    <p> <a href="{{ asset('storage/lettre_motivation/' . $lettreMotivation) }}" 
                                    target="_blank" style="color: blue; text-decoration: underline;">Consulter la Lettre de Motivation</a>
                                  </p>

                                    <p style="font-size: large;">
                                     Curriculum Vitae
                                    </p>
                                <p>   
                             
                           
                                <a href="{{ asset('storage/cv/' . $cv) }}" target="_blank"
                                 style="color: blue; text-decoration: underline;">Consulter le CV</a>
                                                           
                                                  </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
<table>     
  <tr>


  <td>
 
    <a href="{{ route('detailpostulant.selection',['id_user' => $postulantid,'id_offre' => $postulantoffre])}}" class="btn btn-primary btn-lg btn-block" style="background-color: green;color:white;">Sélectionner</a>


  </td>
    <td>
  <a href="{{ route('detailpostulant.supprimerpostulant',['id_user' => $postulantid,'id_offre' => $postulantoffre]) }}">
    <button type="submit" name="supprimer" class="btn btn-primary btn-lg btn-block" style="background-color: red;color:white;">Désintéresser</button>
  </a>

</td> 

  </tr>
</table>

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
      </div>
    </div>
  </div>
</main>

    @endsection