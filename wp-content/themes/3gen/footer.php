      <footer class="site-footer" role="contentinfo">
        <div class="footer-main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-3 col-lg-offset-2 col-md-offset-1">
                <div class="footer-contact">
                  <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="3Gen Builders">
                  <address class="footer-address">
                    1 Greenbriar Court<br>
                    Missoula, MT 59802
                  </address>
                  <a class="footer-phone" href="tel:4065438154">(406) 543-8154</a>
                  <a class="footer-email" href="mailto:paul@3genbuilders.com">paul@3genbuilders.com</a>
                  <div class="footer-houzz">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-houzz.svg" alt="Houzz"> Check us out on Houzz
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-5">
                <div class="footer-mailing-list">
                  <h4><i class="material-icons">rss_feed</i> Want to stay up-to-date on our projects?</h4>
                  <div class="form-wrapper">
                    <?php gravity_form('Mailing List Opt-in', false, false, false, '', true); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="footer-copyright">
                <p>&copy; 3Gen Builders, Inc. <?php echo date('Y'); ?>. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>

		<?php wp_footer(); ?>

	</body>
</html>
