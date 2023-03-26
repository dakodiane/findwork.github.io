@extends('templates.app')

@section('document')

 <main>

 <section class="site-section">
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="card o-hidden border-0 shadow-lg my-5" style="width:44em;">
                        <div class="card-body p-1" style="width:45em;">
                            <div class="" style="justify-content:center;">
                                <p></p><p></p>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        <b> <u>Inscrivez-vous à JobBénin pour trouver le travail que vous aimez!</u> </b>
                                    </h1>
                                </div>


                                <div class="col-lg-6">

                                    <form action="{{'inscriptionpostulant'}}" method="POST" class="p-4 border rounded"id="forminsc">
                                    @csrf
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Nom</label>
                                                <input type="text" id="nomP" name="nomP" class="form-control"
                                                    placeholder="Entrer votre Nom ">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Prénom</label>
                                                <input type="text" id="prenomP" name="prenomP" class="form-control"
                                                    placeholder="Entrer vos Prénoms">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Email</label>
                                                <input type="text" id="emailP" name="emailP" class="form-control"
                                                    placeholder="Addresse Email">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Mot de Passe</label>
                                                <input type="password" id="mdpP" name="mdpP" class="form-control"
                                                    placeholder="Choisissez Votre Mot De Passe">
                                            </div>
                                        </div>
                                        <div class="row form-group mb-4">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Confirmer le Mot de Passe</label>
                                                <input type="password" id="fname" class="form-control"
                                                    placeholder="Entrez le mot de Passe ">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                            <a href="">
                                                <button type="submit"  class="btn px-4 btn-primary text-white">S'inscrire</button>
                                                </a>

                                            </div>
                                            <div class="text-center">
                                                <p style="color:#242b5e">
                                                    <hr>Vous avez déjà un compte JobBénin ?<a class=""  href="{{('connexion')}}"
                                                        style="color:#242b5e"><b> <u>Connectez-vous!</u></b> </a>
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
      
    </main>

 @endsection