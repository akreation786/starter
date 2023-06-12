<?php wp_footer(); ?>

<script>
 var d = new Date(new Date().getTime() + 800 * 120 * 120 * 2000);

 // default example
 simplyCountdown('.simply-countdown-one', {
  year: d.getFullYear(),
  month: d.getMonth() + 1,
  day: d.getDate()
 });

 //jQuery example
 $('#simply-countdown-losange').simplyCountdown({
  year: d.getFullYear(),
  month: d.getMonth() + 1,
  day: d.getDate(),
  enableUtc: false
 });
</script>
</body>


</html>