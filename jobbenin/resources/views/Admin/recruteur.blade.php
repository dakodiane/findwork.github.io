@extends('Admin/templates.admin')

@section('document')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Hi,DAKO Diane</h4>
            </div>
        </div>
    

        <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recruteurs</h4>
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
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                
                                @foreach ($recruteurs as $recruteur)

                                <tbody>
                                    <tr>
                                        <td class="py-1">{{ $recruteur->id }}
                                            <img src="{{ asset('storage/photoslogo/' . $recruteur->logo_entreprise) }}" alt="Logo Entreprise">
                                        </td>
                                        <td>
                                            {{ $recruteur->name }}
                                        </td>
                                        <td>
                                            <div class="">{{ $recruteur->email }}</div>
                                        </td>
                                        <td>

                                            <div class="">{{ $recruteur->villeR }}</div>

                                        </td>
                                        <td>

                                            <a href="{{ route('detailrecruteur', $recruteur->id) }}">
                                                <button type="button" class="btn btn-success btn-rounded btn-fw">Voir detail</button>

                                            </a>


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
        </div>
    </div>
    @endsection