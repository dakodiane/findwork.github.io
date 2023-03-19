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
						<img src="{{asset('assets/img/logo/logojob.png')}}" alt="" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="{{('vosoffres')}}">
						
						
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
							<input type="text" class="form-control" />
						</div>
					</li>

					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
						<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}" alt="Profile image" /> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}" alt="Profile image" />
								<p class="mb-1 mt-3 font-weight-semibold">John Doe</p>
								<p class="fw-light text-muted mb-0">DoeJohn@gmail.com</p>
							</div>
							<a class="dropdown-item"href=" {{('profilpostulant')}}" ><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile<span class="badge badge-pill badge-danger">1</span></a>
							<a class="dropdown-item" href=" {{('connexion')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se Déconnecter</a>
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
					<div class="sidebar-bg-options selected" id="sidebar-light-theme">
						<div class="img-ss rounded-circle bg-light border me-3"></div>
						Light
					</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme">
						<div class="img-ss rounded-circle bg-dark border me-3"></div>
						Dark
					</div>
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
				<div class="container rounded bg-white mt-5 mb-5">
					<div class="row">
						<div class="col-md-3 border-right">
							<div class="d-flex flex-column align-items-center" style="padding-top: 18px; ">
								<h4 class="text-align"><u>A Propos De Vous </u></h4>
								<img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" />

								<span class="font-weight-bold">AKP Djemi</span>
								<span class="text-black-50">Djemidjemi@mail.com</span>
							</div>
							<div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="button">Enregistrer</button>
              </div>
						</div>
						<div class="col-md-5 border-right">
							<div class="row mt-3" style="">
								<h4 class="text-align"><u>Compléter Vos Informations </u></h4>
								<div class="col-md-12">
									<p></p>
									<label class="labels"> Sexe</label>
									<select name="Sexe" id="" class="form-control">
										<option value="F">Féminin</option>
										<option value="M">Masculin</option>
									</select>
								</div>
								<div class="col-md-12"><label class="labels">Date De Naissance</label><input type="text" class="form-control" placeholder="Entrer Votre Date de Naissance" value="" /></div>
								<div class="col-md-12"><label class="labels">Téléphone</label><input type="text" class="form-control" placeholder="Entrer Votre Numéro" value="" /></div>
								<div class="col-md-12"><label class="labels"> Ville</label><input type="text" class="form-control" placeholder="Entrer Votre Ville" value="" /></div>
								<div class="col-md-12"><label class="labels">Adresse</label><input type="text" class="form-control" placeholder="enter adresse" value="" /></div>
								<div class="col-md-12"><label class="labels">Diplomes</label><input type="text" class="form-control" placeholder="Entrer Vos Diplomes" value="" /></div>
							</div>
							<hr />
						</div>
						<div class="col-md-4" style="padding-top: 10px;">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<h4 class="text-align"><u>Expériences </u></h4>
							</div>
							<div class="row mt-3">
								<form action="">
									<input type="text" class="form-control" placeholder="Structure" /> <br />
									<input type="text" class="form-control" placeholder=" Intitulé du Poste" /> <br />
									<input type="text" class="form-control" placeholder=" Date Début" /> <br />
									<input type="text" class="form-control" placeholder=" Date Fin" /> <br />
									<textarea name="Description Des Taches " id="" cols="33" rows="10" placeholder="Description Des Taches"></textarea>
								</form>
							</div>

							<div class="p-3 py-5">
								<div class="d-flex justify-content-between align-items-center mb-3">
									<h4 class="text-align"><u>Services Offerts </u></h4>
									<br />
								</div>
								<textarea name="sercices " id="" cols="33" rows="10" placeholder="Services Offerts"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- main-panel ends -->
		</div>
	</div>

	<!-- page-body-wrapper ends -->
</main>
@endsection
