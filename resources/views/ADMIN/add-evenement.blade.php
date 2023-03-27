@extends('admin.layout')

@section('add-evenement')






<div class="content-body">
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0);"></a>évènements</li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Ajouter un évènement</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire </h4>
                        @if(Session::has('message'))

                        <div class="alert alert-success">{{Session::get('message')}}</div>
    
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <form class="form-valide" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Titre de l'évenement</label>
                                        <input id="titre" name="titre" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Sélectionner une catégorie</label>
                                        <select class="form-control" id="categorie" name="categorie">
                                            <option value="#">Choisir une catégorie </option>
                                            <option value="Avis & Communiqué">Avis & Communiqué</option>
                                            <option value="Délibération">Délibération</option>
                                            <option value="Concours">Concours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description entière de l'évenement</label>
                                        <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                        <label class="form-label d-block">Image de couverture</label>
                                        <input type="file" id="image" name="image" class="dropify" accept="image/*" data-default-file="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cencel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>








@endsection