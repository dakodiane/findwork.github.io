@extends('Admin/templates.admin')

@section('document')





<div class="job-post-company pt-120 pb-120" style="margin-top:50px;margin-left:30px">
        <div class="container">
        <div class="row justify-content-between">
    <!-- Left Content -->
    <div class="col-xl-4 col-lg-4">
        <div class="single-job-items mb-50">
            <div class="job-items d-flex align-items-center">
                <div class="company-img company-img-details">
                    <a href="#"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                </div>
                <div class="job-tittle d-flex align-items-center">
                    <a href="#" style="text-decoration: none;" style="margin-left:120px">
                        @if(isset($offre))
                        <div class="row"><h4 style="margin-left:20px">{{ $offre->poste }}</h4></div> <br> <br> <br> <br>
                        @endif
                    </a>
                    <ul class="job-meta d-flex align-items-center" style="margin-left:-120px">
  
                    @if(isset($offre) && isset($offre->user))
                        <li class="mr-3"><i class="fas fa-user"></i> {{$offre->user->name}}</li>
                        @endif
                        <li><i class="fas fa-map-marker-alt"></i> {{$offre->user->villeR ?? ''}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Content -->
    <div class="col-xl-7 col-lg-7">
        <div style="height:60px"></div>
        <div class="post-details4 mb-50" style="margin-top:-60px">
            <div class="small-section-tittle">
                <h4>Description de l'entreprise</h4>
            </div>
            <div class="job-details">
                <div class="job-details-info">
                    <span>{{ $offre->user->name ?? '' }}</span>
                    <p>{{ $offre->user->description_recruteur ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height:30px"></div>
<div class="row justify-content-between">

<div class="col-xl-12 col-lg-12">
    <div class="job-preview">
        <div class="post-details3 mb-50">
            <div class="small-section-tittle">
           <u>   <b><h2 style="font-weight:200px ;text-align:center">Aperçu de l'offre</h2></b>  </u>  
          
            </div>
            <div style="height:30px"></div>

            <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                          
                            <strong>
                          Description de l'offre :</strong>
                           
                            </div>
                            <p>{{ $offre->description_offre ?? '' }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                       
                           <strong>
                                 Compétences Requises :</strong>
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
                          
                    
                           <strong>
                                 Diplome Requis : </strong>
                                 <p>{{$offre->diplome ?? ''}}</p>
                     <div>
                        <ul class="job-meta" style="text-decroration:none;" >
                <li style="text-decroration:none"><i class="fas fa-map-marker-alt"></i><strong>
                     Ville :</strong> {{ $offre->user->villeR ?? '' }}</li>
              
                <li style="text-decroration:none"><i class="fas fa-calendar-check"></i><strong> 
                    Date limite :</strong> {{ $offre->datfin ?? ''}}</li>
            </ul>
  </div>            
  </div>         
  </div>    
     
   

</div>

</div>

 </div></div></div>
 <div style="height:30px"></div>

                                          





  @endsection

