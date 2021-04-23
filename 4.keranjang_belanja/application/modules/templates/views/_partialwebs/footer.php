<section class="mobile-apps pt-5 pb-3 border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Download apps</h3>
        <p>Get an amazing app to make Your life easy</p>
      </div>
      <div class="col-md-6 text-md-right">
        <a href="#"><img src="<?= base_url() ?>assets/web/img/appstore.png" height="40"></a>
        <a href="#"><img src="<?= base_url() ?>assets/web/img/appstore.png" height="40"></a>
      </div>
    </div> <!-- row/ -->
  </div><!-- container // -->
</section>
<footer class="footer bg-primary">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer about">
            <div class="logo-footer">
              <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">IndoMarket</span>
            </div>
            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
              eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
              facilisis luctus, metus.</p>
            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                  789</a></span></p>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-2 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer links">
            <h4>Information</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Faq</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-2 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer links">
            <h4>Services</h4>
            <ul>
              <li><a href="#">Payment Methods</a></li>
              <li><a href="#">Money-back</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Single Widget -->
          <div class="single-footer social">
            <h4>Get In Touch</h4>
            <!-- Single Widget -->
            <div class="contact">
              <ul>
                <li>NO. 342 - London Oxford Street.</li>
                <li>012 United Kingdom.</li>
                <li>info@indomarket.com</li>
                <li>+032 3456 7890</li>
              </ul>
            </div>
            <!-- End Single Widget -->
            <ul>
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter"></i></a></li>
              <li><a href="#"><i class="ti-flickr"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
          <!-- End Single Widget -->
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="copyright-inner border-top">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="left">
              <p>Copyright © 2021 <a href="http://indokoding.net" target="_blank">IndoKoding.net</a> -
                All Rights Reserved.</p>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="right pull-right">
              <ul class="payment-cards">
                <li><i class="fa fa-cc-paypal"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-stripe"></i></li>
                <li><i class="fa fa-cc-visa"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Core -->
<script src="<?= base_url('assets/web/') ?>js/core/jquery.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/web/') ?>js/core/jquery-ui.min.js"></script>

<!-- Optional plugins -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Argon JS -->
<script src="<?= base_url('assets/web/') ?>js/argon-design-system.js"></script>

<!-- Main JS-->
<script src="<?= base_url('assets/web/') ?>js/main.js"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="assets/sb-admin/js/sb-admin-2.min.js"></script> -->

<!-- Page level plugins -->
<!-- <script src="assets/sb-admin/vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="assets/sb-admin/js/demo/chart-area-demo.js"></script>
    <script src="assts/sb-admin/js/demo/chart-pie-demo.js"></script> -->
</body>
<script>
  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
</script>

</html>