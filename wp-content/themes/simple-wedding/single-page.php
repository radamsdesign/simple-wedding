<?php
/**
 * Template name: single page
 *
 * 
 *
 * @package simple wedding
 */

get_header(); ?>

	<section class="our-story" id="our-story">
		<div class="slider">
			<div class="carousel slide" data-ride="carousel" id="bs-carousel">
  
				<ol class="carousel-indicators">
				 <?php 
				$i=0;
				while( have_rows('slider') ): the_row();
				if ($i == 0) {
				echo '<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>';
				} else {
				echo '<li data-target="#bs-carousel" data-slide-to="'.$i.'"></li>';
				}
				$i++;
				endwhile; ?>
				</ol>
				 
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				 <?php 
				 $z = 0;
				 while( have_rows('slider') ): the_row(); ?>

				    <div class="item <?php if ($z==0) { echo 'active';} ?>">
				  
				    <div class="slider-img" style="background: url(<?php the_sub_field('image'); ?>); background-size: cover;" ></div>
				      
				        <div class="grid-construct">    
				            <h2><?php the_sub_field('caption');?></h2>   
				        </div><!-- .grid-construct -->     

				      </div><!-- .item -->
				<?php 
				$z++;
				endwhile; ?>  
				</div><!-- .carousel-inner -->
				 <!-- Controls -->
				  <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">&lsaquo;</span>
				  </a>
				  <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">&rsaquo;</span>
				  </a>  
			</div><!-- #bs-carousel -->
		</div><!-- .slider -->
	</section><!-- .our-story -->

	<section class="wedding-info-section" id="wedding">
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

	<section class="rsvp" id="rsvp">
		<div class="grid-construct">
		<h3 class="section-title">RSVP</h3>
		<?php echo do_shortcode('[rsvp]'); ?>

		</div><!-- .grid-construct -->

	</section><!-- .rsvp -->

	<section class="out-of-towners" id="out-of-towners">
		<div class="grid-construct">

		<?php if( get_field('section_title_lower') ): ?>
		<h3 class="section-title"><?php the_field('section_title_lower'); ?></h3>
		<?php endif; ?>
		<p>Traveling from afar? </p>
		<p>We will be staying at the Fairmont Hotel in Downtown San Jose, next to where the shuttle will be leaving us.
