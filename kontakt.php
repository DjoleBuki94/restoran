<?php include('layout/header.php'); ?>

<!--=== page-title-section start ===-->
<section class="title-hero-bg parallax-effect" style="background-image: url(assets/images/drinska-prica/header/kontakt-header.jpg);">
    <div class="container">
        <div class="page-title text-center white-color">
            <h1>Galerija</h1>
            <h4 class="text-uppercase mt-30">Restoran Drinska Priča</h4>
        </div>
    </div>
</section>
<!--=== page-title-section end ===-->
  
  <!--=== Contact Form Start ===-->
  <section class="white-bg form-style-one p-t-5">
  	<div class="container">
    	<div class="row">
       		<div class="col-md-8 col-md-offset-2 section-heading pb-0">
          	<h4 class="text-uppercase text-center">Kontaktirajte nas</h4>
        	</div>
       </div>
       <div class="row mt-50">
        <div class="col-md-8 col-md-offset-2">
          <form name="contact-form" class="contact-me">
            <div class="messages"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="name">Ime i prezime</label>
                  <input type="text" 
                         name="name" 
                         class="form-control" 
                         id="name" 
                         required 
                         placeholder="Unesite Ime i prezime" 
                         data-error="Ime je obavezno polje!"
                  >
                  <div class="help-block with-errors mt-20"></div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="phone">Telefon</label>
                  <input type="text" 
                         name="phone" 
                         class="form-control" 
                         id="phone" 
                         required 
                         placeholder="Unesite broj telefona" 
                         data-error="Telefon je obavezno polje!"
                  >
                  <div class="help-block with-errors mt-20"></div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="email">Email</label>
                  <input type="email" 
                         name="email" 
                         class="form-control" 
                         id="email" 
                         placeholder="Unesite Email" 
                         required 
                         data-error="Email je obavezno polje!"
                  >
                  <div class="help-block with-errors mt-20"></div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="subject">Tema</label>
                  <input type="text" 
                         name="subject" 
                         class="form-control" 
                         id="subject" 
                         placeholder="Unesite temu" 
                         required 
                         data-error="Tema je obavezno polje"
                  >
                  <div class="help-block with-errors mt-20"></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Poruka</label>
              <textarea name="message" 
                        class="form-control" 
                        id="message" 
                        rows="7" 
                        placeholder="Vaša poruka..." 
                        required 
                        data-error="Poruka je obavezno polje!">
              </textarea>
              <div class="help-block with-errors mt-20"></div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-dark btn-md btn-circle btn-animate remove-margin"><span>Pošalji <i class="ion-android-arrow-forward"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--=== Contact Form End ===--> 
  <!--=== Contact Us Start ===-->
  <section class="p-0 white-bg">
    <div class="container-fluid">
      <div class="row row-flex">
        <div class="col-md-4">
          <div class="col-inner spacer light-br-r">
            <div class="text-center"> <i class="icon-map-pin font-50px indigo-icon"></i>
              <h3>Adresa</h3>
              <p>44 Shirley Ave. <br>West Chicago, IL 60185</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer light-br-r">
            <div class="text-center"> <i class="icon-envelope font-50px indigo-icon"></i>
              <h3>Email</h3>
              <p class="mb-0">contact@grandy.com</p>
              <p>careers@grandy.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-inner spacer">
            <div class="text-center"> <i class="icon-dial font-50px indigo-icon"></i>
              <h3>Telefon</h3>
              <p class="mb-0">(+1) 623 432-0170</p>
              <p>(+1) 623 432-0275</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Contact Us End ===-->
  
  <!--=== Google Maps Start ======-->
<section class="map-section dark-bg pb-0 pt-0">
    <div id="map-style-2" class="wide"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.078268474494!2d19.42445961533575!3d43.95774624070224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759b366b662e343%3A0xe7719cc61fb8de93!2sDrinska%20Pri%C4%8Da!5e0!3m2!1ssr!2srs!4v1640298682201!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</section>
<!--=== Google Maps End ======-->
  
  


<?php include('layout/footer.php'); ?>