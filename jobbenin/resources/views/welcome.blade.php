@extends('templates.app')

@section('document')


<main>
<!-- slider Area Start-->
<div class="slider-area " >
    <!-- Mobile Menu -->
    <div class="slider-active img" data-background="{{asset('assets/img/team/work.jpeg')}}" style="height: 700px;" >
        <div class="single-slider slider-height d-flex align-items-center"  >
            <div class="container">
                
                <!-- Search Box -->
                <div class="row" style="margin-top: 80px;">
                    <div class="col-xl-8 ">
                        <!-- form -->
                        <form action="#" class="search-box mb-360">
                            <div class="input-form">
                                <input type="text" placeholder="Categories ou Mots clés">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Ville</option>
                                        <option value="">Cotonou</option>
                                        <option value="">Abomey-Calavi</option>
                                        <option value="">Porto-Novo</option>
                                        <option value="">Bohicon</option>
                                        <option value="">Abomey</option>
                                        <option value="">Parakou</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="{{('detail_offre')}}">Trouver une offre</a>
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
                                        <span >Trouvez l'emploi de vos rêves</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row justify-content-center ">

                                <div class="col-xl-10 mt-120">
                                    <!-- single-job-content -->
                                    @foreach($offres as $offre)
                                    
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="{{('detail_offre')}}"><img 
                                                src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                                          
                                            </div>
                                            <div class="job-tittle">
                                                <a href="{{('detail_offre')}}" class="soulign">
                                                    <h4 >{{($offre->poste)}}</h4></a>
                                                <ul>
                                                
                                                    <li>{{optional($offre->user)->name}}</li>
                                                    <li><i class="fas fa-map-marker-alt">
                                                        
                                                    </i>{{optional($offre->user)->villeR}}</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                        <a href="{{ route('detail_offre', $offre->id) }}" class="soulign">Voir l'offre</a>
                      
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
       
        <div class="row justify-content-center">
        @foreach ($freelancers as $freelancer)
  <div class="col-md-4">
    <div class="team text-center">
      <img src="images/{{Session::get("$freelancer->photo_freelancer")}}" alt="{{ $freelancer->name }}">
      <div class="title">
        <h2>{{ $freelancer->service_freelancer }}</h2>
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