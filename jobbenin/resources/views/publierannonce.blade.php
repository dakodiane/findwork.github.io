@extends('templates.app')

@section('document')

<main>
<section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="style=" text-align: center>
                        <div>
                            <h2 style=""> <u> Publier Une Annonce</u></h2>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" method="post">
                        <h3 class="text-black mb-5 border-bottom pb-2">Détails du Poste</h3>
                        <div class="form-group">
                            <label for=" secteur">Secteur D'Activité</label>
                            <input type="text" class="form-control" id="email"
                                placeholder=" Informatique">
                        </div>
                      
                        <div class="form-group">
                            <label for="job-title">Titre d'emploi </label>
                            <input type="text" class="form-control" id="job-title" placeholder=" Developpeur Mobile">
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="job-type">Type de L'Emploi</label> <br>
                                    <select class="selectpicker border rounded" id="job-type" data-style="btn-black"
                                        data-width="100%" data-live-search="true" title="Select Job Type"
                                        style="width: 200em; ">
                                        <option>A Temps Partiel</option>
                                        <option>A Temps Plein</option>
                                    </select>
                                </div>
                            </div>





                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label for="job-Ville">Ville </label> <br>
                                    <select class="selectpicker border rounded" id="job-Ville" data-style="btn-black"
                                        data-width="100%" data-live-search="true" title="Select Ville">
                                        <option value="">Cotonou</option>
                                        <option value="">Abomey-Calavi</option>
                                        <option value="">Porto-Novo</option>
                                        <option value="">Bohicon</option>
                                        <option value="">Abomey</option>
                                        <option value="">Parakou</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="form-group">
                            <div class="text-format-wrapper">
                                <div class="form-item form-description wysiwyg-wrapper form-type-textarea form-item-description-value"
                                    id="edit-description-value-wrapper">
                                    <label for="edit-description-value">Description de L'Offre </label>
                                    <div class="form-textarea-wrapper resizable">
                                        <textarea required="required" class="wysiwyg form-textarea required"
                                            id="edit-description-value" name="description[value]" cols="100" rows="10"
                                            placeholder="    -Résumé du poste...
            -Principales activités..."></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="job-Diplomes">Diplomes Requis </label> <br>
                            <select class="selectpicker border rounded" id="job-Diplomes" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Diplomes">
                                <option value="">Bepc</option>
                                <option value="">Bac</option>
                                <option value="">DUT</option>
                                <option value="">DTS</option>
                                <option value="">Licence</option>
                                <option value="">Master</option>
                                <option value="">Doctorat</option>
                            </select>
                        </div>
 <br> <br>
                        <div class="form-group">
                            <div class="text-format-wrapper">
                                <div class="form-item form-description wysiwyg-wrapper form-type-textarea form-item-description-value"
                                    id="edit-description-value-wrapper">
                                    <label for="edit-description-value">Compétences  requises</label>
                                    <div class="form-textarea-wrapper resizable">
                                        <textarea required="required" class="wysiwyg form-textarea required"
                                            id="edit-description-value" name="description[value]" cols="100" rows="10"
                                            placeholder="Compétences requises pour l'offre "></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row align-items-center mb-5">

<div class="col-lg-4 ml-auto">
    <div class="row">
          
        <div class="col-6">
            <a href="#" class="btn btn-block btn-primary btn-md" style="background-color: #242b5e ;">Brouillon</a>
        </div>
        <div class="col-6">
            <a href="#" class="btn btn-block btn-primary btn-md">Publier</a>
        </div>
    </div>
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