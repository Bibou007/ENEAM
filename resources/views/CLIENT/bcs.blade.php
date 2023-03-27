@extends('client.layout')
@section('bcs')
<!-- BCS PAGE BEGIN -->
<section class="about">

    <div class="image">
       <img src="{{asset('CLIENT_ASSETS/images/bcs.png')}}" alt="">
    </div>
 
    <div class="content">
       <h3 class="about-title">A Propos du BCS</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.</p>
       
    </div>
 
 </section>


 <!-- LES MEMBRES ACTUELLE DU BUREAU -->
 <section id="directeurs" class="">
    <div class="container">
      <div class="row">
        <div class="col-12 title_department text-center">
          <h1 style="font-size: 30px;" class="intro">LES MEMBRES ACTUELLE DU BUREAU</h1>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-theme" id="actu-slide">
      
        <div class="card mb-4">
            <div class="image">
                <img src="{{asset('CLIENT_ASSETS/images/estelly.jpeg')}}" height="450" alt="">
                
             </div>
             <div class="content">
                <h3>ADANON Estelly</h3>
                <span>Présidente</span>
             </div>
    
      </div>
        <div class="card mb-4">
            <div class="image">
                <img src="{{asset('CLIENT_ASSETS/images/estelly.jpeg')}}" height="450" alt="">
                
             </div>
             <div class="content">
                <h3>ADANON Estelly</h3>
                <span>Présidente</span>
             </div>
    
      </div>
        <div class="card mb-4">
            <div class="image">
                <img src="{{asset('CLIENT_ASSETS/images/estelly.jpeg')}}" height="450" alt="">
                
             </div>
             <div class="content">
                <h3>ADANON Estelly</h3>
                <span>Présidente</span>
             </div>
    
      </div>
     
       
     
    </div>
  </section>
  @endsection