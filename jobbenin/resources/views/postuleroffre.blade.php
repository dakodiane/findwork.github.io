@extends('templates.app')

@section('document')

<main>
    
        <section class="site-section">
            <div class="container" style="width:45em;">

                <div class="row justify-content-center align-items-center">
                    <div class="card o-hidden border-0 shadow-lg my-5" >
                        <div class="card-body p-1" style="">
                            <div class="" style="justify-content: center;">
                                <p></p><p></p>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        <b> <u>Vos Informations!</u> </b>
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
                                                <label class="text-black" for="fname">Lettre de Motivation</label>
                                                <div class="col-md-12 mb-3 mb-md-0">
                                                    <textarea name="" id="" cols="60" rows="10" placeholder="Rédigez Votre lettre de Motivation"></textarea>
                                                    
                                                </div>
                                  
                                            </div>
                                        </div>
                                        <div class="row form-group mb-4">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname"> Curriculum Vitae (Cv)</label>
                                                    <div class="description">Les fichiers doivent peser moins de
                                                        <strong>2 Mo</strong>.<br />
                                                        Extensions autorisées :<strong>doc docx pdf</strong>.</div>
                                                      <div class="file-widget form-managed-file clearfix">
                                                       <input type="file" id="edit-field-candidature-cv-und-0-upload"
                                                        name="files[field_candidature_cv_und_0]" size="50" class="form-file" />
                                                        <input type="hidden" name="field_candidature_cv[und][0][fid]" value="0" />
                               
                               
                                                     <input type="hidden" name="field_candidature_cv[und][0][display]" value="1" />

                                                     </div>

                                            </div>
                                            </div>
                                            <div class="row form-group"  style="margin-left:400px">
                                            
                                            <div class="col-md-6">
                                                <input type="submit" value="Postuler"
                                                    class="btn px-4 btn-primary text-white">

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