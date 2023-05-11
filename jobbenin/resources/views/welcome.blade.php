@extends('templates.app')

@section('document')


<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active " style="height: 700px;">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 order-last order-md-first">
                            <div class="hero__caption">
                                <h3>Trouvez votre prochaine opportunité de carrière ou freelance dès maintenant !</h3>
                            </div>
                            <form action="{{ route('offres.search') }}" class="search-box mt-5" style="height:600px;" method="GET">
                                <div class="input-form" >
                                    <input style="color: black;" type="text" name="secteurO" placeholder="Secteur">
                                </div>
                                <div class="select-form" style="color: black;">
                                    <div class="select-itms">
                                        <select name="villeO">
                                            <option value="">Ville</option>
                                            <option value="Cotonou">Cotonou</option>
                                            <option value="Abomey-Calavi">Abomey-Calavi</option>
                                            <option value="Porto-Novo">Porto-Novo</option>
                                            <option value="Bohicon">Bohicon</option>
                                            <option value="Abomey">Abomey</option>
                                            <option value="Parakou">Parakou</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form mt-0">
                                    <button type="submit">Trouver une offre</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 order-first order-md-last">
                            <div class="col-12" style="height: 100px;">
                                <img src="{{asset('assets/img/team/hero.jpg')}}" class="img-fluid" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Search Box -->

                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
 
=======
  
    <div style=" height:110px "> </div>
>>>>>>> origin/diane_branch
 <section class="how-it-works">
  <h2 style="font-weight:bold;font-size: 45px;">Comment ça marche ?</h2>
  <div class="steps">
  <div class="step">
      <div class="icon"><i class="fas fa-search"></i></div>
      <h3 style="font-weight:bold">1. Recherchez des offres ou des services</h3>
      <p style=" font-family:sans-serif;">Utilisez notre barre de recherche pour trouver des offres d'emploi ou des services freelance qui correspondent à vos besoins.JobBénin est une solution complète pour les recruteurs, les postulants et les freelancers à la recherche de nouvelles opportunités professionnelles.</p> 
   
    </div>
    <div class="step">
      <div class="icon"><i class="fas fa-user-plus"></i></div>
      <h3 style="font-weight:bold">2. Inscrivez-vous gratuitement</h3>
      <p>Créez un compte gratuit pour accéder à toutes les fonctionnalités de notre plateforme. Que vous soyez un recruteur cherchant du personnel qualifié, un postulant à la recherche d'un emploi ou un freelancer cherchant des clients, notre plateforme est là pour vous aider.</p>
    </div>
    <div class="step">
      <div class="icon"><i class="fas fa-briefcase"></i></div>
      <h3 style="font-weight:bold">3. Postulez ou proposez vos services</h3>
      <p>Une fois que vous avez trouvé une offre ou un service qui vous convient, postulez directement pour les offres d'emploi ou proposez vos services pour les services freelance. Notre plateforme vous permet de vous connecter facilement avec les personnes correspondant à vos besoins.</p>
    </div>
  </div>
</section>

    <section class="featured-job-area feature-padding">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 mb-40">
                    <div class="section-tittle section-tittle2 text-center esp">
                        <h2>Quelques offres</h2>
                        <span>Trouvez l'emploi de vos rêves</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">

                <div class="col-xl-10 mt-120">
                    <!-- single-job-content -->
                    @foreach($offres as $offre)
                    <style>
                        .company {
                            width: 75px;
                            height: 75px;
                            object-fit: cover;
                        }
                    </style>
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <img src="{{ asset('storage/photoslogo/' . $offre->user->logo_entreprise) }}" alt="Logo Entreprise" class="rounded-circle company">
                            </div>
                            <div class="job-tittle">
                                <a href="{{('detail_offre')}}" class="soulign">
                                    <h4>{{($offre->poste)}}</h4>
                                </a>
                                <ul>

                                    <li>{{optional($offre->user)->name}}</li>
                                    <li><i class="fas fa-map-marker-alt">

                                        </i>{{optional($offre->user)->villeR}}</li>


                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="{{ route('detail_offre', $offre->id) }}" class="soulign">Voir l'offre</a>
                            <span>Expire le:{{($offre->datfin)}}</span>
                        </div>
                    </div>
                    <!-- single-job-content -->
                    @endforeach
                </div>




    </section>

    <div class="our-services  ">
        <div class="container">

            <!-- Section Button -->
            <div class="row esp2">
                <div class="col-lg-12">
                    <div class=" text-center mb-5">
                        <a href="{{('offre')}}" class="border-btn2 soulign ">Voir +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->

    <section class="section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center section-tittle2 mt-85">
                        <h2>Freelancers</h2>
                        <span>Trouvez des talents à votre façon</span>
                    </div>
                </div>
            </div>
            <style>
                .avatar {
                    width: 200px;
                    height: 200px;
                    object-fit: cover;
                }
            </style>
            <div class="row justify-content-center">
                @foreach ($freelancers as $freelancer)
                <div class="col-md-4">
                    <div class="team text-center">
                        <img src="{{ asset('storage/photosfreelancer/' . $freelancer->photo_freelancer) }}" alt="Photo du Freelancer" class="avatar">

                        <div class="title">
                            <h2 style="color: black;">{{ implode(' ', array_slice(explode(' ', Illuminate\Support\Str::limit(strip_tags($freelancer->description_free), 50)), 0, 6)) }}...</h2>
                            <h5 class="muted regular">{{ $freelancer->name }}</h5>
                        </div>
                        <a href="{{ route('detail_free', $freelancer->id) }}">
                            <button data-toggle="modal" data-target="#modal1" class=" btn-blue-fill">Details</button>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <div class="row">
        <div class="col-lg-12">
            <div class="browse-btn2 text-center mb-5">
                <a href="{{('freelancer')}}" class="border-btn2 soulign">Voir +</a>
            </div>
        </div>
    </div>




</main>

@endsection