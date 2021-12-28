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
<!-- easy-responsive-tabs -->
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

<!-- credit-card -->
<script type="text/javascript" src="js/creditly.js"></script>
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

<script type="text/javascript">
  $(function () {
    var creditly = Creditly.initialize(
      '.creditly-wrapper .expiration-month-and-year',
      '.creditly-wrapper .credit-card-number',
      '.creditly-wrapper .security-code',
      '.creditly-wrapper .card-type');

    $(".creditly-card-form .submit").click(function (e) {
      e.preventDefault();
      var output = creditly.validate();
      if (output) {
        // Your validated credit card output
        console.log(output);
      }
    });
  });
</script>
<!-- //credit-card -->
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


<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>
<!-- js file -->
