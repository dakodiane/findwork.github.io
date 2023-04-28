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
                    <h4 class="card-title">Postulants</h4>
                    <div class="table-responsive mt-3">
                      <table class="table table-header-bg">
                        <thead>
                          <tr>
                            <th>
                            #
                            </th>
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
                            </th>
                          </tr>
                        </thead>
                        @foreach ($postulants as $postulant)

                        <tbody>
                          <tr>
                            <td class="py-1">{{ $postulant->id }}
                                
                            </td>
                            <td>
                            {{ $postulant->name }}
                            </td>
                            <td>
                              <div class="">{{ $postulant->email }}</div>
                            </td>
                            <td>
                              
                                <div class="">{{ $postulant->villeP }}</div>

                            </td>
                            <td>
                     
                            </td>

                          </tr>
                          
                       
                       
                          
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                </div>
              </div>
            </div>
          
          
        <!-- content-wrapper ends -->
    
        <!-- partial -->
        </div>   </div>
@endsection