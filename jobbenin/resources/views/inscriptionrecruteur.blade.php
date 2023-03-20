@extends('templates.app')

@section('document')

<main>
    <section class="site-section" >
    <div class="container" style="width:45em;">
    <div class="row justify-content-center align-items-center">
            <div class="card o-hidden border-0 shadow-lg my-5">
             
                    <div class="" style="justify-content: center;">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                <p></p>
                                <p></p>
                                <b> <u>Inscrivez-vous à JobBénin pour trouver des talents qualifiés!</u> </b>
                            </h1>
                        </div>


                        <div class="col-lg-6">

                            <form action="{{('inscriptionrecruteur')}}" method="POST" class="p-4 border rounded" id="forminsc">



                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nom De L'Entreprise</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez Le Nom de L'Entreprise">
                                    </div>
                                </div>
                          
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Ville</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez La Ville de L'Entreprise">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Adresse Email
                                            Professionnelle</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez Une Adresse Email Professionnelle">
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
                                    <a href="">
                                                <button type=""  class="btn px-4 btn-primary text-white">S'inscrire</button>
                                                </a>

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