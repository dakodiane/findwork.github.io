@extends('templates.app')

@section('document')
<main>

  
<div class="row justify-content-center" >

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-1" style="">
              
                <div class="row">
                
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    <b> <u> Connectez-vous à JobBénin!</u></b>
                                   </h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Entrer Votre  Addresse Email...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder=" Entrer Votre Mot de Passe">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">
                                            Se Souvenir de Moi</label>
                                    </div>
                                </div>
                                <a href="index.html" class="btn btn-primary btn-user btn-block">
                                    Connexion
                                </a>
                              
                              
                                <div class="text-center">
                                <p style="color:#242b5e"><hr>Vous n'avez pas de compte JobBénin ?<a class="" href="index.html" style="color:#242b5e"><b> <u>S'Inscrire!</u></b> </a>
                                </p> </div>
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