@extends('templates.app')

@section('document')

<main>
    
        <section class="site-section">
            <div class="container" style="width:45em;">

                <div class="row justify-content-center align-items-center">
                    <div class="card o-hidden border-0 shadow-lg my-5" >
                        <div class="card-body p-1" style="">
                            <div class="" style="justify-content: center;">
                                <p></p><p></p>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        <b> <u>Déposer Votre Candidature</u> </b>
                                    </h1>
                                </div>

                                <div class="col-sm-11 mx-auto">
                    <div class="container">
 <div class="col-md-12" 
        style="background-color:#1f3bb3;float:left; width: 477px;">
            
            <div class="alert -primary alert-dismissible fade show"
              style="background-color:#1f3bb3"role="alert">
                        <strong class="text" style="background-color:#1f3bb3">  {{ $offre->user->name ?? '' }}</strong>

                <p class="text-light my-0">
                    Besoin d'un CV Professionnel pour votre Candidature ?
                </p>
                <p class="mt-3 mb-0"> <a href="https://wa.me/0022990733200"target="_blank" >
            <button  style="background-color:white;border:none; color:#1f3bb3;border-radius:40px"  >
            Commander Maintenant</button>    
  </a> </p>
        
                </div>
             
        </div>
  <p></p>

                     <form  method="POST" action="{{ route('postulerOffre','$offre=id_offre') }}" >
                    @csrf
                       
                    <div class="form-group">
                        <div class="text-format-wrapper" >
                            <div class="form-item form-lettre_motivation wysiwyg-wrapper form-type-textarea form-item-lettre_motivation-value" id="edit-lettre_motivation-value-wrapper">
                                <label for="edit-lettre_motivation" style="padding-top:2em">Lettre  de Motivation </label>
                                <div class="form-textarea-wrapper resizable">
                                    <textarea required="required"
                                     class="wysiwyg form-textarea required" 
                                     name="lettre_motivation" cols="16" rows="10" placeholder=""></textarea>
                                </div>
                            </div> </div>  

                    <div class="form-group">
                        <label for=" secteur">Curriculum Vitae (CV) </label>
                        <input type="file" name="cv" class="form-control"
                         id="cv" placeholder="" require ="required"   style="width:34em" >
                    </div>

                    <div class="row form-group"  style="margin-left:400px">
                                            
                        <div class="col-md-10">
                            <button type="submit" 
                                  class="btn px-4 btn-primary text-white">
                                    Postuler</button>

                                            </div>
                                           
                                        </div>
                            </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    
</main>
@endsection