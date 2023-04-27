@extends('Admin/templates.admin')

@section('document')
<div class="main-panel">
    <div class="content-wrapper" style="font-size: 5px;color:black">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-size: large;">Detail</h4>
           <br><br>
            <div class="row">
                <div class="col-md-5">
                    <address>
                        <p class="font-weight-bold" style="font-size: large;"> {{ $recruteurs->name }}</p>
                        <br><br>
                        <p style="font-size: large;">
                            {{ $recruteurs->villeR }}
                        </p>
                        <br><br><br>
                        <address class="text-primary">
                            <p class="font-weight-bold">
                                E-mail
                            </p>
                            <p class="mb-2" >
                                {{ $recruteurs->email }}
                            </p>
                            <br><br>
                        </address>
                    </address>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body font-weight-bold">
                        <p style="font-size: large;">
                           Description
                        </p>
                            <p>
                                {{ $recruteurs->description_recruteur }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">
   
    @if($recruteurs->active)
                                             <a href="{{ route('desactiver.recruteur', $recruteurs->id) }}">
                                                <button type="button"
                                                    class="btn btn-danger btn-rounded btn-fw">Désactiver</button>
                                                    </a>
                                            @else
                                            <a href="{{ route('activer.recruteur', $recruteurs->id) }}">
                                          
                                            <button type="button" class="btn btn-success btn-rounded btn-fw">Activer</button>

                                                    </a>
                                               
                                             
                                            @endif
        </div>
        
</div>
  
</div>


@endsection