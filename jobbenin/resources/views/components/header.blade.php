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
                    <div class="col-lg-2 col-md-1">
                        <!-- Logo -->
                        <div class="logoo">
                            <a href="/"><img src="{{asset('assets/img/logo/logojob.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-11">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation" class="menu-container" style="display: flex; justify-content: space-between;">
                                        <li><a href="/" class="menu-link">Accueil</a></li>
                                        <li><a href="{{('/offre')}}" class="menu-link">Trouver&nbsp;Une&nbsp;Offre </a></li>
                                        <li><a href="{{('/freelancer')}}" class="menu-link">Espace&nbsp;Freelancer</a></li>
                                        <li><a href="{{('/apropos')}}" class="menu-link">A&nbsp;Propos</a></li>
                                        @auth
                                        <li class="align-middle">
                                            <a href="{{('/espace')}}" class=" boxed-btn2 head-btn1 " style="background-color:#242b5e;color:white"> Mon&nbsp;Espace</a>
                                        </li>

                                        @else
                                        <li class="align-middle">
                                            <a href="{{('/connexion')}}" class="boxed-btn1 head-btn2">Se&nbsp;Connecter</a>
                                        </li>
                                        <li class="align-middle">
                                            <a href="{{('/inscription')}}" class="boxed-btn2 head-btn1 ">S'inscrire</a>
                                        </li>
                                        @endauth
                                     

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