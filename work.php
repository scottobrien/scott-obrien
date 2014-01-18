<?php
/*
Template Name: Work
*/

get_header(); ?>

	<!-- Section - Heading -->
        <section class="heading work">

            <div class="wrap-section clearfix">
                <h5 class="left">Work</h5>
                <span>
                    "Creating simple, modern detailed design and clean efficient code."
                </span>
                <ul class="select-menu right">
                    <li class="list-title">Sort:</li>
                    <li class="button-all select-active">All</li>
                    <li class="button-ui-design">UI/Design</li>
                    <li class="button-front-end">Front-End Coding</li>
                </ul>


            </div>
        </section>


    <!-- Section - A -->
        <section>
            <div class="wrap-section clearfix">

            <?php query_posts( 'cat=8, 9, 10' ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div <?php post_class('col-third'); ?>>
                        <div class="three-tiles">
                            <a class="button-work" href="<?php echo get_permalink(); ?>">View</a>
                            <div class="tile-hover"></div>
                            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></a>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <h4><?php the_meta(); ?></h4>

                </div>

                <?php endwhile; else: ?>
                         <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>

            </div>
        </section>


    <!-- Banner - B -->
        <section class="banner">
            <div class="wrap-section clearfix">
                <div class="row clearfix">
                    <h2>Please feel free to get in touch.</h2>
                    <a class="dk-green-button" href="contact" >Contact</a>
                </div>
            </div>
        </section>

<?php get_footer(); ?>