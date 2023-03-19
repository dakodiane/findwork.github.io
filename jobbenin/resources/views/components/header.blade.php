<header>
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/logo/logojob.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logoo">
                                <a href="index.html" ><img src="{{asset('assets/img/logo/logojob.png')}}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="#" class="menu-link">Accueil</a></li>
                                            <li><a href="{{route('offre')}}" class="menu-link">Trouver Une Offre </a></li>
                                           
                                            <li><a href="{{route('freelancer')}}" class="menu-link">Espace Freelancer</a></li>
                                            <li><a href=" {{('/apropos')}}"class="menu-link">A Propos</a></li>
                                           
                                            <li class="align-middle">                                    
                                                <a href="{{('/connexion')}}" class="btn head-btn2 ">Se Connecter</a>
                                            </li>
                                            <li class="align-middle"><a href="#" class=" btn head-btn1">S'Inscrire</a>
                                                <ul class="submenu">
                                                    <li><a href="{{('/inscriptionpostulant')}}" class="menu-link">Postulant</a></li>
                                                    <li><a href="{{('/inscriptionrecruteur')}}"class="menu-link">Recruteur</a></li>
                                                    <li><a href="{{('/inscriptionfreelancer')}}" class="menu-link">Freelancer</a></li>
                                              </ul>
                                            </li>


                                        </ul>
                                    </nav>
                                </div>          
                               
                            </div>
                        </div>
                         <!-- Mobile Menu -->
                         <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
</header>