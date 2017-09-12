<article id="project-2" class="project project-2">
  <div class="project-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/6.jpg');">
    <div class="project-hero-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="project-title">Maroon Court / Lot 10 <br>Florence, Montana</h1>
            <span class="project-price">starting at <strong>$274,950</strong></span>
          </div>
        </div>
      </div>
    </div>
    <button class="project-hero-action btn btn-primary" type="button" data-toggle="modal" data-target="#modal-reserve-2">
      <strong>Reserve Now</strong>
    </button>
    <span class="images-disclaimer">Images and finishes may vary from available unit(s).</span>
  </div>
  <div class="project-thumbs">
    <div class="container-fluid">

      <div class="thumbs-carousel">
        <div class="carousel-thumb">
          <a rel="gallery-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/5.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/5.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/6.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/6.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/7.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/7.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/8.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/8.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/9.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/9.jpg');"></a>
        </div>
      </div>

    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <h3 class="project-tagline">Main-level Living in one of Florence's premier family neighborhoods.</h3>
        <div class="project-description">
          <p>3 bedroom, 2 bath, 1,454 square foot, Ranch-Style Home. Open floor plan with vaulted ceilings in the main living space. Additional features include: zero-step entry, 9 foot ceilings, two car garage, covered front deck and private rear deck.</p>
          <p>Spacious kitchen designed to maximize functionality and gathering space. Generous appliance and cabinet budget, wood floors, pantry and island. Access to the rear deck from the dining area.</p>
          <p>Large master suite with walk-in-closet, archistone shower and dual vanity/sinks.</p>
          <p>Quiet cul-de-sac .52 acre lot with mountain views, adjacent to a neighborhood natural common area.</p>
          <p>Construction scheduled to begin in late 2017, with completion in 2018. Generous builder allowances enable customization of colors and finishes.</p>
          <p class="project-location">Maroon Court, Florence, Montana <a href="https://goo.gl/maps/TzcEbwmRYf42" class="map-link" target="_blank"><i class="material-icons">location_on</i>View on map</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="project-agent">
          <h3>Contact Agent</h3>
          <div class="agent-info">
            <img class="agent-photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tara-zeiler.jpg">
            <div class="agent-content">
              <h4 class="agent-name">Tara Zeiler</h4>
              <span class="agent-company">Monterra Real Estate</span>
            </div>
          </div>
          <div class="form-wrapper">
            <?php gravity_form('Contact Agent', false, false, false, '', true); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>


<!-- Reserve now Modal -->
<div class="modal fade" id="modal-reserve-2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Maroon Court / Lot 10 &mdash; Reserve Now</h4>
      </div>
      <div class="modal-body">
        <div class="form-wrapper">
          <?php gravity_form('Reserve (Maroon Court)', false, false, false, '', true); ?>
        </div>
      </div>
    </div>
  </div>
</div>
