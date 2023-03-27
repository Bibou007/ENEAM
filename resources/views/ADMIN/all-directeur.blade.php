@extends('admin.layout')


@section('all-directeur')

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
                    <li class="breadcrumb-item active"><a href="javascript:void(0);"></a>Directeurs</li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les directeurs</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            @forelse($allDirecteurs as $directeur)
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                
              
                <div class="card">
                    <img class="img-fluid" src="{{asset('uploads/Directeurs/'.$directeur->photo_path)}}" alt="couverture" >
                    <div class="card-body">
                        <h4>{{$directeur->nom}}</h4>
                        <p>Ajouter le {{$directeur->created_at->format('D M Y')}}</p>
                        <p>{{$directeur->mot}}</p>
                        <a href="{{url('/'.$directeur->id)}}" class="btn btn-primary">Consulter</a>
                        <a href="about-courses.html" class="btn btn-primary">Modifier</a>
                        <a href="{{url('/'.$directeur->id)}}" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
                
            </div>
            @empty
                <div class="alert alert-success ">Aucun Directeur</div>
                @endforelse
        </div>
        
    </div>
</div>

@endsection