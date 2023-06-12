<?php
function starter_setup_theme()
{
 load_theme_textdomain("starter");
 add_theme_support("post-thumbnails");
 add_theme_support("title-tag");
}
add_action("after_setup_theme", "starter_setup_theme");

function starter_assets()
{
 wp_enqueue_style("starter", get_stylesheet_uri());
 wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
 wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"));
 wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.css"));
 wp_enqueue_style("style-css", get_theme_file_uri("/assets/css/style.css"));

 wp_enqueue_script("easing-jquery-js", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jqeury"), null, true);
 wp_enqueue_script("bootstrap-jquery-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jqeury"), null, true);
 wp_enqueue_script("waypoints-js", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jqeury"), null, true);
 wp_enqueue_script("jquery.stellar-js", get_theme_file_uri("/assets/js/jquery.stellar.min.js"), array("jqeury"), null, true);
 wp_enqueue_script("simplyCountdown-js", get_theme_file_uri("/assets/js/simplyCountdown.js"), array("jqeury"), null, true);
 wp_enqueue_script("simplyCountdown-js", get_theme_file_uri("/assets/js/main.js"), array("jqeury"), null, true);
}
add_action("wp_enqueue_scripts", "starter_assets");



function starter_styles()
{
 if (is_page()) {
  $thumbnail_url = get_the_post_thumbnail_url(null, "large");
?>
  <style>
   .hero_bg {
    background-image: url("<?php echo $thumbnail_url; ?>");
   }
  </style>
<?php
 }
}
add_action("wp_head", "starter_styles");



function starter_sidebars()
{
 register_sidebar(
  array(
   'id'            => 'footer_sidebar',
   'name'          => __('Footer Sidebar', 'starter'),
   'description'   => __('Footer Social Sidebar', 'starter'),
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget'  => '</div>',
   'before_title'  => '<h2 class="widget-title">',
   'after_title'   => '</h2>',
  )
 );
}
add_action("widgets_init", "starter_sidebars");
