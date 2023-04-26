@extends('Admin/templates.admin')

@section('document')
  
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi,Nom</h4>
            </div>
          </div>
          <div class="row ">
            <div class="col-lg-12 flex-column d-flex grid-margin stretch-card">
              <div class="row ">
                <div class="col-lg-6 stretch-card">
                    <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Recruteurs</h4>
                          <p>23% increase in conversion</p>
                          <h4 class="text-dark font-weight-bold mb-2">43,981</h4>
                      </div>
                    </div>
                </div>
               
               <div class="col-lg-6 stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Freelancers</h4>
                      <p>6% decrease in earnings</p>
                      <h4 class="text-dark font-weight-bold mb-2">55,543</h4>
                  </div>
                </div>
           </div>
           
              </div>
            </div>
          
          </div>
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Transactions Récentes</h4>
                    <div class="table-responsive mt-3">
                      <table class="table table-header-bg">
                        <thead>
                          <tr>
                            <th>
                             Nom du Déposant
                            </th>
                            <th>
                               Catégorie de Publicité
                            </th>
                            <th>
                               Montant
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           
                            <td>
                           CFG Sarl
                            </td>
                            <td>
                              <div class="text-success"><i class=""></i>Premium</div>
                            </td>
                            <td>
                              <div class="row">
                                <div class="col-sm-10">
                              
                                    10000FCFA
                             
                                </div>
                               
                              </div>
                            </td>
                            
                          </tr>
                          <tr>
                           
                            <td>
                           CFG Sarl
                            </td>
                            <td>
                              <div class="text-success"><i class=""></i>Premium+</div>
                            </td>
                            <td>
                              <div class="row">
                                <div class="col-sm-10">
                              
                                    20000FCFA
                             
                                </div>
                               
                              </div>
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          
        </div>
        
        </div>
        </div>
       
        
      </div>

@endsection