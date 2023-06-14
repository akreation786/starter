<?php wp_footer(); ?>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>

<!-- Stellar -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.stellar.min.js"></script>

<!-- Count Down -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>
 var d = new Date(new Date().getTime() + 800 * 120 * 120 * 2000);

 // default example

 simplyCountdown('.simply-countdown', {
  year: "2023",
  month: "06",
  day: "30"
 });
</script>
</body>


</html>