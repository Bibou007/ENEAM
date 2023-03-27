@extends('client.layout')
@section('aboutus')

   <!-- SECTION HISTORIQUE START HERE -->
   <section class="about">
      <div class="container-fluid content">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
               <div class="image">
                  <img src="{{asset('CLIENT_ASSETS/images/AfficheENEAM.jpg')}}" alt="">
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 historique-section-col">
               <div class="row about-title-row">
                  <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                     <h3 class="about-title">Historique</h3>
                  </div>
                  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                     <hr class="under-title">
                  </div>
               </div>

               <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                     <p>
                        L'Ecole Nationale d'Economie Appliquée et de Management (ex- Institut National d'Economie) est
                        une entité de l'université d'Abomey -Calavi chargée de la formation professionnelle. Elle a été
                        créée en 1980, sous le nom d'Institut National d'Economie (INE),mais elle changera d'appellation
                        pour devenir Ecole Nationale d'Economie Appliquée et de Management (ENEAM) depuis 2002.
                        A sa création en 1980, l'ENEAM a été dirigée par un comité ad'hoc composé de trois membres :
                     </p>
                     <ul class="listed">
                        <li>
                           <i class="fas fa-chevron-right list-icon"></i>
                           <span>Dr. BANKOLE Antoine : Président</span>
                        </li>
                        <li>
                           <i class="fas fa-chevron-right list-icon"></i>
                           <span>Dr. AGBOGBA A. Paul : Chargé des affaires académiques</span>
                        </li>
                        <li style="text-align: justify;">
                           <i class="fas fa-chevron-right list-icon"></i>
                           <span class="">Professeur AMOUSSOUGA GERO Fulbert : Chargé des affaires financières et
                              administratives.</span>
                        </li>
                     </ul>
                     <p>
                        L'ENEAM a été sous la direction de plusieurs professeurs experts depuis sa création.
                     </p>
                     <!-- <button class="btn more" onclick="document.getElementById('more').style.display = 'block'; this.style.display = 'none';" style="text-decoration: underline;color:#777"><span>Afficher plus</span></button></span>                 -->
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>


   <section class="reviews" style="background:rgba(7, 68, 10, 0.801)">

      <h1 class="heading" style="color: #fff !important;"> VOCATIONS & MISSIONS</h1>
      <div class="container content2">
         <div class="row">
            <div class="col-12" >
               <p style="color: #fff !important;">
                  L'Ecole Nationale d'Economie Appliquée et de Management (ENEAM) est un établissement public de
                  formation
                  professionnelle dans les domaines de l'Economie Appliquée et du Management des Organisations.
               </p>
               <p style="color: #fff !important;">
                  L'Ecole a pour vocation d'être un Centre de Référence tant pour les établissements privés de
                  l'intérieur
                  que pour les établissements à vocation similaire de la région.
               </p>
               <p style="color: #fff !important;">
                  Concrètement la vocation première de l'Ecole est de mettre à la disposition du marché, les meilleurs
                  cadres
                  dont les entreprises, les administrations et les autres organisations nationales et internationales
                  ont
                  besoin pour participer effectivement et efficacement au
                  développement économique et social du Bénin et des autres pays de la sous-région et de l'Afrique.
               </p>
               <p style="color: #fff !important;">
                  La mission de l’ENEAM est de mettre sur le marché du travail des cadres compétents dont les
                  entreprises, les administrations et les autres organisations nationales et internationales
                  ont besoin pour participer efficacement au développement du Bénin, de la sous-région,
                  de l’Afrique et du reste du monde.
               </p>
            </div>
         </div>
      </div>
   </section>

   <div class="container content3">
      <div class="row about-row">
         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="row about-title-row ">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <h3 class="about-title">Notre Vision</h3>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <hr class="under-title">
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <p>
                     L’ENEAM est une grande école multi site, leader des formations d’élites en économie appliquée et en
                     management,
                     véritable pôle d’excellence dans la sous-région de l’Afrique et dans le reste du monde.
                  </p>
               </div>
            </div>
            <div class="row about-title-row">
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <h3 class="about-title">Nos Valeurs</h3>
               </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <hr class="under-title">
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <p>
                     Les valeurs partagées par l’ensemble des acteurs de l’ENEAM sont:
                     L’esprit d’équipe et d’engagement - L’excellence - Le partenariat - La reddition des comptes
                  </p>
               </div>
            </div>
         </div>


         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="row about-title-row">
               <img src="{{asset('CLIENT_ASSETS/images/AfficheENEAM.jpg')}}" class="" height="600px" alt="affiche eneam"
                  style="width:45rem;height:28rem;float: right;margin-left: auto;">
            </div>
         </div>
      </div>

   </div>
   <!-- footer section starts  -->

 @endsection