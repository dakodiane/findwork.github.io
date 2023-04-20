@extends('templates.app')

@section('document')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/team/offre.jpeg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    @if(isset($offre))
                                    <h4 style="text-decoration: none;">{{ $offre->poste }} </h4>
                                    @endif
                                </a>
                                <ul>
                                    @if(isset($offre) && isset($offre->user))
                                    <li>{{$offre->user->name}}</li>
                                    @endif
                                    <li><i class="fas fa-map-marker-alt"></i>{{$offre->user->villeR ?? ''}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Description de l'offre</h4>
                            </div>
                            <p>{{ $offre->description_offre ?? '' }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Compétences Requises</h4>
                            </div>
                            <ul>
                                <li>{{ $offre->competence_offre1 ?? '' }}</li>
                                <li>{{ $offre->competence_offre2  ?? ''}}</li>
                                <li>{{ $offre->competence_offre3 ?? '' }}</li>
                                <li>{{ $offre->competence_offre4  ?? ''}}</li>
                                <li>{{ $offre->competence_offre5 ?? ''}}</li>

                            </ul>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Diplome Requis </h4>
                            </div>
                            <ul>
                                <li>{{$offre->diplome ?? ''}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Aperçu de l'offre</h4>
                        </div>
                        <ul>
                            <li>{{ $offre->user->type_contrat ?? '' }}</li>
                            <li>{{ $offre->user->duree_contrat  ?? '' }}</li>
                            <li>Ville : <span>{{ $offre->user->villeR ?? '' }}</span></li>
                            <li>Salaire mensuel : <span>{{ $offre->salaireO  ?? ''}}</span></li>
                            <li>Date limite : <span>{{ $offre->datfin ?? ''}}</span></li>
                            <li>Nombre de Visiteurs: <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 150 </span></li>

                        </ul>



                        @auth 
                        @if ($user ->role=='postulant')
                    
                        <div class="apply-btn2">
                            <a href="{{ route('postuleroffre', ['id_offre' => $offre->id]) }}" class="boxed-btn1" style="color: white;text-decoration:none;">Postuler&nbsp;maintenant</a>

                        </div>
                    </div>
                 
                    @elseif($user ->role=='recruteur')
                    <div class="apply-btn2">

                        <a href="{{'/inscription' }}" class="boxed-btn1" style="color: white;text-decoration:none;">Créez&nbsp;un&nbsp;compte&nbsp;pour postulant</a>

                    </div>
                    @elseif($user ->role=='freelancer')
                    <div class="apply-btn2">

                        <a href="{{'/inscription'}}" class="boxed-btn1" style="color: white;text-decoration:none;">Créez&nbsp;un&nbsp;compte&nbsp;pour postulant</a>

                    </div>
                </div>
                @endif
                @else
                    <div class="apply-btn2">

                        <a href="{{ ('/connexionpourpostuler') }}" class="boxed-btn1" style="color: white;text-decoration:none;">Connectez&nbsp;vous&nbsp;pour&nbsp;postuler</a>

                    </div>
                @endauth



                <!-- job single End -->


                <div class="post-details4 mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Description de l'entreprise</h4>
                    </div>
                    <span>{{ $offre->user->name ?? '' }}</span>
                    <p>{{ $offre->user->description_recruteur ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- offre d'emploi End -->
</main>
@endsection