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
                <th>Logo d'entreprise</th>
                <th>Nom de l'entreprise</th>
                <th>Ville de l'entreprise</th>
                <th>Poste concerné</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offres as $offre)
            <tr>
                <td class="py-1">
                    <img src="{{ asset('storage/' . $offre->user->logo_entreprise) }}" alt="Logo entreprise">
                </td>
                <td>{{ $offre->user->name }}</td>
                <td>{{ $offre->user->villeR }}</td>
                <td>{{ $offre->poste }}</td>
             
                <td>
                    <a href="{{ route('admin.detailoffre', $offre->id) }}">Voir+</a>
                </td>
            </tr>
            @endforeach
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