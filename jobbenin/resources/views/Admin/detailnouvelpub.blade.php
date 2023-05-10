@extends('Admin/templates.admin')

@section('document')
<div class="main-panel">
    <div class="content-wrapper" style="font-size: 5px;color:black">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 30px; text-align:center"><u>Détails de l'offre</u> </h4>
                    <br><br>
                    <div class="row">
                        <div class="col-md-5">
                        <div style="height:70px"></div>
                        <address>
                                <p class="font-weight-bold" style="font-size: large;"> Description de l'Entreprise</p>
                                <br><br>
                                <style>
                        .avatar {
                            width: 75px;
                            height: 75px;
                            object-fit: cover;
                        }
                    </style>
                                <p style="font-size: large;">    <img src="{{ asset('storage/photoslogo/' . $offre->user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar rounded-circle">
                                           </p>
                                           @if(isset($offre) && isset($offre->user))
                                <p class="font-weight-bold" style="font-size: large;"> {{ $offre->user->name }}</p>
                                @endif
                                <br><br>
                                <p style="font-size: large;">
                                    {{ $offre->user->villeR }}
                                </p>
                                <br><br><br>
                                <address>
                                <p style="font-size: large;">
                                    {{ $offre->user->description_recruteur }}
                                </p>
                                <br><br><br>
                          
                               
                            </address>
                            </address>
                            
                        
                        </div>
                       
                       
                                <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body font-weight-bold">
                                    <h3 style="font-size: large; text-align:center"> Aperçu de l'Offre </h3>
                                    <p class="font-weight-bold">
                                    Date Limite:  </p>
                                    <p>   {{ $offre->datfin }} </p>
                                    <p class="font-weight-bold">
                                      Poste Concerné: </p>
                                    <p  class="text-primary">
                                        {{ $offre->poste }} </p>
                                    <p class="font-weight-bold">
                                    Ville du Poste: </p>
                                    <p>
                                        {{ $offre->villeO }} </p>
                                    <p class="font-weight-bold">
                                    Description de l'offre: </p>
                                    <p>
                                        {{ $offre->description_offre }}</p>
                                    <p class="font-weight-bold">
                                   Compétences Requises:  </p>
                                    <p>
                                        {{ $offre->competence_offre1 }}  </p>
                                    <p>
                                        {{ $offre->competence_offre2 }}
                                    </p>
                                    <p>
                                        {{ $offre->competence_offre3 }}
                                    </p>
                                    <p>
                                        {{ $offre->competence_offre4 }}
                                    </p>
                                    <p>
                                        {{ $offre->competence_offre5 }}
                                    </p>
                                    <p class="font-weight-bold">
                                    Diplômes Requis: </p>
                                   
                                    <p>
                                        {{ $offre->diplome }}
                                    </p>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>

                </div>
          
       
        <div class="row">
            <div class="col-md-6">
   
            </div>
          
            <div class="col-md-6">



                <a href="{{ route('admin.valider',  ['id_user' => $offre->user->id , 'id_offre' => $offre->id])  }}" class="no-underline">
                    <button type="submit" class="btn btn-success btn-fw"> Approuver</button>
                
                </a>
          
                <a href="{{ route('admin.rejeter',  ['id_user' => $offre->user->id , 'id_offre' => $offre->id])  }}" class="no-underline" style="margin-left:30px">
                <button type="submit" class="btn btn-danger btn-fw" >Rejeter</button>
                    
                </a>



        </div>

    </div>

</div>




    @endsection



