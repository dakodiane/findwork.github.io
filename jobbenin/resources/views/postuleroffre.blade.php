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
                        <strong class="text" style="background-color:#1f3bb3;color:white"> 
                     Hello !   {{ $user->name }}</strong>

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
  <form id="my-form" method="POST" action="{{route('postuleroffre', ['id_offre' => $offre->id])}}" >
  @csrf
  <div class="form-group">
    <div class="text-format-wrapper">
      <div class="form-item form-lettre_motivation wysiwyg-wrapper form-type-textarea form-item-lettre_motivation-value" id="edit-lettre_motivation-value-wrapper">
        <label for="edit-lettre_motivation" style="padding-top:2em">Lettre  de Motivation </label>
        <div class="form-textarea-wrapper resizable">
          <textarea class="" name="lettre_motivation" id="lettre_motivation" cols="16" rows="10" required="required" placeholder=""></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="secteur">Curriculum Vitae (CV) </label>
    <input type="file" id="cv" name="cv" required="required" class="form-control" placeholder="" style="width:34em">
  </div>
  <div class="row form-group" style="margin-left:400px">
    <div class="col-md-10">
      <button type ="submit" class="btn btn-block btn-primary btn-md" id="submit-btn"> Postuler</button>
    </div>
  </div>
</form>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">JobBénin</h4>
            </div>
            <div class="modal-body">
                 <p> <b> Succès!</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#my-form').on('submit', function(e) {
      var isFormValid = true;
      var form = $(this);

      // Check if all required fields are filled
      form.find('[required]').each(function() {
        if (!$(this).val()) {
          isFormValid = false;
          $(this).addClass('is-invalid');
        }
      });

    
      if (!isFormValid) {
        e.preventDefault();
        return false;
      }


      form.unbind('submit').submit();

      $('#myModal').modal('show');

    
      e.preventDefault();
      return false;
    });
  });
</script>

    </div>
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