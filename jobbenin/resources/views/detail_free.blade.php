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
                    <style>
                          .avatar {
                    width: 200px;
                    height: 200px;
                    object-fit: cover;
                }
                    </style>
               
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details text-center">
                            <img src="{{ asset('storage/photosfreelancer/' . $users->photo_freelancer) }}" alt="Photo du Freelancer" class="avatar "> 
                            </div>
                            <div class="job-tittle soulign mt-50">
                                <a href="">
                                    <h4 class="soulign">{{$users->name}}</h4>
                                </a>
                                <ul>
                                    <li> {{$users->description_free}} </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Services </h4>
                            </div>
                            <ul>
                                <li>{{$users->service_freelancer1}}</li>
                                <li>{{$users->service_freelancer2}}</li>
                                <li>{{$users->service_freelancer3}}</li>
                                <li>{{$users->service_freelancer4}}</li>
                                <li>{{$users->service_freelancer5}}</li>

                              
                            </ul>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Compétences</h4>
                            </div>
                            <ul>
                                <li>{{$users->competence_freelancer1}}</li>
                                <li>{{$users->competence_freelancer2}}</li>
                                <li>{{$users->competence_freelancer3}}</li>
                                <li>{{$users->competence_freelancer4}}</li>
                                <li>{{$users->competence_freelancer5}}</li>

                              
                            </ul>
                        </div>
                        <a href="https://wa.me/{{ (str_starts_with($users->contact_freelancer,'+229') ? '' : '+229') . $users->contact_freelancer }}" target="_blank">
                            <button type="button" class="btn btn-primary btn-sm">Contacter</button>

                        </a>




                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- job post company End -->



</main>
@endsection