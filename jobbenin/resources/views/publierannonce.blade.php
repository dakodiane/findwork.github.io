@extends('templates.app')

@section('document')

<main>

    <div class="container">

        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="style=" text-align: center>
                    <div>
                        <h2><u> Publier Une Annonce</u></h2>

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
                <form class="p-4 p-md-5 border rounded" method="POST" action="{{ route('annoncepublier') }}" id="my-form">
                    {{ csrf_field() }}
                    <h3 class="text-black mb-5 border-bottom pb-2">Détails du Poste</h3>
                    <div class="form-group">
                        <label for=" secteur">Secteur D'Activité</label>
                        <input type="text" required="required" name="secteurO" class="form-control" id="secteur" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="job-type">Intitulé du Poste</label>
                        <input type="text" name="poste" required="required" class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="job-title">Date Limite du recrutement</label>
                        <input type="date" name="datfin" required="required" class="form-control" placeholder="AAAA-MM-jj">
                    </div>
                 
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job-type">Type de L'Emploi</label> <br>
                                <select class="selectpicker border rounded" name="typeO" required="required" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Type Job" style="width: 200em; ">
                                    <option value="partiel">A Temps Partiel</option>
                                    <option value="plein">A Temps Plein</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">

                                <label for="job-Ville">Ville </label> <br>
                                <select class="selectpicker border rounded" name="villeO" required="required" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Ville">
                                    <option value="cotonou">Cotonou</option>
                                    <option value="abomey-calavi">Abomey-Calavi</option>
                                    <option value="porto-novo">Porto-Novo</option>
                                    <option value="bohicon">Bohicon</option>
                                    <option value="abomey">Abomey</option>
                                    <option value="parakou">Parakou</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="form-group">
                        <div class="text-format-wrapper">
                            <div class="form-item form-description wysiwyg-wrapper form-type-textarea form-item-description-value" id="edit-description-value-wrapper">
                                <label for="edit-description-value">Description du Poste </label>
                                <div class="form-textarea-wrapper resizable">
                                    <textarea required="required" class="wysiwyg form-textarea required" name="description_offre" cols="100" rows="10" placeholder=""></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="job-Diplomes">Diplomes Requis </label> <br>
                        <select class="selectpicker border rounded" name="diplome" required="required" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Diplomes">
                            <option value="bepc">Bepc</option>
                            <option value="bac">Bac</option>
                            <option value="DUT">DUT</option>
                            <option value="DTS">DTS</option>
                            <option value="licence">Licence</option>
                            <option value="master">Master</option>
                            <option value="doctorat">Doctorat</option>
                        </select>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <div class="text-format-wrapper">
                            <div class="form-item form-competence wysiwyg-wrapper form-type-textarea form-item-description-value">
                                <label for="edit-competence-value">Compétences requises</label>

                                <input type="text" required="required" name="competence_offre1" class="form-control" placeholder="competence1">
                                <input type="text" name="competence_offre2" class="form-control" placeholder="competence2">
                                <input type="text" name="competence_offre3" class="form-control" placeholder="competence3">
                                <input type="text" name="competence_offre4" class="form-control" placeholder="competence4">
                                <input type="text" name="competence_offre5" class="form-control" placeholder="competence5">

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="row">


                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-primary btn-md" id="submit-btn" data-toggle="modal" data-target="#myModal"> Publier</button>
                            </div>
                       

                        </div>
                    </div>

                </form>

              

            </div>
        </div>

    </div>
</main>
@endsection