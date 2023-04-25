<?php get_header();?>

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
			  <h4 class="animate__animated animate__fadeInDown">DEVIL'S</span></h4>
              <h2 class="animate__animated animate__fadeInDown">STAIRCASE</span></h2><hr>
              <p class="animate__animated animate__fadeInUp">atem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h4 class="animate__animated animate__fadeInDown">DEVIL'S</span></h4>
              <h2 class="animate__animated animate__fadeInDown">STAIRCASE</span></h2><hr>
              <p class="animate__animated animate__fadeInUp">atem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>



  <?php get_footer();?>