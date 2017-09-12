<article id="project-3" class="project project-3">
  <div class="project-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/cottages-lindavista/cottages-lindavista-hero.jpg');">
    <div class="project-hero-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <span class="project-title-subtext">Coming in 2018</span>
            <h1 class="project-title">The Cottages at <br>Linda Vista</h1>
            <span class="project-price">starting at <strong>$249,950</strong></span>
          </div>
        </div>
      </div>
    </div>
    <button class="project-hero-action btn btn-primary" type="button" data-toggle="modal" data-target="#modal-reserve-3">
      <strong>Reserve Now</strong>
      <span>6 remaining</span>
    </button>
    <span class="images-disclaimer">Images and finishes may vary from available unit(s).</span>
  </div>
  <div class="project-thumbs">
    <div class="container-fluid">

      <div class="thumbs-carousel">
        <div class="carousel-thumb">
          <a rel="gallery-3" href="<?php echo get_template_directory_uri(); ?>/assets/img/cottages-lindavista/1.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/cottages-lindavista/1.jpg');"></a>
        </div>
        <div class="carousel-thumb">
          <a rel="gallery-3" href="<?php echo get_template_directory_uri(); ?>/assets/img/cottages-lindavista/2.jpg" class="swipebox" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/cottages-lindavista/2.jpg');"></a>
        </div>
      </div>

    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="project-description">
          <p>2 bedroom, 2 1/2 bath, 1,284 square foot homes. Each home is situated on a zero-lot line lot on Shaver Drive in Linda Vista's upcoming phase. Each home includes a single car, attached garage.</p>
          <p>Large kitchen with generous appliance budget. Kitchen adjoins the dining and living rooms in a well-designed, open floorplan.</p>
          <p>2 generously sized bedrooms upstairs, each with it's own attached bathroom. Master bathroom includes shower and dual sinks.</p>
          <p>Customize your interior colors and finishes. Optional add-ons include: Gas fireplace, covered back patio and zero-step entry.</p>
          <p>First units available in 2018. 8 homes available in this phase, with 2 currently reserved. Sign up here to stay up-to-date on the progress of these units.</p>
          <!-- <p class="project-location">Shaver Drive, Missoula, Montana <a href="#" class="map-link" target="_blank"><i class="material-icons">location_on</i>View on map</a></p> -->
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="project-tagline">Affordable family living in Missoula's desirable Linda Vista neighborhood.</h3>
      </div>
    </div>
  </div>
</article>

<!-- Reserve now Modal -->
<div class="modal fade" id="modal-reserve-3" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">The Cottages at Linda Vista &mdash; Reserve Now</h4>
      </div>
      <div class="modal-body">
        <div class="form-wrapper">
          <?php gravity_form('Reserve (Cottages)', false, false, false, '', true); ?>
        </div>
      </div>
    </div>
  </div>
</div>
