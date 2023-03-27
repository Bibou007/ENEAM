<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>home</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/asset/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/asset/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/asset/css/owl.theme.default.min.css')}}">

  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/css/mariane.css')}}" />
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/css/sergio.css')}}" />
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/css/viley.css')}}" />
  <link rel="stylesheet" href="{{asset('CLIENT_ASSETS/blog_assets/css/styles.css')}}">


<link rel="stylesheet" href="fontawesome/css/all.min.css">
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<!-- swiper css link  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font css file link  -->
<link rel="stylesheet" href="css/font.css">

</head>

<body>


  <!-- =======================header============================ -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <div class="left-info">
            <marquee scrolldelay="1000" scrollamount="50px">
              <b>
                Nos Valeurs: L’esprit d’équipe et d’engagement - L’excellence - Le partenariat - La reddition des
                comptes
              </b>
            </marquee>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <ul class="right-info">
            <li><a href="">UAC</a></li>
            <li><a href="">Webmail</a></li>
            <li><a href="">Espace administration</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<!-- HEADER ENDS -->
  <!-- ====================TOP LOGO SECTION============================= -->
  <div class=" top-nav">
    <div class="container">
      <div class="row d-flex align-items-center px-3 px-md-0 justify-content-between">
        <div class="col-md-6 d-flex col-xs-12  ">
          <div class="navbar-brand d-flex align-items-center">
            <img src="{{asset('CLIENT_ASSETS/images/téléchargement1.png')}}" class="eneam" alt="">
          </div>
        </div>
        <div class="col-md-6 d-flex uac">
          <div class="navbar-brand d-flex align-items-center">
            <img src="{{asset('CLIENT_ASSETS/images/uac4.png')}}" class="logo1" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- TOP LOGO SECTION END -->
<!-- LE MENU LA NAV -->
  <div class="header header-light">
    <div class="container">
      <nav id="navigation" class="navigation navigation-landscape">
        <div class="nav-header">
          <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper" style="transition-property: none;">
          <ul class="nav-menu">

            <li class="blur active"><a href="{{route('accueil')}}">Accueil<span class="submenu-indicator"></span></a>
            </li>

            <li class="blurs"><a href="#">Eneam<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="{{route('aboutus')}}">Historique<span class="submenu-indicator"></span></a>
                </li>
                <li><a href="{{route('aboutus')}}">Vocation et Mission<span class="submenu-indicator"></span></a>
                </li>
                <li><a href="{{route('administration')}}">Administration<span class="submenu-indicator"></span></a>
                </li>
              </ul>
            </li>

            <li class="blurs"><a href="#">Formations<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="{{route('formations')}}">Département de la Statistique</a></li>
                <li><a href="formations.html">Département de la Plannification du Développement</a></li>
                <li><a href="formations.html">Département du Management des Organisations</a></li>
                <li><a href="formations.html">Département de l'Informatique</a></li>
                <li><a href="formations.html">Expertise Comptable UEMOA</a></li>
              </ul>
            </li>

            <li class="blurs"><a href="#">Recherches<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="">CREAM</a></li>
                <li><a href="">Publications</a></li>
                <li><a href="">Doctorants</a></li>
              </ul>
            </li>

            <li class="blurs"><a href="#">Vie Estudiantine<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="{{route('bue')}}">BUE</a></li>
                <li><a href="{{route('bcs')}}">BCS</a></li>
                <li><a href="{{route('clubs')}}">Clubs et Associations</a></li>
              </ul>
            </li>

            <!-- <li class="blurs"><a href="#">Bibliothèque<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="">Présentations</a></li>
                <li><a href="">Ressources documentaires</a></li>
              </ul>
            </li> -->

            <li class="blurs"><a href="#">Actualités<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="{{route('actualites')}}">Evènements</a></li>
                <li><a href="{{route('consultations')}}">Avis & Communiqués</a></li>
                <li><a href="{{route('consultations')}}">Consulter les PVs</a></li>
                <!-- <li><a href="">Projection</a></li> -->
              </ul>
            </li>

            <li class="blur"><a href="">Services en Ligne<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                <li><a href="">Bibliothèque</a></li>
                <li><a href="">Dépôt de mémoire</a></li>
                <li><a href="">Demande des actes académiques</a></li>
              </ul>
            </li>

            <li class="blur"><a href="{{route('contact')}}">Contacts<span class="submenu-indicator"></span></a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </div>
<!-- NAVBAR END -->





@yield('index')


@yield('administration')

@yield('aboutus')
@yield('bcs')
@yield('bue')
@yield('actualites')
@yield('article_unique')
@yield('clubs')
@yield('formations')
@yield('consultations')
@yield('consultation_unique')
@yield('contact')













<!-- footer section starts  -->

<section class="footer-customized">

    <div class="box-container">

      <div class="box">
        <h3>ENEAM </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, voluptatem.</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <h3>Navigation</h3>
        <a href="about.html" class="link-customized">  A Propos d'ENEAM</a>
        <a href="courses.html" class="link-customized">Nos Formations</a>
        <a href="courses.html" class="link-customized">Nos Actualités</a>
        <a href="courses.html" class="link-customized">Vie Estudiantine</a>
        <a href="contact.html" class="link-customized">Contact-nous</a>
      </div>

      <div class="box">
        <h3>Liens Utiles</h3>
        <a href="#" class="link-customized">Bibliothèque</a>
        <a href="#" class="link-customized">Demande d'acte académique</a>
        <a href="#" class="link-customized">Dépot de mémoire</a>
        <a href="#" class="link-customized">Demande de stage</a>
      </div>

     

    </div>

    <div class="credit"> created by | all rights reserved! | © 2022</div>
  </section>

  <!-- footer section ends -->
  <!-- bootstrap v5.2 js link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"></script>
<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- swiper js link  -->
  <script src="{{asset('CLIENT_ASSETS/asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/asset/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/js/app.js')}}"></script>

  <!-- custom js file link  -->
  <script src="{{asset('CLIENT_ASSETS/js/script.js')}}"></script>
  <!-- <script src="js/script.js"></script> -->


  <script src="{{asset('CLIENT_ASSETS/assets2/js/jquery.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/popper.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/select2.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/aos.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/slick.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/isotope.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/summernote.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/jQuery.style.switcher.js')}}"></script>

  <script src="{{asset('CLIENT_ASSETS/assets2/js/counterup.min.js')}}"></script>
  <script src="{{asset('CLIENT_ASSETS/assets2/js/custom.js')}}"></script>
</body>

</html>