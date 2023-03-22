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
                          <form action="{{('inscriptionrecruteur')}}"method="POST"class="p-4 border rounded" id="forminsc">
                                  <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nom De L'Entreprise</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez Le Nom de L'Entreprise">
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname"> Logo de L'Entreprise </label>
                                                    <div class="description" > <p>Les fichiers doivent peser moins de
                                                    <strong ><b style="color=black">2 Mo</b></strong>.
                                                     <br> Extensions autorisées: <strong style="color=black" ><b style="color=black">png jpeg pdf </b></strong>.</p></div>
                                                      <div class="file-widget form-managed-file clearfix">
                                                       <input type="file" id="logo" name="logo" size="50" class="form-control-file" />
                                                     </div>

                                            </div>
                                            </div>
                                   <div class="row form-group">
                                    <label for="job-Ville">Ville </label> <br>
                                    <select class="selectpicker border rounded" name="job-Ville" data-style="btn-black"
                                        data-width="100%" data-live-search="true" title="Select Ville">
                                        <option value="1">Cotonou</option>
                                        <option value="2">Abomey-Calavi</option>
                                        <option value="3">Porto-Novo</option>
                                        <option value="4">Bohicon</option>
                                        <option value="5">Abomey</option>
                                        <option value="6">Parakou</option>
                                    </select>
                                    </div>  
                              
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="description">Description  de L'Entreprise</label> <br>
                                       <textarea name="description" id="description" cols="70" rows="10"></textarea>
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
                                 
                                  <button type="submit"class="btn px-4 btn-primary text-white">S'inscrire</button>
                                             

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