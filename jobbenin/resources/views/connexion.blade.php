@extends('templates.app')

@section('document')

<main>

    <div class="row justify-content-center">

        <div class="card o-hidden border-0 shadow-lg my-5" style="width:30em;">
            <div class="card-body p-1" style="">

                <div class="row">

                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                <b> <u> Connectez-vous à JobBénin!</u></b>
                            </h1>
                        </div>
                        <form class="user" method="POST" action="{{'connexion'}}">
                            @csrf
                            <div class="form-group">
                                @error('email')
                                <span role="alert" class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('password')
                                <span role="alert" class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('activation')
                                <span role="alert" class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Entrer Votre  Addresse Email...">

                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" id="password" placeholder=" Entrer Votre Mot de Passe">

                            </div>

                            <a href="">
                                <button type="submit" class="btn btn-primary btn-user btn-block"> Connexion
                                </button>
                            </a>


                            <div class="text-center">
                                <p style="color:#242b5e">
                                    <hr>Vous n'avez pas de compte JobBénin ?<a class="" href="{{('inscription')}}" style="color:#242b5e"><b> <u>S'Inscrire!</u></b> </a>
                                </p>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

    </div>

</main>
@endsection