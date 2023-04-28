


@extends('Admin/templates.admin')

@section('document')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
            </div>
          </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Publication en Attente</h4>
               
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Logo d'entreprise
                        </th>
                        <th>
                         Nom de L'Entreprise
                        </th>
                        <th>
                         Ville de l'Entreprise
                        </th>
                        <th>
                          Poste Concerné
                        </th>
                        <th>
                         Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                         InnovEm
                        </td>
                        <td>
                        Cotonou
                        </td>
                        <td>
                            Développeur Backend
                        </td>
                        <td>
                      Voir+
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                         InnovEm
                        </td>
                        <td>
                        Cotonou
                        </td>
                        <td>
                            Développeur Backend
                        </td>
                        <td>
                      Voir+
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                         InnovEm
                        </td>
                        <td>
                        Cotonou
                        </td>
                        <td>
                            Développeur Backend
                        </td>
                        <td>
                      Voir+
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
