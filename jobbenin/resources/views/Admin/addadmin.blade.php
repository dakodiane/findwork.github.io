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
                    <form action="">
                        <div class="row">

                    <div class="col-4">                 
                        <label for="Nom">Nom Complet</label> <br>
                        <input type="text" name="" id="" placeholder="Nom Complet"> <br>
                    </div>  
                    <div class="col-4">
                        <label for="Email">Email</label> <br>
                        <input type="text" name="" id="" placeholder="Email"> </div>   
                        
                    <div class="col-4">
                        <label for="Ville">Ville</label> <br>
                        <input type="text" name="" id="" placeholder="Ville"> <br>
                    </div>  
                </div>
                <div style="height: 40px;"></div>
                <div class="row">
                    <div class="col-12">   
   <input type="button" value="Ajouter" style="height: 40px;width:
    100%;background-color:#1180fb;color: white;border-style: none;">
</div>
</form>
                </div>
              </div>
            </div>
          
        </div>
        
        
        </div>
        </div>
      </div>

@endsection