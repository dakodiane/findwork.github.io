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
                        @foreach ($admins as $admin)

                        <tbody>
                     
                          <tr>
                           
                            <td>
                            {{ $admin->name }}
                            </td>
                            <td>
                              <div class="text-success"><i class=""></i>{{ $admin->email }}</div>
                            </td>
                            <td>
                              <div class="row">
                                <div class="col-sm-10">
                              
                                {{ $admin->ville }}
                                </div>
                               
                              </div>

                            </td>
                             <td>
                             <button type="button" class="btn btn-danger btn-rounded btn-fw">Supprimer</button>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
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