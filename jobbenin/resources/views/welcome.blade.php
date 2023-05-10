@extends('templates.app')

@section('document')


<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active img" data-background="{{asset('assets/img/team/work.jpeg')}}" style="height: 700px;">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">

                    <!-- Search Box -->
                    <div class="row" style="margin-top: 80px;">
                        <div class="col-xl-8 ">
                            <!-- form -->*
                            <form action="{{ route('offres.search') }}" class="search-box mb-360" method="GET">
                                <div class="input-form">
                                    <input type="text" name="secteurO" placeholder="Secteur">
                                </div>
                                <div class="select-form">
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
                                <div class="search-form">
                                    <button type="submit">Trouver une offre</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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