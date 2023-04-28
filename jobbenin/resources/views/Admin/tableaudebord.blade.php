@extends('Admin/templates.admin')

@section('document')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                
                <h4 class="font-weight-bold text-dark">Hi,DAKO Diane</h4>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 flex-column d-flex grid-margin stretch-card">
                <div class="row ">
                    <div class="col-lg-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recruteurs Actifs</h4>
                                <p></p>
                                <h4 class="text-dark font-weight-bold mb-2">{{ $recruteurs }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Postulants</h4>
                                <p></p>
                                <h4 class="text-dark font-weight-bold mb-2">{{ $postulants }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Freelancers Actifs</h4>
                                <p></p>
                                <h4 class="text-dark font-weight-bold mb-2">{{ $freelancers }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Offres</h4>
                                <p></p>
                                <h4 class="text-dark font-weight-bold mb-2">{{ $offres }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>


        @endsection