The wedding is on the Saturday of Labor Day Weekend, we suggest booking accommodations in advance, especially if you wish you stay in the Santa Cruz area. Please account for traffic along highway 17. Here are a variety of suggestions:</p>

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
      <h3>Santa Cruz Area</h3>
      <div class="left-half">
      <h4>Where to stay</h4>
        <?php

			// check if the repeater field has rows of data
			if( have_rows('sub_section_1_content') ):

			 	// loop through the rows of data
			    while ( have_rows('sub_section_1_content') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="places">
			        <div class="place-thumb">
			        <img src="<?php the_sub_field('sub_section_1_thumbnail'); ?>" />
			        </div><!-- .thumb -->
			        <div class="place-title">
			        <a href="<?php the_sub_field('sub_section_1_content_link'); ?>" target="_blank"><?php the_sub_field('sub_section_1_content_link_title'); ?></a>
			        </div><!-- .place-title -->
			        </div><!-- .places -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
			</div><!-- .left-half -->
		<div class="right-half">	

		<h4>On a budget</h4>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('sub_section_2_content') ):

			 	// loop through the rows of data
			    while ( have_rows('sub_section_2_content') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="places">
			        <div class="place-thumb">
			        <img src="<?php the_sub_field('sub_section_2_thumbnail'); ?>" />
			        </div><!-- .thumb -->
			        <div class="place-title">
			        <a href="<?php the_sub_field('sub_section_2_link'); ?>" target="_blank"><?php the_sub_field('sub_section_2_link_title'); ?></a>
			        </div><!-- .place-title -->
			        </div><!-- .places -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div><!-- .right-half -->
			<h3>San Jose Area</h3>
			<div class="left-half">
				<h4>Where to Stay</h4>
				<?php

					// check if the repeater field has rows of data
					if( have_rows('sub_section_3_content') ):

					 	// loop through the rows of data
					    while ( have_rows('sub_section_3_content') ) : the_row(); 

					        // display a sub field value ?>
					        <div class="places">
					        <div class="place-thumb">
					        <img src="<?php the_sub_field('sub_section_3_thumbnail'); ?>" />
					        </div><!-- .thumb -->
					        <div class="place-title">
					        <a href="<?php the_sub_field('sub_section_3_link'); ?>" target="_blank"><?php the_sub_field('sub_section_3_link_title'); ?></a>
					        </div><!-- .place-title -->
					        </div><!-- .places -->

					   <?php endwhile;

					else :

					    // no rows found

					endif;

			?>
			</div><!-- .left-half -->

			<div class="right-half">
				<h4>On a budget</h4>

				<?php

					// check if the repeater field has rows of data
					if( have_rows('sub_section_4_content') ):

					 	// loop through the rows of data
					    while ( have_rows('sub_section_4_content') ) : the_row(); 

					        // display a sub field value ?>
					        <div class="places">
					        <div class="place-thumb">
					        <img src="<?php the_sub_field('sub_section_4_thumbnail'); ?>" />
					        </div><!-- .thumb -->
					        <div class="place-title">
					        <a href="<?php the_sub_field('sub_section_4_link'); ?>" target="_blank"><?php the_sub_field('sub_section_4_link_title'); ?></a>
					        </div><!-- .place-title -->
					        </div><!-- .places -->

					   <?php endwhile;

					else :

					    // no rows found

					endif;

			?>
			</div><!-- .right-half -->

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

 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
          	<?php if( get_field('sub_section_title_1') ): ?>
				<?php the_field('sub_section_title_1'); ?>
			<?php endif; ?>
        </a>
      </h4>
    </div><!-- .panel-heading -->

    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <h3>Santa Cruz Area</h3>
      <div class="left-half">
      <h4>Where to stay</h4>
        <?php

			// check if the repeater field has rows of data
			if( have_rows('sub_section_1_content') ):

			 	// loop through the rows of data
			    while ( have_rows('sub_section_1_content') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="places">
			        <div class="place-thumb">
			        <img src="<?php the_sub_field('sub_section_1_thumbnail'); ?>" />
			        </div><!-- .thumb -->
			        <div class="place-title">
			        <a href="<?php the_sub_field('sub_section_1_content_link'); ?>" target="_blank"><?php the_sub_field('sub_section_1_content_link_title'); ?></a>
			        </div><!-- .place-title -->
			        </div><!-- .places -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
			</div><!-- .left-half -->
		<div class="right-half">	

		<h4>On a budget</h4>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('sub_section_2_content') ):

			 	// loop through the rows of data
			    while ( have_rows('sub_section_2_content') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="places">
			        <div class="place-thumb">
			        <img src="<?php the_sub_field('sub_section_2_thumbnail'); ?>" />
			        </div><!-- .thumb -->
			        <div class="place-title">
			        <a href="<?php the_sub_field('sub_section_2_link'); ?>" target="_blank"><?php the_sub_field('sub_section_2_link_title'); ?></a>
			        </div><!-- .place-title -->
			        </div><!-- .places -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div><!-- .right-half -->
			<h3>San Jose Area</h3>
			<div class="left-half">
				<h4>Where to Stay</h4>
				<?php

			// check if the repeater field has rows of data
			if( have_rows('sub_section_3_content') ):

			 	// loop through the rows of data
			    while ( have_rows('sub_section_3_content') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="places">
			        <div class="place-thumb">
			        <img src="<?php the_sub_field('sub_section_3_thumbnail'); ?>" />
			        </div><!-- .thumb -->
			        <div class="place-title">
			        <a href="<?php the_sub_field('sub_section_3_link'); ?>" target="_blank"><?php the_sub_field('sub_section_3_link_title'); ?></a>
			        </div><!-- .place-title -->
			        </div><!-- .places -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
			</div><!-- .left-half -->

			<div class="right-half">
				<h4>On a budget</h4>
			</div><!-- .right-half -->

      </div><!-- .panel-body -->
    </div><!-- .panel-collapse -->
  </div><!-- .panel -->

</div><!-- .panel-group -->

	</div><!-- .grid-construct -->

	</section><!-- .rsvp -->
<section class="registry" id="registry">

	<div class="grid-construct">
		<?php if( get_field('section_6_title') ): ?>
		<h3 class="section-title"><?php the_field('section_6_title'); ?></h3>
		<?php endif; ?>

		<?php

			// check if the repeater field has rows of data
			if( have_rows('registry') ):

			 	// loop through the rows of data
			    while ( have_rows('registry') ) : the_row(); 

			        // display a sub field value ?>
			        <div class="registry-logo">
			        <a href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php the_sub_field('image'); ?>" /></a>
			        </div><!-- .registry-logo -->

			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>

	</div><!-- .grid-construct -->

</section>

<?php get_footer(); ?>