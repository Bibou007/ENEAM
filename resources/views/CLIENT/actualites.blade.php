@extends('client.layout')
@section('actualites')
    <!-- NAVBAR END -->
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Consulter ici les dernières actualités concernant notre école</h1>
                <!-- <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p> -->
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top"
                            src="{{ asset('uploads/Couverture/' . $first_evenement->image_path) }}" alt="..."
                            style="height:500px;" /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $first_evenement->created_at }}</div>
                        <h2 class="card-title">{{ $first_evenement->titre }}</h2>
                        <p class="card-text">{!! Str::words($first_evenement->description, '10', '...') !!}</p>
                        <a class="btn btn-primary" href="{{url('show/'.$first_evenement->id)}}">En savoir plus →</a>

                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @forelse($allEvenements as $evenement)
                        <div class="col-xl-6">


                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top"
                                        src="{{ asset('uploads/Couverture/' . $evenement->image_path) }}" height="300"
                                        width="300" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $evenement->created_at->format('D M Y') }}</div>
                                    <h2 class="card-title h4">{{ $evenement->titre }}</h2>

                                    <p class="card-text">{!! Str::words($evenement->description, '10', '...') !!}</p>
                                    <a class="btn btn-primary" href="{{url('show/'.$evenement->id)}}">En Savoir plus →</a>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="alert alert-success ">Aucune candidatures éffectuées</div>
                    @endforelse
                </div>

                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
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
