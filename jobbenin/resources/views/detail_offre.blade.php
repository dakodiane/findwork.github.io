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
                                <h4 style="text-decoration: none;">{{ $offre->poste }}</h4>
                            </a>
                            <ul>
                                <li>{{$offre->user->name}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{$offre->user->villeR}}</li>
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
                        <p>{{ $offre->detail }}</p>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Compétences Requises</h4>
                        </div>
                       <ul>
                           <li>{{ $offre->competence_offre1 }}</li>
                           <li>{{ $offre->competence_offre2 }}</li>
                           <li>{{ $offre->competence_offre3 }}</li>
                           <li>{{ $offre->competence_offre4 }}</li>
                           <li>{{ $offre->competence_offre5 }}</li>

                       </ul>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Diplome Requis </h4>
                        </div>
                       <ul>
                           <li>{{$offre->diplome}}</li>                        
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
                      <li>Ville : <span>{{$offre->user->villeR}}</span></li>   
                      <li>Salaire mensuel: <span>{{ $offre->salaireO }} </span></li>
                      <li>Date Limite : <span>{{ $offre->datfin }}</span></li>
                  </ul>
                 <div class="apply-btn2">
                    <a href="{{('/offre/{id}/postuleroffre')}}" class="boxed-btn1" style="color: white;text-decoration:none;">Postuler maintenant</a>
                 </div>
               </div>
                <div class="post-details4  mb-50">
                    <!-- Small Section Tittle -->
                   <div class="small-section-tittle">
                       <h4>Description de l'entreprise</h4>
                   </div>
                      <span>{{$offre->user->name}}</span>
                      <p>{{$offre->user->description_recruteur}}</p>
                  
               </div>
            </div>
        </div>
    </div>
</div>
<!-- job post company End -->

</main>
@endsection
