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
                                
                                        <b> <u>Inscrivez-vous à JobBénin en tant que Freelancer!</u> </b>
                                    </h1>
                                </div>
                                <div class="col-lg-6">

                                    <form action="#" class="p-4 border rounded"id="forminsc">

                                              <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Nom</label>
                                                <input type="text" id="fname" class="form-control"
                                                    placeholder="Entrer votre Nom ">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Prénom</label>
                                                <input type="text" id="fname" class="form-control"
                                                    placeholder="Entrer vos Prénoms">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Email</label>
                                                <input type="text" id="fname" class="form-control"
                                                    placeholder="Addresse Email">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Mot de Passe</label>
                                                <input type="password" id="fname" class="form-control"
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
                                                <input type="submit" value="S'inscrire"
                                                    class="btn px-4 btn-primary text-white">

                                            </div>
                                            <div class="text-center">
                                                <p style="color:#242b5e">
                                                    <hr>Vous avez déjà un compte JobBénin ?<a class="" href="{{('connexion')}}"
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
        </section>

    </main>
    @endsection