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
                            <h2>Trouve un talent </h2>
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
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Categories</h4>
                            </div>
                            <!-- Select job category start -->
                            <div class="select-job-items2">
                                <select name="select">
                                    <option value="">Toutes les categories</option>
                                    <option value="">Informatique</option>
                                    <option value="">Coaching Personnel</option>
                                    <option value="">Comptabilité</option>
                                    <option value="">Gestion</option>
                                </select>
                            </div>
                            <!--  Select job category End-->

                        </div>




                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="section gray-bg">
                        <div class="container">

                            <div class=" justify-content-center">
                                <div class="row">
                                @foreach($users as $user)

                                    <div class="col-md-4">
                                   

                                        <div class="team text-center">

                                            <img src="{{asset('assets/img/free/team3.jpg')}}" alt="Team Image" class="avatar">
                                            <div class="title">
                                                <h2>{{$user->service_freelancer}}</h2>
                                                <h5 class="muted regular">{{$user->name}}</h5>
                                            </div>
                                            <a href="{{ route('detail_free', $user->id) }}">
                                                <button data-toggle="modal" data-target="#modal1" class=" btn-blue-fill">Details</button>
                                            </a>
                                        </div>
                                      

                                    </div>
                                    
                                    @endforeach

                                </div>
                                
                            </div>

                        </div>
                        <!-- Section Button -->

                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
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
    <!--Pagination End  -->

</main>
@endsection