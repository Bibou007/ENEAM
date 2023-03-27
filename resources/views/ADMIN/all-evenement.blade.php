@extends('admin.layout')


@section('all-evenement')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
            
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tous les évènements</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);"></a>Evènements</li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les évènements</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            @forelse($allEvenements as $evenement)
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                
              
                <div class="card">
                    <img class="img-fluid" src="{{asset('uploads/Couverture/'.$evenement->image_path)}}" alt="couverture" >
                    <div class="card-body">
                        <h4>{{$evenement->titre}}</h4>
                        <p>Posté le {{$evenement->created_at->format('D M Y')}}</p>
                        <p>{{$evenement->description}}</p>
                        <a href="{{url('show-evenement/'.$evenement->id)}}" class="btn btn-primary">Consulter</a>
                        <a href="about-courses.html" class="btn btn-primary">Modifier</a>
                        <a href="{{url('delete-evenement/'.$evenement->id)}}" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
                
            </div>
            @empty
                <div class="alert alert-success ">Aucune candidatures éffectuées</div>
                @endforelse
        </div>
        
    </div>
</div>

@endsection