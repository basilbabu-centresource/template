<?php
/**
 * Template Name: Infrastructure
 * Developed By: Anju
 * Developed On: 20/04/2021
 *
 * @package Panlys
 */
get_header(); ?>
    <section class="infrastructure mt-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <div class="mb-30">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="infra-img">
                        <img src="<?php bloginfo('template_url'); ?>/images/"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();