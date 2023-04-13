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
                            <a href="/"><img src="{{asset('assets/img/logo/logojob.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation" class="menu-container" style="display: block; justify-content: space-between;">
                                        <li><a href="/" class="menu-link">Accueil</a></li>
                                        <li><a href="{{('offre')}}" class="menu-link">Trouver Une Offre </a></li>
                                        <li><a href="{{('freelancer')}}" class="menu-link">Espace Freelancer</a></li>
                                        <li><a href="{{('/apropos')}}" class="menu-link">A Propos</a></li>
                                    
                                        <li class="align-middle">  <li class="align-middle">
                                            <a href="{{('inscription')}}" class=""> <i class="icon-head menu-icon"></i>Mon Espace</a>
                                        </li>
                                            <a href="{{('connexion')}}" class="boxed-btn1 head-btn2">Se&nbsp;Connecter</a>

                                        </li>
                                        <li class="align-middle">
                                            <a href="{{('inscription')}}" class="boxed-btn2 head-btn1 ">S'inscrire</a>
                                        </li>
                                        <li class="align-middle">
                                            <a href="{{('inscription')}}" class=""> <i class="icon-head menu-icon"></i>Mon Espace</a>
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