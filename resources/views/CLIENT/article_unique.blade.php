@extends('client.layout')
@section('article_unique')
      <!-- Page content-->
      <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$evenement->titre}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posté le {{$evenement->created_at->format(' Y M D')}} par l'Admnistrateur</div>
                        <!-- Post categories-->
                        {{-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> --}}
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('uploads/Couverture/' . $evenement->image_path) }}" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5 post-content"  >
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">{{$evenement->description}}</p>
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                        <h2 class="fw-bolder mb-4 mt-5" style="font-size: 15px !important;">I have odd cosmic thoughts every day</h2>
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                        <p class="fs-5 mb-4" style="font-size: 15px !important;">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                    </section>
                </article>
                
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