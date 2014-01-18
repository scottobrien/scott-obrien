<?php
/*
Template Name: Contact
*/

get_header(); ?>

<!-- Section - Heading -->
    <div class="contact-heading">
        
          <!--  <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=costa+mesa+ca&amp;oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;hq=&amp;hnear=Costa+Mesa,+Orange+County,+California&amp;ll=33.641132,-117.918669&amp;spn=0.019597,0.01663&amp;t=m&amp;z=14&amp;output=embed"></iframe> -->

          <div id="map-canvas"></div>

    </div>


<!-- Section - A -->
    <section class="contact">
        <div class="wrap-section clearfix">
            
            <div class="three-quarters left">
                <h2>Contact</h2>
                <p>
                  I am always interested in hearing from new people and/or to network with. If you have any questions or comments, or if you would like to contact me for a quote, please do not hesitate. I will get back to you as soon as possible. 
                </p>
                

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>

            </div>

            <div class="quarter right">
                <h6>Contact Information</h6>
                <ul>
                    <li>scott.thomas.obrien (at) gmail.com</li>
                    <li>Costa Mesa, California</li>
                </ul>    
            </div>
            
        </div>
    </section>

<?php get_footer(); ?>

<script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtUe1lZOgHWn5NAZR7P5ipHil12lliz5g&sensor=false">
</script>

<script type="text/javascript">
        function initialize() {
          var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(33.641132,-117.918669),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'),
                                        mapOptions);

          var image = '<?php bloginfo('stylesheet_directory'); ?>/resources/img/marker.svg';
          var myLatLng = new google.maps.LatLng(33.6417,-117.918669);
          var beachMarker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              icon: image
          });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

</script>