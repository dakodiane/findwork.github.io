@extends('Admin/templates.admin')

@section('document')
  
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi,Nom</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter un administrateur </h4>
                    <div style="height: 20px;"></div>
                    <form action="{{'addadmin'}}" method="POST">
                      @csrf
                        <div class="row">

                    <div class="col-md-3">                 
                        <label for="">Nom Complet</label> <br>
                        <input type="text" name="name" id="name" placeholder="Nom Complet"> <br>
                    </div>  
                    <div class="col-md-3">
                        <label for="">Email</label> <br>
                        <input type="text" name="email" id="email" placeholder="Email"> </div>   
                        <div class="col-md-3">
                        <label for="">Mot de passe</label> <br>
                        <input type="text" name="password" id="password" placeholder="Mot de passe"> </div> 
                    <div class="col-md-3">
                        <label for="">Ville</label> <br>
                        <input type="text" name="ville" id="ville" placeholder="Ville"> <br>
                    </div>  
                </div>
                <div style="height: 40px;"></div>
                <button type="submit" class="btn btn-info btn-lg btn-block" >Ajouter</button>
              </form>
                </div>
              </div>
            </div>
          
        </div>
        
        
        </div>
        </div>
      
      </div>
@endsection