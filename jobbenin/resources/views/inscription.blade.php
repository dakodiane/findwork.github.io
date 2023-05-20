@extends('templates.app')

@section('document')
<main style="overflow: hidden;">

    <!-- Inclure la bibliothèque jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="site-section">
    <div class="row justify-content-center align-items-center">
        <div class="card o-hidden border-0 shadow-lg my-2 col-lg-12">
            <div class="card-body p-1" style="">
                <div class="" style="justify-content: center;">
                    <p></p>
                    <p></p>
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">
                            <b><u>Inscrivez-vous à JobBénin!</u></b>
                        </h1>
                    </div>

                    <form action="{{'inscription'}}" method="POST" class="p-4 border rounded ab" style="max-width: 400px; margin: 0 auto;" id="forminsc">


                        @csrf
                        <div class="row form-group">
                            <div class="col-12 mb-3 mb-md-0">
                                <select class="form-select form-select-sm mb-3 @error('role') is-invalid @enderror" name="role" aria-label=".form-select-sm example">
                                    <option selected>Choisissez votre type de compte</option>
                                    <option value="recruteur">Recruteur</option>
                                    <option value="postulant">Postulant</option>
                                    <option value="freelancer">Freelancer</option>
                                </select>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom Complet</label>
                                <input type="text" id="name" name="name" require="required" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Nom Complet ">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" id="email" name="email" require="required" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Addresse Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Mot de Passe</label>
                                <input type="password" id="password" name="password" require="required" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Mot De Passe">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <label class="text-black" for="fname">Confirmer le Mot de Passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" require="required" class="form-control form-control-sm" placeholder="Confirmez votre mot de Passe ">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12">
                                <button type="submit" class="btn px-4 btn-primary text-white" data-toggle="" data-target="#inscriptionModal">S'inscrire</button>
                            </div>
                        </div>

                        <div class="text-center">
                            <p style="color:#242b5e">
                                <hr>Vous avez déjà un compte JobBénin ?<a class="" href="{{('connexion')}}" style="color:#242b5e"><b><u>Connectez-vous!</u></b> </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var form = $('#forminsc');
        form.submit(function(event) {
            var roleField = $('select[name="role"]');
            var nameField = $('input[name="name"]');
            var emailField = $('input[name="email"]');
            var passwordField = $('input[name="password"]');
            var passwordConfirmField = $('input[name="password_confirmation"]');

            // Vérifier si le champ de nom ne contient que des lettres et des espaces
            var nameRegex = /^[a-zA-Z\s]*$/;
            if (!nameRegex.test(nameField.val())) {
                alert('Le champ de nom ne doit contenir que des lettres et des espaces.');
                return false;
            }

            if (roleField.val() && nameField.val() && emailField.val() && passwordField.val() && passwordConfirmField.val()) {
                // Si tous les champs sont remplis, afficher le popup
                $('#inscriptionModal').modal('show');
                return true;
            } else {
                // Sinon, empêcher l'envoi du formulaire et afficher un message d'erreur
                event.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
                return false;
            }
        });  $('.modal-footer button').click(function() {
        $('#inscriptionModal').modal('hide');
    });
    });
</script>



<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection