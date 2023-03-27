@extends('templates.app')

@section('document')

<main>

<!-- Hero Area Start-->
<div class="slider-area ">
<div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img//team/offre.jpeg">
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
                            <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4 style="text-decoration: none;">Developpeur Mobile</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, corrupti eligendi accusamus a consequatur similique vitae perspiciatis officiis, voluptates aliquam numquam adipisci, est in et maiores doloremque quae qui sapiente?</p>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Compétences Requises</h4>
                        </div>
                       <ul>
                           <li>System Mobile Development</li>
                           <li>Mobile Application in iOS/Android/Tizen or other platform</li>
                           <li>Research and code , libraries, APIs and frameworks</li>
                           <li>Strong knowledge on software development life cycle</li>
                           <li>Strong problem solving and debugging skills</li>
                       </ul>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Diplomes + Experience</h4>
                        </div>
                       <ul>
                           <li>3 or more years of professional design experience</li>
                           <li>Direct response email experience</li>
                           <li>Ecommerce website design experience</li>
                           <li>Familiarity with mobile and web apps preferred</li>
                           <li>Experience using Invision a plus</li>
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
                      <li>Posté le : <span>08 Mars 2023</span></li>
                      <li>Ville : <span>Porto-Novo</span></li>   
                      <li>Salaire mensuel: <span> 400000 F CFA</span></li>
                      <li>Date Limite : <span>12 Avril 2023</span></li>
                  </ul>
                 <div class="apply-btn2">
                    <a href="{{('postuleroffre')}}" class="boxed-btn1" style="color: white;text-decoration:none;">Postuler maintenant</a>
                 </div>
               </div>
                <div class="post-details4  mb-50">
                    <!-- Small Section Tittle -->
                   <div class="small-section-tittle">
                       <h4>Description de l'entreprise</h4>
                   </div>
                      <span>Creative Agency</span>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eligendi tenetur deleniti corrupti facere repudiandae, veritatis, sunt provident neque placeat ipsum voluptatum similique vitae officiis rerum. Ex soluta quisquam labore!</p>
                  
               </div>
            </div>
        </div>
    </div>
</div>
<!-- job post company End -->

</main>
@endsection