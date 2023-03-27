@extends('client.layout')
@section('consultation_unique')
      <!-- Page content-->
      <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h2 style="text-align: center; margin:15px 0px;">{{$pv->annee}}-{{$pv->filiere}}-{{$pv->mode_cours}}</h2>
                <!-- Post content-->
                <embed src="{{asset('uploads/PV/'.$pv->pv_path)}}" height="800" width="100%" >
                
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
              <!-- Categories widget-->
              <div class="card mb-4">
                  <div class="card-header" style="font-size: 15px">Categories</div>
                  <div class="card-body" style="font-size: 15px">
                      <div class="row">
                          <div class="col-sm-6">
                              <ul class="list-unstyled mb-0">
                                  <li><a href="#!">Avis</a></li>
                                  <li><a href="#!">Communiqué</a></li>
                                  <li><a href="#!">Délibération</a></li>
                              </ul>
                          </div>
                          <div class="col-sm-6">
                              <ul class="list-unstyled mb-0">
                                  <li><a href="#!">Concours</a></li>
                                  <li><a href="#!">Réclamation</a></li>
                                  <li><a href="#!">Rattrapages</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Side widget-->
              <div class="card mb-4">
                  <div class="card-header" style="font-size: 15px">Consulation des résultats</div>

                  <div class="card-body" style="font-size: 15px">
                      <form action="" method="post">

                          <div class="form-group">
                              <div class="input-with-gray">

                                  <select name="" id="" class="form-control"
                                      style="font-size: 15px; margin-bottom:10px">
                                      <option value="">Choisir l'Année Académique</option>
                                      <option value="">2022-2023</option>
                                      <option value="">2021-2022</option>
                                  </select>
                              </div>
                              <div class="input-with-gray">
                                  <select name="" id="" class="form-control"
                                      style="font-size: 15px; margin-bottom:10px">
                                      <option value="">Choisir le mode de cours</option>
                                      <option value="">Jour</option>
                                      <option value="">Soir</option>
                                  </select>
                              </div>
                              <div class="input-with-gray">
                                  <select name="" id="" class="form-control"
                                      style="font-size: 15px; margin-bottom:10px">
                                      <option value="">Choisir une filière</option>
                                      <option value="">Informatique de gestion</option>
                                      <option value="">Gestion Banque & Assurance</option>
                                      <option value="">Gestion Transport & Logistique</option>
                                      <option value="">Gestion Financière & Comptable</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <button type="submit"
                                  class="btn btn-primary btn-md full-width pop-login">Rechercher</button>
                          </div>
                      </form>

                  </div>
                  <div class="card mb-4">
                      <div class="card-header" style="font-size: 15px">Consulation des rattrapages</div>

                      <div class="card-body" style="font-size: 15px">
                          <form action="" method="post">

                              <div class="form-group">
                                  <div class="input-with-gray">

                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir l'Année Académique</option>
                                          <option value="">2022-2023</option>
                                          <option value="">2021-2022</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir le mode de cours</option>
                                          <option value="">Jour</option>
                                          <option value="">Soir</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir une filière</option>
                                          <option value="">Informatique de gestion</option>
                                          <option value="">Gestion Banque & Assurance</option>
                                          <option value="">Gestion Transport & Logistique</option>
                                          <option value="">Gestion Financière & Comptable</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit"
                                      class="btn btn-primary btn-md full-width pop-login">Rechercher</button>
                              </div>
                          </form>

                      </div>
                  </div>
                  <div class="card mb-4">
                      <div class="card-header" style="font-size: 15px">Consulation des Réclamation</div>

                      <div class="card-body" style="font-size: 15px">
                          <form action="" method="post">

                              <div class="form-group">
                                  <div class="input-with-gray">

                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir l'Année Académique</option>
                                          <option value="">2022-2023</option>
                                          <option value="">2021-2022</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir le mode de cours</option>
                                          <option value="">Jour</option>
                                          <option value="">Soir</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir une filière</option>
                                          <option value="">Informatique de gestion</option>
                                          <option value="">Gestion Banque & Assurance</option>
                                          <option value="">Gestion Transport & Logistique</option>
                                          <option value="">Gestion Financière & Comptable</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit"
                                      class="btn btn-primary btn-md full-width pop-login">Rechercher</button>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="card mb-4">
                      <div class="card-header" style="font-size: 15px">Consulation des reprises</div>

                      <div class="card-body" style="font-size: 15px">
                          <form action="" method="post">

                              <div class="form-group">
                                  <div class="input-with-gray">

                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir l'Année Académique</option>
                                          <option value="">2022-2023</option>
                                          <option value="">2021-2022</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir le mode de cours</option>
                                          <option value="">Jour</option>
                                          <option value="">Soir</option>
                                      </select>
                                  </div>
                                  <div class="input-with-gray">
                                      <select name="" id="" class="form-control"
                                          style="font-size: 15px; margin-bottom:10px">
                                          <option value="">Choisir une filière</option>
                                          <option value="">Informatique de gestion</option>
                                          <option value="">Gestion Banque & Assurance</option>
                                          <option value="">Gestion Transport & Logistique</option>
                                          <option value="">Gestion Financière & Comptable</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit"
                                      class="btn btn-primary btn-md full-width pop-login">Rechercher</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>

 @endsection