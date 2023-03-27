@extends('client.layout')
@section('contact')
<section class="heading-link">
   <h3>Contactez-nous via</h3>
   <!-- <p> <a href="home.html">home</a> / contact </p> -->
</section>

<section class="contact">
   <!-- <div class="space">


   </div> -->

   <div class="icons-container">


      <div class="icons">
         <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="butt" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
         <h3>Téléphone :</h3>
         <p>N'hesitez pas a nous appeler directement pour poser toutes vos préoccupations.</p>
         <h2>+229 21-30-41-68</h2>
         <p></p>
      </div>

      <div class="icons">
         <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="butt" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
         <h3> Email </h3>
         <p>Laissez nous vos préoccupations par mail. Nous vous répondrons avec plaisir.</p>
         <h2>eneam.uac@eneam.uac.bj</h2>
         <p></p>
      </div>

      <div class="icons">
         <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="butt" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
         <h3>address :</h3>
         <h2>03BP 1079 - Gbégamey Cotonou Bénin</h2>
         <a class="link_maps" href="https://goo.gl/maps/56MxCsNDfD36jZog9" target="_blank" rel="noopener noreferrer">Voir sur Google Map</a>
      </div>

   </div>
   <div class="row">

      <div class="image">
         <img src="images/contact-img.png" alt="">
      </div>

      <form action="">
         <!-- <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box">
         <input type="email" placeholder="email" class="box">
         <input type="number" placeholder="phone" class="box">
         <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn"> -->
         <section class="faq">
            <h1 class="heading">Questions Fréquements Posées</h1>
         
            <div class="accordion-container">
         
               <div class="accordion active">
                  <div class="accordion-heading">
                     <h3>how to contact for help?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
               <div class="accordion">
                  <div class="accordion-heading">
                     <h3>what is the best career in 2022?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
               <div class="accordion">
                  <div class="accordion-heading">
                     <h3>how much fees for web development?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
               <div class="accordion">
                  <div class="accordion-heading">
                     <h3>can I choose my own tutor?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
               <div class="accordion">
                  <div class="accordion-heading">
                     <h3>what payment methods are availabe?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
               <div class="accordion">
                  <div class="accordion-heading">
                     <h3>can I have free trial for a month?</h3>
                     <i class="fas fa-angle-down"></i>
                  </div>
                  <p class="accordion-content">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
                  </p>
               </div>
         
            </div>
         </section>
      </form>

   </div>
   
   <div class="maps">
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.229754334677!2d2.4063428142837853!3d6.364304695394615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355b22d4a54eb%3A0x78acee32e604e2d3!2sEcole%20Nationale%20d&#39;Economie%20Appliqu%C3%A9e%20et%20de%20Management%20(ENEAM)!5e0!3m2!1sfr!2sbj!4v1672152370798!5m2!1sfr!2sbj" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

   </div>

 

</section>

<!-- footer section starts  -->

@endsection