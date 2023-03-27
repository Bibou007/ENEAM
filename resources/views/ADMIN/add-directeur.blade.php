@extends('admin.layout')

@section('add-directeur')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Tous les directeurs</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);"></a>directeurs</li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Ajouter un directeur</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulaire </h4>
                            @if (Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif
                        </div>

                        <div class="card-body">
                            <form class="form-valide" action="{{ route('store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Nom du directeur</label>
                                            <input id="nom" name="nom" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Selectionner un Genre</label>
                                            <select class="form-control" id="genre" name="genre">
                                                <option value="#">Choisir un genre</option>
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Féminin</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                          
                                        <div class="form-group">
                                            <label class="form-label">Sélectionner le numéro du directeur</label>
                                            <select class="form-control" id="numero" name="numero">
                                                <option value="#">Choisir un numéro </option>
                                                <option value="Actuel">Actuel ( Si Homme)</option>
                                                <option value="Actuelle">Actuelle ( Si Femme)</option>
                                                <option value="Premier">Premier</option>
                                                <option value="Deuxième">Deuxième</option>
                                                <option value="Troisième">Troisième</option>
                                                <option value="Quatrième">Quatrième</option>
                                                <option value="Cinquième">Cinquième</option>
                                                <option value="Sixième">Sixième</option>
                                                <option value="Septième">Septième</option>
                                                <option value="Huitième">Huitième</option>
                                                <option value="Neuvième">Neuvième</option>
                                                <option value="Dixième">Dixième</option>
                                                <option value="Onzième">Onzième</option>
                                                <option value="Douzième">Douzième</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Transcrire le mot du directeur</label>
                                            <textarea id="mot" name="mot" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group fallback w-100">
                                            <label class="form-label d-block">Photo du directeur</label>
                                            <input type="file" id="photo" name="photo" class="dropify"
                                                accept="image/*" data-default-file="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
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

    <script>
        var elt = document.getElementById('sexe');
        elt.addEventListener('change', function() {
            console.log('value => ' + this.value);
            console.log(elt.value);
            if (elt.value == "masculin") {
                console.log('true')
                document.getElementById("img_carte").style.display = 'block';
                document.getElementById("matricule").style.display = 'block';
                document.getElementById("l_matricule").style.display = 'block';
                document.getElementById("l_img_carte").style.display = 'block';
            } else {
                document.getElementById("img_carte").style.display = 'none';
                document.getElementById("matricule").style.display = 'none';
                document.getElementById("l_matricule").style.display = 'none';
                document.getElementById("l_img_carte").style.display = 'none';
            }
        })
        elt.addEventListener('change', function() {
            console.log('value => ' + this.value);
            console.log(elt.value);
            if (elt.value == "feminin") {
                console.log('true')
                document.getElementById("num_ifu").style.display = 'block';
                document.getElementById("l_num_ifu").style.display = 'block';
            } else {
                document.getElementById("num_ifu").style.display = 'none';
                document.getElementById("l_num_ifu").style.display = 'none';
            }
        })

        // function afficher_cacher(elem) {

        //     if (elem.checked) {

        //         document.getElementById("inpt").style.display = 'block';
        //     } else
        //         document.getElementById("inpt").style.display = 'none';
        // }
    </script>
@endsection
