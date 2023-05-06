@extends('templates.app')

@section('document')
<main>
    <style>

@media only screen and (min-width: 400px) {
      .form {
        max-width: 375px;
      }
    } 
@media only screen and (min-width: 576px) {
      .form {
        max-width: 540px;
      }
    }

    @media only screen and (min-width: 768px) {
      .form {
        max-width: 720px;
      }
    }

    @media only screen and (min-width: 992px) {
      .form {
        max-width: 960px;
      }
    }

    @media only screen and (min-width: 1200px) {
      .form {
        max-width: 1140px;
      }
    }
  </style>

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
                                    <b> <u>Inscrivez-vous à JobBénin!</u> </b>
                                </h1>
                            </div>

                            <form action="{{'inscription'}}" method="POST" class="p-4 border rounded" style="min-width: 375px; margin: 0 auto;" id="forminsc">
                                @csrf
                                <div>

                                    <select class="form-select form-select-lg mb-3 @error('role') is-invalid @enderror" name="role" aria-label=".form-select-lg example">
                                        <option>Choisissez votre type de compte</option>
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
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nom Complet</label>
                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom Complet ">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Email</label>
                                        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Addresse Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Mot de Passe</label>
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot De Passe">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Confirmer le Mot de Passe</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmez votre mot de Passe ">

                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <a href="">
                                            <button type="submit" class="btn px-4 btn-primary text-white" data-toggle="modal" data-target="#inscriptionModal">S'inscrire</button>

                                        </a>
                                        <script src="{{ asset('js/jquery.min.js') }}"></script>
                                        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                                        <!-- Modal -->
                                        <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="inscriptionModalLabel">Inscription</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Veuillez vérifier votre boîte mail pour confirmer votre inscription.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="text-center">
                                        <p style="color:#242b5e">
                                            <hr>Vous avez déjà un compte JobBénin ?<a class="" href="{{('connexion')}}" style="color:#242b5e"><b> <u>Connectez-vous!</u></b> </a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>

    </section>

</main>
@endsection