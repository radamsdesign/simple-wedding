<?php
/**
 * Template name: single page
 *
 * 
 *
 * @package simple wedding
 */

get_header(); ?>

	<section class="wedding-info-section">
	<div class="grid-construct">

		<?php if( get_field('section_title') ): ?>
			<h3 class="section-title"><?php the_field('section_title'); ?></h3>
		<?php endif; ?>

		<?php if( get_field('info_box') ): ?>
			<div class="wedding-info"><?php the_field('info_box'); ?></div>
		<?php endif; ?>

		<?php if( get_field('left_image') ): ?>
			<div class="left-col column">
			<div class="overlay"></div>
			<a href="#"><img src="<?php the_field('left_image'); ?>" /></a>
		<?php endif; ?>

		<?php if( get_field('left_image_title') ): ?>
			<h4 class="column-title"><?php the_field('left_image_title'); ?></h4>
		<?php endif; ?>

		<?php if( get_field('left_image_text') ): ?>
			<p class="column-text"><?php the_field('left_image_text'); ?></p>
			</div><!-- .left-col -->
		<?php endif; ?>

		<?php if( get_field('right_image') ): ?>
			<div class="right-col column">
			<div class="overlay"></div>
			<a href="#"><img src="<?php the_field('right_image'); ?>" /></a>
		<?php endif; ?>

		<?php if( get_field('right_image_title') ): ?>
			<h4 class="column-title"><?php the_field('right_image_title'); ?></h4>
		<?php endif; ?>

		<?php if( get_field('right_image_text') ): ?>
			<p class="column-text"><?php the_field('right_image_text'); ?></p>
			</div><!-- .right-col -->
		<?php endif; ?>

		</div><!-- .grid-construct -->
	</section><!-- .wedding-info-section -->

<?php get_footer(); ?>