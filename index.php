<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<!-- Section - Featured -->
            <div class="featured">
                <div class="featured-bg">
                    <div class="wrap-section clearfix">
                        <h2>I <span>design</span> and <span>code</span> Quality <br /> Environments For Online Mediums.</h2>
                        <p>
                            I provide help for the business, as well as the individual, to launch outstanding detailed web and mobile products. Detailed design and clean efficient code.
                        </p>
                        <a class="cover-button mt-10" href="work">View Work</a>
                    </div>
                </div>
            </div>


<!-- Section - A - Slider -->
            <section class="slider-sect">
                <div class="wrap-section">
                    <h2>Latest Work</h2>
                    <div class="section-slider clearfix">
                        <ul class="bxslider">

                            <?php query_posts( 'cat=7' ); ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



                            <li class="clearfix">
                                <div class="quarter right">
                                    <div class="thumb-slider">
                                        <a href="<?php echo get_permalink(); ?>" class="small-link"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></a>
                                    </div>
                                </div>
                                <div class="three-quarters left">
                                    <h3><?php the_title(); ?></h3>
                                    <h4><?php the_meta(); ?></h4>
                                        <?php the_excerpt(); ?>
                                    <p>
                                        <a href="<?php echo get_permalink(); ?>" class="small-link">Read More &#8594;</a>
                                    </p>

                                </div>

                                <?php endwhile; else: ?>
                                     <p>Sorry, no posts matched your criteria.</p>
                                 <?php endif; ?>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>


<!-- Section - B -->
            <section class="bg-green type-white">
                <div class="wrap-section clearfix">
                    <div class="quarter left">
                        <div class="icn-bubble">

                        </div>
                    </div>
                    <div class="three-quarters right">
                        <h2>Please feel free to get in touch</h2>
                        <p>
                            I am always interested in hearing from new people and/or to network with. If you have any questions or comments, or if you would like to contact me for a quote, please do not hesitate. I will get back to you as soon as possible.
                        </p>
                        <a class="dk-green-button mt-10" href="contact" >Contact</a>
                    </div>
                </div>
            </section>

<?php get_footer(); ?>


