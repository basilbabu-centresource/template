<?php
/**
 * Template Name: Default template with caption
 * Developed By: Anju
 * Developed On: 26/04/2021
 *
 * @package Panlys
 */
get_header(); ?>

    <?php wp_reset_query(); ?>
	<section class="default-page-caption mt-40 mb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <h3 class="text-center"><?php the_field('tagline'); ?></h3>
                    <div class="default-page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();