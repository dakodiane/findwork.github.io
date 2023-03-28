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
            <div class="col-xl-12 col-lg-12">

                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details text-center">
                            <a href="#"><img src="{{asset('assets/img/free/team1.jpg')}}" alt=""></a>
                        </div>
                        <div class="job-tittle soulign">
                            <a href="">
                                <h4 class="soulign">{{$user->name}}</h4>
                            </a>
                            <ul>
                                <li>{{$user->service_freelancer}}</li>
     
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- job single End -->

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
          <div class="small-section-tittle">
                            <h4>Description </h4>
                        </div>
                        <p>
                            {{$user->description_recruteur}}
                        </p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Compétences</h4>
                        </div>
                        <ul>
                            <li>{{$user->competence1}}</li>
                            <li>{{$user->competence2}}</li>
                            <li>{{$user->competence3}}</li>
                            <li>{{$user->competence4}}</li>
                            <li>{{$user->competence5}}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


            </div>
         
        </div>
    </div>
</div>
<!-- job post company End -->

                    

</main>
@endsection