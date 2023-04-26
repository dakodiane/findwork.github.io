@extends('Admin/templates.admin')

@section('document')





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
        <a href="#" style="text-decoration: none;">
          @if(isset($offre))
          <h4 style="margin-bottom: 10px;">{{ $offre->poste }}</h4>
          @endif
        </a>
        <ul class="job-meta">
          @if(isset($offre) && isset($offre->user))
          <li class="mr-3"><i class="fas fa-user"></i> {{$offre->user->name}}</li>
          @endif
          <li><i class="fas fa-map-marker-alt"></i> {{$offre->user->villeR ?? ''}}</li>
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
      <p style="font-size: 16px; line-height: 1.6;">{{ $offre->description_offre ?? '' }}</p>
    </div>
    <div class="post-details2  mb-50">
      <!-- Small Section Tittle -->
      <div class="small-section-tittle">
        <h4>Compétences Requises</h4>
      </div>
      <ul class="list-unstyled job-skills">
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
        <h4>Diplôme Requis</h4>
      </div>
      <ul class="list-unstyled job-skills">
        <li>{{$offre->diplome ?? ''}}</li>
      </ul>
    </div>
  </div>
</div>

                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
  <div class="job-preview">
    <div class="post-details3 mb-50">
      <div class="small-section-tittle">
        <h4>Aperçu de l'offre</h4>
      </div>
      <ul class="job-meta">
        <li><i class="fas fa-briefcase"></i><strong> Type de contrat :</strong> {{ $offre->user->type_contrat ?? '' }}</li>
        <li><i class="fas fa-calendar-alt"></i><strong> Durée du contrat :</strong> {{ $offre->user->duree_contrat  ?? '' }}</li>
        <li><i class="fas fa-map-marker-alt"></i><strong> Ville :</strong> {{ $offre->user->villeR ?? '' }}</li>
        <li><i class="fas fa-money-bill"></i><strong> Salaire mensuel :</strong> {{ $offre->salaireO  ?? ''}}</li>
        <li><i class="fas fa-calendar-check"></i><strong> Date limite :</strong> {{ $offre->datfin ?? ''}}</li>
        <li><i class="fas fa-eye"></i><strong> Nombre de visiteurs :</strong> 150</li>
      </ul>
      <div class="apply-btn2">
        <a href="">Valider</a>
      </div>
    </div>
  </div>
</div>

    <div class="post-details4 mb-50">
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

  @endsection

