@extends('templates.app')

@section('document')

<main>

        <div class="container">
  
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="style=" text-align: center>
                        <div>
                            <h2 style=""><u> Publier Une Annonce</u></h2>

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
                <form class="p-4 p-md-5 border rounded" method="">
                        <h3 class="text-black mb-5 border-bottom pb-2">Détails du Poste</h3>
                        <div class="form-group">
                            <label for=" secteur">Secteur D'Activité</label>
                            <input type="text" name="secteur" class="form-control" id="email"
                                placeholder=" Informatique">
                        </div>
                      
                        <div class="form-group">
                            <label for="job-type">Titre d'emploi </label>
                            <input type="text" name ="titre"class="form-control"  placeholder=" Developpeur Mobile">
                        </div>

                        <div class="form-group">
                            <label for="job-title">Date Limite du recrutement</label>
                            <input type="date" name="datelimite" class="form-control" placeholder="AAAA-MM-jj">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="job-type">Type de L'Emploi</label> <br>
                                    <select class="selectpicker border rounded" name="type-job" data-style="btn-black"
                                        data-width="100%" data-live-search="true" title="Select Type Job"
                                        style="width: 200em; ">
                                        <option value="1">A Temps Partiel</option>
                                        <option value="2">A Temps Plein</option>
                                    </select>
                                </div>
                            </div>

                               <div class="col-lg-6">
                                <div class="form-group">

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
                                            id="edit-description-value" name="description" cols="100" rows="10"
                                            placeholder="    -Résumé du poste...
            -Principales activités..."></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="job-Diplomes">Diplomes Requis </label> <br>
                            <select class="selectpicker border rounded" name="diplomesrequis" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Diplomes">
                                <option value="1">Bepc</option>
                                <option value="2">Bac</option>
                                <option value="3">DUT</option>
                                <option value="4">DTS</option>
                                <option value="5">Licence</option>
                                <option value="6">Master</option>
                                <option value="7">Doctorat</option>
                            </select>
                        </div>
 <br> <br>
                        <div class="form-group">
                            <div class="text-format-wrapper">
                                <div class="form-item form-competence wysiwyg-wrapper form-type-textarea form-item-description-value"
                                    id="edit-competence-value-wrapper">
                                    <label for="edit-competence-value">Compétences  requises</label>
                                    <div class="form-textarea-wrapper resizable">
                                        <textarea required="required" class="wysiwyg form-textarea required"
                                            id="edit-competences-value" name="competencesrequises" cols="100" rows="10"
                                            placeholder="Compétences requises pour l'offre "></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row align-items-center mb-5">

<div class="col-lg-4 ml-auto">
    <div class="row">
          
        <div class="col-6">
        <button type = "submit" class="btn btn-block btn-primary btn-md" style=" background-color:#da2461">Brouillon</button>
    </div>
        <div class="col-6">
           <button type ="submit" class="btn btn-block btn-primary btn-md" data-toggle="modal"  data-target="#myModal"> Publier</button>
        </div>
   
                   
</form>
         
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">JobBénin</h4>
            </div>
            <div class="modal-body">
                 <p> <b> L'Annonce a été effectuée avec succès!</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
   

</main>
@endsection