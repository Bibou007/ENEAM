@extends('client.layout')

@section('index')
  <div></div>

  <!-- CARROUSSEL DE HERO  -->
  <div class="slider-wrapper owl-carousel owl-theme" id="hero-slider">
@foreach($allEvenements as $evenement)
    <div class="  d-flex align-items-center" style="background-image: url('{{asset('uploads/Couverture/'.$evenement->image_path)}}'); background-size:cover; height:70vh; background-position:center;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- J'AI STYLISER EN BRUTE DANS LE HTML CETTE PARTIE ON DOIT LA METTRE DANS LE CSS ET ATTRIBUER DES CLASSES AUX ELEEMNTS -->
            <h1 style="font-weight: 700; font-family: cursive;" class="text-uppercase display-2 text-white">{{$evenement->titre}}</h1>
            <p style="width:5vs; font-size:15px;color:white;margin: 3.5% 0%;">This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
            </p>
            <a style="width:145px;height: 40px; border-radius: 5px; font-size: 15px;padding:10px 15px" class="button2" href="{{url('show/'.$evenement->id)}}">En Savoir Plus</a>
          <!-- FIN DE LA MODIFICATION AJOUT D'UNE CLASSE BUTTON2 AU BOUTTON POUR STYLISER DANS MARIANE.CSS A LA LIGNE 935 -->
          </div>
        </div>
      </div>
    </div>
@endforeach
    {{-- <div class="slide2  d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
             <!-- J'AI STYLISER EN BRUTE DANS LE HTML CETTE PARTIE ON DOIT LA METTRE DANS LE CSS ET ATTRIBUER DES CLASSES AUX ELEEMNTS -->
             <h1 style="font-weight: 700; font-family: cursive;" class="text-uppercase display-2 text-white">Heureuse année</h1>
             <p style="width:5vs; font-size:15px;color:white;margin: 3.5% 0%;">This is a wider card with supporting text below as a
               natural lead-in to additional content. 
               This is a wider card with supporting text below as a
               natural lead-in to additional content. 
               This is a wider card with supporting text below as a
               natural lead-in to additional content. 
               This is a wider card with supporting text below as a
               natural lead-in to additional content. 
             </p>
             <button style="width:145px;height: 40px; border-radius: 5px; font-size: 15px;" class="button2">En Savoir Plus</button>
           <!-- FIN DE LA MODIFICATION AJOUT D'UNE CLASSE BUTTON2 AU BOUTTON POUR STYLISER DANS MARIANE.CSS A LA LIGNE 935 -->
          </div>
        </div>
      </div>
    </div>
    <div class="slide3  d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- J'AI STYLISER EN BRUTE DANS LE HTML CETTE PARTIE ON DOIT LA METTRE DANS LE CSS ET ATTRIBUER DES CLASSES AUX ELEEMNTS -->
            <h1 style="font-weight: 700; font-family: cursive;" class="text-uppercase display-2 text-white">Journée de l'excellence</h1>
            <p style="width:5vs; font-size:15px;color:white;margin: 3.5% 0%;">This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
              This is a wider card with supporting text below as a
              natural lead-in to additional content. 
            </p>
            <button style="width:145px;height: 40px; border-radius: 5px; font-size: 15px;" class="button2">En Savoir Plus</button>
          <!-- FIN DE LA MODIFICATION AJOUT D'UNE CLASSE BUTTON2 AU BOUTTON POUR STYLISER DANS MARIANE.CSS A LA LIGNE 935 -->
          </div>
        </div>
      </div>
    </div> --}}

  </div>



<!-- SECTION DU MOT DU DIRECTEUR -->
  <section class="Directeur py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 mot text-center">
          <h1 class="section-header">UN MOT DE NOTRE DIRECTEUR</h1>
        </div>
        <div class="row">
          <div class="cadre-dirlo">
            <div class="block">
              <div class="row">
                <div class="col-md-4">
                  <div class="user">
                    <div class="image">
                      <img src="{{asset('CLIENT_ASSETS/images/directeur.jpg')}}" alt="" class="img-directeur">
                    </div>
                    <div class="info">
                      <h2 class="user-name">Albert N. HONLONKOU</h2>
                      <h5>Directeur de l'ENEAM</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-7" style="display: flex;align-items: center;justify-content: center;">
                  <div class="content">
                    <p>
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. 
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. 
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. 
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. 
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>

<!-- ======================SECTION NOS DIRECTEURS========================== -->
<section id="directeurs" class="">
  <div class="container">
    <div class="row">
      <div class="col-12 title_department text-center">
        <h1 style="font-size: 30px;" class="intro">NOS ANCIENS DIRECTEURS</h1>
      </div>
    </div>
  </div>
  <div class="owl-carousel owl-theme" id="directeurs-slide">
    @foreach($allDirecteurs as $directeur)
    <div class="directeur">
      <img src="{{asset('CLIENT_ASSETS/images/worou.jpg')}}" alt="">
      <h4>{{$directeur->nom}}</h4>
      <small>{{$directeur->numero}} directeur</small>
    </div>
   
    @endforeach
  </div>
</section>
<!-- ======================FIN SECTION NOS DIRECTEURS========================== -->
<!-- SECTION NOS DEPARTEMENTS -->
  <section class="home-courses">
    <div class="container">
      <div class="row">
        <div class="col-12 title_department">
          <h1 style="font-size: 30px;" class="heading">NOS DEPARTEMENTS ET FILIERES</h1>
        </div>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/statistiques.jpg')}}" alt="" />
            <h3>Statistique</h3>
          </div>
          <div class="content">
            <h3>Statistique</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/planification.jpg')}}" alt="" />
            <h3>Plannification du Développement</h3>
          </div>
          <div class="content">
            <h3>Plannification du Développement</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/Bol4.jpeg')}}" alt="" />
            <h3>Management des Organisations</h3>
          </div>
          <div class="content">
            <h3>Management des Organisations</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/internet.jpg')}}" alt="" />
            <h3>Informatique</h3>
          </div>
          <div class="content">
            <h3>Informatique</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/Bol4.jpeg')}}" alt="" />
            <h3>Expertise Comptable UEMOA</h3>
          </div>
          <div class="content">
            <h3>Expertise Comptable UEMOA</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="{{asset('CLIENT_ASSETS/images/Bol4.jpeg')}}" alt="" />
            <h3>Expertise Comptable UEMOA</h3>
          </div>
          <div class="content" >
            <h3>Expertise Comptable UEMOA</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laborum, ratione?
            </p>
            <a href="{{route('formations')}}" class="custom-btn">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>



  </section>
 

<!-- ======================SECTION NOS ACTUALITES========================== -->
<section id="directeurs" class="">
  <div class="container">
    <div class="row">
      <div class="col-12 title_department text-center">
        <h1 style="font-size: 30px;" class="intro">NOS ACTUALITEES</h1>
      </div>
    </div>
  </div>
  <div class="owl-carousel owl-theme" id="actu-slide">
    
    
    @forelse($allEvenements as $evenement)
      <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="{{asset('uploads/Couverture/'.$evenement->image_path)}}" height="300" width="300" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted">{{$evenement->created_at->format('D M Y')}}</div>
            <h2 class="card-title h4">{{$evenement->titre}}</h2>
            <p class="card-text">{{$evenement->description}}</p>
            <a class="btn btn-primary" href="{{url('show/'.$evenement->id)}}">En Savoir plus →</a>
        </div>
      </div>
   @empty
   
   <div class="alert alert-info">Hello World</div>

   @endforelse
  </div>
</section>

  @endsection