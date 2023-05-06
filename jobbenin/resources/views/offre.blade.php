@extends('templates.app')

@section('document')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/team/offre.jpeg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Trouve ton emploi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                        <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                    </svg>
                                </div>
                                <h4>Filtrer</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <form method="GET" action="{{ route('offres.search') }}">
                            @csrf
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Secteur</h4>
                                </div>
                                <div class="select-job-items2">
                                    <select name="secteurO">
                                        <option value="">Tous les secteurs</option>
                                        <option value="Informatique">Informatique</option>
                                        <option value="Mecanique">Mécanique</option>
                                        <option value="Comptabilité">Comptabilité</option>
                                        <option value="Gestion">Gestion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Ville</h4>
                                </div>
                                <div class="select-job-items2">
                                    <select name="villeO">
                                        <option value="">Toutes les villes</option>
                                        <option value="Cotonou">Cotonou</option>
                                        <option value="Abomey-Calavi">Abomey-Calavi</option>
                                        <option value="Porto-Novo">Porto-Novo</option>
                                        <option value="Bohicon">Bohicon</option>
                                        <option value="Abomey">Abomey</option>
                                        <option value="Parakou">Parakou</option>
                                    </select>
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button type="submit" class="btn btn-primary">Rechercher</button>
                            </div>
                        </form>




                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area ">
                        <div class="container ">
                            @if ($count > 0)

                            @foreach($offres as $offre)
                            <div class="row justify-content-center ">
                                <div class="col-xl-10 mt-120">
                                    <!-- single-job-content -->
                                    <style>
                                        .alert {
                                            padding: 15px;
                                            margin-bottom: 20px;
                                            border: 1px solid transparent;
                                            border-radius: 4px;
                                        }

                                        .alert-danger {
                                            color: #721c24;
                                            background-color: #f8d7da;
                                            border-color: #f5c6cb;
                                        }
                                    </style>


                                    <div class="single-job-items mb-30">

                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="{{('detail_offre')}}">
                                                    <img src="{{ asset('storage/photoslogo/' . $offre->user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">


                                            </div>
                                            <div class="job-tittle">
                                                <a href="{{ route('detail_offre', $offre->id) }}" class="soulign">
                                                    <h4>{{($offre->poste)}}</h4>
                                                </a>
                                                <ul>
                                                    <li>{{optional($offre->user)->name}}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{optional($offre->user)->villeR}}</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                            <a href="{{ route('detail_offre', $offre->id) }}" class="soulign">Voir l'offre</a>

                                        </div>
                                    </div>
                                    <!-- single-job-content -->

                                </div>
                            </div>

                            @endforeach
                            <div class="pagination-area pb-115 text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-wrap d-flex justify-content-center">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-start">
                                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="alert alert-danger">Aucune offre trouvée.</div>
                            @endif
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->

    <!--Pagination End  -->

</main>
@endsection