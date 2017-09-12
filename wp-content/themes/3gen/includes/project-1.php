<article id="project-1" class="project project-1">
  <div class="project-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/roberta-drive-hero.jpg');">
    <div class="project-hero-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <span class="project-title-subtext">Our latest project</span>
            <h1 class="project-title">6770 Roberta Drive</h1>
            <span class="project-price">starting at <strong>$309,950</strong></span>
          </div>
        </div>
      </div>
    </div>
    <button class="project-hero-action btn btn-primary" type="button" data-toggle="modal" data-target="#modal-reserve-1">
      <strong>Reserve Now</strong>
    </button>
  </div>
  <div class="project-thumbs">
    <div class="container-fluid">

      <div class="thumbs-carousel">
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/1.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/1.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/2.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/2.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/3.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/3.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/4.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/4.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/10.png" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/10.png');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/11.png" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/11.png');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-1" href="<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/12.png" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/roberta-drive/12.png');"></a>
        </div>
      </div>

    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="project-description">
          <p>3 bedroom, 2 bath, 1,510 square foot, Ranch-Style Home. Open floor plan with vaulted ceilings in the main living space. Additional features include: 9 foot ceilings, large two car garage, covered front deck and private covered rear patio.</p>
          <p>Spacious kitchen designed to maximize functionality and gathering space. Generous appliance and cabinet budget, wood floors, pantry and island. Access to the covered rear patio from the dining area.</p>
          <p>Large master suite with walk-in-closet, archistone shower and dual vanity/sinks.</p>
          <p>Quiet cut-de-sac lot with both mountain and valley views, backing up to natural park. One of the largest lots in this phase at 17,613 square feet.</p>
          <p>Under construction now, with completion in early 2018. Generous builder allowances enable customization of colors and finishes.</p>
          <!-- <p class="project-location">6770 Roberta Drive, Missoula, Montana <a href="#" class="map-link" target="_blank"><i class="material-icons">location_on</i>View on map</a></p> -->
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="project-tagline">Main-level Living on Linda Vista's Newest Street.</h3>
      </div>
    </div>
  </div>
</article>

<!-- Reserve now Modal -->
<div class="modal fade" id="modal-reserve-1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">6770 Roberta Drive &mdash; Reserve Now</h4>
      </div>
      <div class="modal-body">
        <div class="form-wrapper">
          <?php gravity_form('Reserve (Roberta Drive)', false, false, false, '', true); ?>
        </div>
      </div>
    </div>
  </div>
</div>
