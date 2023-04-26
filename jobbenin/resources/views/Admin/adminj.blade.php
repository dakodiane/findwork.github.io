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
                    <h4 class="card-title">Administrateurs JobBenin</h4>
                    <div class="table-responsive mt-3">
                      <table class="table table-header-bg">
                        <thead>
                          <tr>
                            <th>
                             Nom Complet
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                            Ville
                            </th>
                            <th>
                             Actions
                                </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           
                            <td>
                          DAKO Diane
                            </td>
                            <td>
                              <div class="text-success"><i class=""></i>admin1@gmail.com</div>
                            </td>
                            <td>
                              <div class="row">
                                <div class="col-sm-10">
                              
                                    Cotonou
                                </div>
                               
                              </div>
                            </td>
                            <td>
                                <div class="text-danger"><i class=""></i>Supprimer</div>
                              </td>
                          </tr>
                          <tr>
                           
                            <td>
                        AKPONNE Djèmilath
                            </td>
                            <td>
                              <div class="text-success"><i class=""></i>admin18@gmail.com</div>
                            </td>
                            <td>
                              <div class="row">
                                <div class="col-sm-10">
                              
                                    Cotonou
                                </div>
                               
                              </div>

                            </td>
                             <td>
                              <div class="text-danger"><i class=""></i>Supprimer</div>
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
      
      </div>

@endsection