@extends('admin.layout')

@section('add-pv')

<div class="content-body">
    <div class="container-fluid">
        
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tous les Procès verbaux</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);"></a>Procès verbaux</li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Ajouter un PV</a></li>
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
                        <div class="form-validation">
                            <form class="form-valide" action="{{ route('store-pv') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                  
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Année Académique</label>
                                            <select class="form-control" id="annee" name="annee">
                                                <option value="#">Choisir la promotion</option>
                                                <option value="2022-2023">2022-2023</option>
                                                <option value="2021-2022">2021-2022</option>
                                                <option value="2020-2021">2020-2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Mode de Cours</label>
                                            <select class="form-control" id="mode_cours" name="mode_cours">
                                                <option value="#">Choisir le mode de cours</option>
                                                <option value="Jour">Jour</option>
                                                <option value="Soir">Soir</option>
                                                <!-- <option value="Female">Female</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Filière</label>
                                            <select class="form-control" id="filiere" name="filiere"> 
                                                <option value="#">Choisir la filière</option>
                                                <option value="html">Informatique de Gestion</option>
                                                <option value="css">Gestion Fiancière et comptable</option>
                                                <option value="javascript">Gestion Transport et Logistique</option>
                                                <option value="angular">Gestion Banque Assurance</option>
                                                <option value="angular">Gestion Ressources Humaine</option>
                                                <option value="vuejs">Gestion Commerciale</option>
                                                <option value="ruby">Planification</option>
                                                <option value="php">Statistique</option>
                                                <!-- <option value="asp">ASP.NET</option>
                                                <option value="python">Python</option>
                                                <option value="mysql">MySQL</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="form-group fallback w-100">
                                            <label class="form-label">Téléverser le fichier PDF scané du PV</label> <br>
                                            <input id="pv_pdf" name="pv_pdf"  type="file" accept="pdf/*" class="dropify" data-default-file="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        <button type="submit" class="btn btn-light">Annuler</button>
                                    </div>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>



@endsection