@extends('templates.app')

@section('document')
<main>

    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="card o-hidden border-0 shadow-lg my-5" style="width:44em;">
                    <div class="" style="justify-content: center;">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                <p></p>
                                <p></p>

                                <b> <u>Inscrivez-vous à JobBénin!</u> </b>
                            </h1>
                        </div>
                        <div class="col-lg-6">

                            <form action="{{'inscription'}}" method="POST" class="p-4 border rounded" id="forminsc">
                                @csrf
                                <select class="form-select form-select-lg mb-3" name="role" aria-label=".form-select-lg example">
                                    <option selected>Choisissez votre type de compte</option>
                                    <option value="recruteur">Recruteur</option>
                                    <option value="postulant">Postulant</option>
                                    <option value="freelancer">Freelancer</option>
                                </select>

                              

                                <div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nom Complet</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Entrer votre Nom ">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Addresse Email">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Mot de Passe</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Choisissez Votre Mot De Passe">
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Confirmer le Mot de Passe</label>
                                        <input type="password" id="fname" class="form-control" placeholder="Entrez le mot de Passe ">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <a href="">
                                            <button type="submit" class="btn px-4 btn-primary text-white">S'inscrire</button>
                                        </a>

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
        </div>
        </div>
        </div>
    </section>

</main>
@endsection