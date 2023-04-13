@extends('templates.app')

@section('document')

<main>
    <div class="container">

   
<div class="row mb-5">
            <div class="col-lg-12">
                <form class="p-4 p-md-5 border rounded" method="POST" action="{{ route('offre.update',['id' => $offre->id]) }}">
                @csrf 
                @method('PUT')
                  <h3 class="text-black mb-5 border-bottom pb-2">Détails du Poste</h3>
                    <div class="form-group">
                        <label for=" secteur">Secteur D'Activité</label>
                        <input type="text" name="secteurO" value="{{$offre->secteurO}}" class="form-control" id="email" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="job-type">Poste</label>
                        <input type="text" name="poste" value="{{$offre->poste}}"  class="form-control" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="job-title">Date Limite du recrutement</label>
                        <input type="date" name="datfin" value="{{$offre->datfin}}"  class="form-control" placeholder="AAAA-MM-jj">
                    </div>
                    <div class="form-group">
                        <label for="job-title">Salaire</label>
                        <input type="text" name="salaireO" value="{{$offre->salaireO}}" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job-type">Type de L'Emploi</label> <br>
                                <select class="selectpicker border rounded" name="typeO" value="{{$offre->typeO}}"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Type Job" style="width: 200em; ">
                                    <option value="partiel ">A TempsPartiel</option>
                                    <option value="plein">A Temps Plein</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">

                                <label for="job-Ville">Ville </label> <br>
                                <select class="selectpicker border rounded" name="villeO" value="{{$offre->villeO}}"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Ville">
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
                                <label for="edit-description-value">Description de L'Offre </label>
                                <div class="form-textarea-wrapper resizable">
                                    <textarea required="required" class="wysiwyg form-textarea required" name="description_offre" value="" cols="100" rows="10" placeholder="">{{$offre->description_offre}}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="job-Diplomes">Diplomes Requis </label> <br>
                        <select class="selectpicker border rounded" name="diplome" value="{{$offre->diplome}}"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Diplomes">
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

                                <input type="text" name="competence_offre1" value="{{$offre->competence_offre1}}"  class="form-control" placeholder="competence1">
                                <input type="text" name="competence_offre2" value="{{$offre->competence_offre2}}" class="form-control" placeholder="competence2">
                                <input type="text" name="competence_offre3" value="{{$offre->competence_offre3}}" class="form-control" placeholder="competence3">
                                <input type="text" name="competence_offre4" value="{{$offre->competence_offre4}}" class="form-control" placeholder="competence4">
                                <input type="text" name="competence_offre5" value="{{$offre->competence_offre5}}" class="form-control" placeholder="competence5">

                            </div>

                        </div>

                    </div>

                    <div class="row align-items-center mb-5">

                        <div class="col-lg-4 ml-auto">
                            <div class="row">

                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-primary btn-md"> Modifier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        </div>
</main>
@endsection