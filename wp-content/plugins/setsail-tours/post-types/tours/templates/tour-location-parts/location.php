<?php
$location_excerpt              = get_post_meta(get_the_ID(), 'tour_location_excerpt', true);
$location_content              = get_post_meta(get_the_ID(), 'tour_location_content', true);
$custom_snazzy_code =
$custom_snazzy_code = '[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#5d7e9e"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#fefefe"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"weight":"0.92"},{"saturation":"-23"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#c9e2f8"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"simplified"},{"color":"#f37949"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#f4f4f4"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#787878"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#eaf6f8"}]}]';
?>

<div class="qodef-location-part">

    <div class="qodef-location-content">
        <?php echo do_shortcode($location_content); ?>
    </div>

</div>