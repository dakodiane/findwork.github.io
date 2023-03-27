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

                                    <form action="{{'inscriptionfreelancer'}}" method="POST" class="p-4 border rounded"id="forminsc">
                                    @csrf
                                              <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Nom</label>
                                                <input type="text" id="nomF" name="nomF"class="form-control"
                                                    placeholder="Entrer votre Nom ">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Prénom</label>
                                                <input type="text" id="prenomF" name="prenomF"class="form-control"
                                                    placeholder="Entrer vos Prénoms">
                                            </div>
                                        </div>
                                        <div class="row form-group ">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname"> Photo Professionnelle</label>
                                                    <div class="description">Les fichiers doivent peser moins de
                                                        <strong>2 Mo</strong>.<br />
                                                        Extensions autorisées :<strong>png jpeg pdf</strong>.</div>
                                                      <div class="file-widget form-managed-file clearfix">
                                                       <input type="file" id="edit-field-inscription-und-0-upload"
                                                        name="files[field_inscription_und_0]" size="50" class="form-file" />
                                                        <input type="hidden" name="field_inscription_[und][0][fid]" value="0" />
                               
                               
                                                     <input type="hidden" name="field_inscription_[und][0][display]" value="1" />

                                                     </div>

                                            </div>
                                            </div>


                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Email</label>
                                                <input type="text" id="emailF" name="emailF" class="form-control"
                                                    placeholder="Addresse Email">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname">Mot de Passe</label>
                                                <input type="password" id="mdpF" name="mdpF" class="form-control"
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