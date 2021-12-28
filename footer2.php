<!--jQuery-->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- newsletter modal -->
<!--search jQuery-->
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
  googles.render();

  googles.cart.on('googles_checkout', function (evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
      items = this.items();

      for (i = 0, len = items.length; i < len; i++) {}
    }
  });
</script>
<!-- //cart-js -->
<script>
  $(document).ready(function () {
    $(".button-log a").click(function () {
      $(".overlay-login").fadeToggle(200);
      $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
  });
  $('.overlay-close1').on('click', function () {
    $(".overlay-login").fadeToggle(200);
    $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
  });
</script>
<!-- carousel -->
<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
  //<![CDATA[
  $(window).load(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 9000,
      values: [50, 6000],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

  }); //]]>
</script>
<!-- //price range (top products) -->

<script src="js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: false
        },
        900: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    })
  })
</script>

<!-- //end-smooth-scrolling -->

<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
  $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      closed: 'accordion', // Start closed if in accordion view
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
    $('#verticalTab').easyResponsiveTabs({
      type: 'vertical',
      width: 'auto',
      fit: true
    });
  });
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
<script>
  // Can also be used with $(document).ready()
  $(window).load(function () {
    $('.flexslider1').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });
</script>
<!-- //FlexSlider-->

<!-- dropdown nav -->
<script>
  $(document).ready(function () {
    $(".dropdown").hover(
      function () {
        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
        $(this).toggleClass('open');
      },
      function () {
        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
        $(this).toggleClass('open');
      }
    );
  });
</script>
<!-- //dropdown nav -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear'
                     };
                    */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->


<script src="js/bootstrap.js"></script>
<!-- js file -->
