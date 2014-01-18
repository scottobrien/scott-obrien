<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

  <!-- Section - Heading -->
            <section class="heading">
                <div class="wrap-section clearfix">
                    <div class="left">
                        <h5><?php the_title(); ?></h5>
                        <span>
                            <?php the_meta(); ?>
                        </span>
                    </div>
                    <ul class="single-nav right clearfix">
                        <li class="single-tiles" ><a href="work"></a></li>
                        <li class="single-prev" ><?php previous_post_link('%link', False); ?></li>
                        <li class="single-next" ><?php next_post_link('%link', False); ?></li>
                    </ul>
                </div>
            </section>


    <!-- Section - A -->
        <section class="single">
            <div class="wrap-section">
                <div class="row clearfix">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php endwhile; else: ?>
                             <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>

                </div>
                

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
