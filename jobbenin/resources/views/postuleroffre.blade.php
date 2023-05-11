@extends('templates.app')

@section('document')

<main>

  <section class="site-section">
    <div class="container" style="width:45em;">

      <div class="row justify-content-center align-items-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-1" style="">
            <div class="" style="justify-content: center;">
              <p></p>
              <p></p>
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                  <b> <u>Déposer Votre Candidature</u> </b>
                </h1>
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-lg-8 mx-auto">
                    <div class="alert -primary alert-dismissible fade show" style="background-color:#1f3bb3" role="alert">
                      <strong class="text" style="background-color:#1f3bb3;color:white">Hello! {{ $user->name }}</strong>
                      <p class="text-light my-0">
                        Besoin d'un CV Professionnel pour votre Candidature ?
                      </p>
                      <p class="mt-3 mb-0">
                        <a href="https://wa.me/0022990733200" target="_blank">
                          <button style="background-color:white;border:none;color:#1f3bb3;border-radius:40px;">
                            Commander Maintenant
                          </button>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <p></p>

              <form method="POST" action="{{route('postuleroffre', ['id_offre' => $offre->id])}}" enctype="multipart/form-data" style="max-width: 400px; margin: 0 auto; " id="formpostuler">
       
       
              @csrf

              <div class="form-group">
                <label for="lettre_motivation">Lettre de motivation</label>
                <input type="file" id="lettre_motivation" name="lettre_motivation" required="required" class="form-control">
                <p class="text-muted">✱ Extensions autorisées : .pdf, .docx ✱</p>
              </div>


              <div class="form-group">
                          <label for="secteur">Curriculum Vitae (CV) </label>
                          <input type="file" id="cv" name="cv" required="required" class="form-control" placeholder="" style="width:100%">
                          <p class="text-muted"> ✱ Extensions autorisées : .pdf, .docx ✱</p>
                        </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-block btn-primary btn-md" data-toggle="" data-target="#postulerModal">Postuler</button>
                      </div>
          
    
   
                </form>






    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Modal -->
    <div class="modal fade" id="postulerModal" tabindex="-1" role="dialog" aria-labelledby="postulerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="postulerModalLabel">JobBénin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Votre Candidature a été enregistrée avec succès.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>


    </div>
  </section>

  



</main>
@endsection