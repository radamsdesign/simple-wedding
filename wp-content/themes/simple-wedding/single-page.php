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

	<section class="rsvp">
		<div class="grid-construct">
		<h3 class="section-title">RSVP</h3>
		<?php echo do_shortcode('[rsvp]'); ?>

		</div><!-- .grid-construct -->

	</section><!-- .rsvp -->

	<section class="out-of-towners">
		<div class="grid-construct">

		<?php if( get_field('section_title_lower') ): ?>
		<h3 class="section-title"><?php the_field('section_title_lower'); ?></h3>
		<?php endif; ?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          	<?php if( get_field('sub_section_title_1') ): ?>
				<?php the_field('sub_section_title_1'); ?>
			<?php endif; ?>
        </a>
      </h4>
    </div><!-- .panel-heading -->
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div><!-- .panel-body -->
    </div><!-- .panel-collapse -->
  </div><!-- .panel -->
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       		<?php if( get_field('sub_section_title_2') ): ?>
				<?php the_field('sub_section_title_2'); ?>
			<?php endif; ?>
        </a>
      </h4>
    </div><!-- .panel-heading -->
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div><!-- .panel-body -->
    </div><!-- .panel-collaspe -->
 </div><!-- .panel -->

</div><!-- .panel-group -->

	</div><!-- .grid-construct -->

	</section><!-- .rsvp -->

<?php get_footer(); ?>