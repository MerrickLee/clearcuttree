<?php
/*
Template Name: 10x
*/
get_header(); ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
<style type="text/css">
	.subheader,p,.btn {
		font-family: 'Open Sans', sans-serif;
	}
	.subheader {
	  	font-size: 18px;
	  	font-weight: bold;
	  	font-style: normal;
	  	font-stretch: normal;
		line-height: 1.36;
	  	letter-spacing: normal;
	  	color: #a2a885;
		text-transform: uppercase;
		padding-bottom: 1em;
	}
	p {
		font-style: italic;
		font-size: 18px;
		line-height: 1.89;
	}
	p.small {
		font-size: 10px;
		font-weight: bold;
		font-style: normal;
		font-stretch: normal;
		line-height: 2.4;
		letter-spacing: normal;
		color: #a2a885;
		text-transform: uppercase;
	}
	h1, h2, h3, h4 {
	  	font-family:Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif" !important;
		color: #202721 !important;
		font-style: normal;
	  	font-stretch: normal;
		font-weight: normal;
  		letter-spacing: normal;
		margin-bottom: 20px;
	}
	h1 {
  		font-size: 72px;
  		line-height: 0.69;
		text-align: center;
	}
	h2 {
		font-size: 44px;
	  	line-height: 1.14;
	}
	h3 {
		line-height: 1.35em;
	}
	.btn {
		background: #cddc39;
		text-transform: uppercase;
		padding: 8px 24px;
		color: #FFF;
		margin:30px 0;
		display: inline-block;
		border-radius: 5px;
	}
	.center,
	.how p,
	.how h2,
	.what p,
	ul.socials {
		text-align: center;
	}
	.panel {
		padding: 80px 0;
	}
	.servicesWrap {
		background-image: linear-gradient(to bottom, #f9fbe8, #eaecda 46%, #e8f5e9);
		padding-top: 0;
	}
	.bgImg {
		background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/intro-bg.png"); 
		background-repeat: no-repeat;
		background-size: cover;
		background-position: top center;
		padding-bottom: 459px;
		padding-top: 80px;
	}
	.servicesWrap .intro {
		max-width: 600px;
	}
	.intro {
		max-width: 800px;
		margin: 0 auto;
	}
	ul.socials li {
		display: inline;
	}
	ul.socials .et-social-icon a {
		color:#77843B;
		margin: 0 15px 15px;
    	font-size: 16px;
	}
	.panel.contact {
		background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/contact_bg.jpg");
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		padding: 50px 0;
	}
	.contactWrap {
		padding-left: 60px;
		float: left; width: 70%;
		box-sizing: border-box;
	}
	.contact ul.contactInfo li {
		display: inline-block;
    	margin: 20px 24px 0 0;
		font-style: italic;
	}
	.contact ul.contactInfo li:last-child {
		margin-right:0;
	}
	.faqs h2 {
		margin-bottom: 50px;
	}
	.faqs p {
		padding-left: 60px;
		font-style: italic;
		margin-bottom: 1em;
	}
	.faqs p.large {
		font-size: 18px;
		font-weight: bold;
		font-style: normal;
		font-stretch: normal;
		line-height: 1.67;
		letter-spacing: normal;
		color: #2b322c;
		padding-bottom: 5px;
		position: relative;
		margin-bottom: .25em;
	}
	.faqs p.large:before {
		content:url("<?php echo get_stylesheet_directory_uri(); ?>/images/foliage.png");
		display: inline-block;
		position: absolute;
		top: -10px;
		left: -10px;
	}
	.services {
		padding-top: 50px;
	}
	.thirtythree {
		float: left;
		width: 33%;
		padding: 20px;
		box-sizing: border-box;
	}
	.services .thirtythree:nth-child(3n+1) {
		clear: left;
	}
	.thirtythree p {
		font-style: normal;
		text-align: left;
		font-size: 14px;
    	line-height: 1.75em;
	}
	.thirtythree img {
		border-radius: 50%;
		padding: 20px;
	}
	.imgWrap {
		float: left; width: 30%;
	}
	.phone:before,
	.email:before {
		font-family: 'FontAwesome';
		content: '\f095';
		padding-right: 5px;
		font-style: normal;
	}
	.email:before {
		content: '\f0e0';
	}

@media only screen and (max-width:959px) {
	.thirtythree {
		width: 50%;
	}
	.services .thirtythree:nth-child(3n+1) {
		clear: none;
	}
	.services .thirtythree:nth-child(2n+1) {
		clear: left;
	}
}
	
@media only screen and (max-width:767px) {
	.intro {
		padding-left: 20px;
		padding-right: 20px;
	}
}
@media only screen and (max-width:659px) {
	.container {
		width: 92%;
	}
	h1, h2 {
		font-size: 48px;
		line-height: 1;
	}
	h2 {
		font-size: 36px;
	}
	h3 {
		line-height: 1.5em;
	}
	.services .thirtythree:nth-child(2n+1) {
		clear: none;
	}	
	.thirtythree,
	.imgWrap,
	.contactWrap {
		width: 100%;
		float: none;
		text-align: center;
	}
	.thirtythree img,
	.imgWrap img.alignright {
		margin: 0 auto !important;
		display: block;
		float: none;
	}
	.thirtythree p,
	.thirtythree p.small {
		text-align: center;
	}
	.contactWrap {
		padding-left: 0;
	}
}

</style>

<div class="panel servicesWrap">
<div class="bgImg">
	<div class="intro container center">
		<p class="subheader center">Tree Service</p>
		<h1 class="center"><?php the_field('city_and_state');?></h1>
		<?php the_field('intro_paragraph');?>
		<?php if(get_field('intro_button_link')):?>
		<a href="<?php the_field('intro_button_link');?>" class="btn"><?php the_field('intro_button_text');?></a>
		<?php endif; ?>
		<?php if(get_field('facebook_page') || get_field('instagram_page')):?>
			<ul class="socials">
				<?php if(get_field('facebook_page')):?>
				<li class="et-social-icon et-social-facebook"><a href="<?php the_field('facebook_page');?>" target="_blank" class="icon"><span>Facebook</span></a></li>
				<?php endif;?>
				
				<?php if(get_field('instagram_page')):?>
				<li class="et-social-icon et-social-instagram"><a href="<?php the_field('instagram_page');?>" target="_blank" class="icon"><span>Instagram</span></a></li>
				<?php endif;?>		
			</ul>
		
		<?php endif;?>

	
	</div>
	</div>	
	<div class="what container">
		<div class="intro container center">
		<p class="subheader center">What exactly is</p>
		<h2 class="center">Tree Service in <?php the_field('city_and_state');?>?</h2>
		<?php the_field('services_intro');?>
		</div>
		
<?php if( have_rows('services_content') ): ?>

	<div class="services">

	<?php while( have_rows('services_content') ): the_row(); 

		// vars
		$title = get_sub_field('service_title');
		$content = get_sub_field('service_description');
		$link = get_sub_field('service_link');
		$linktext = get_sub_field('service_link_text');

		?>
			<div class="thirtythree">
			
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<?php if(get_sub_field('service_image')):
				$image_id = get_sub_field('service_image');
				$image_size = 'tenx-thumb';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
				?>

				<img src="<?php echo $image_url; ?>" />

				<?php endif; ?>				

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
			
			<p class="small"><?php the_field('city_and_state');?></p>

		    <h3><?php echo $title; ?></h3>
			<?php echo $content; ?>
				
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>" class="btn">Find Out More</a>
			<?php endif; ?>
			</div>


	<?php endwhile; ?>
		<div class="clearfix"></div>
	</div>

<?php endif; ?>
		
		<div class="clearfix"></div>
	
	
	</div>
	
</div>
<?php if(get_field('how_to_know_intro')):?>
<div class="panel how center">
	<div class="intro container">
		<p class="subheader">How to know</p>
		<h2>If You Need Tree Services in <?php the_field('city_and_state');?>?</h2>
		<?php the_field('how_to_know_intro');?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/howtoknow.png" class="aligncenter" />
	
	
	</div>


</div>
<?php endif;?>

<div class="panel faqs" style="background-color:#CDDC39;">
	<div class="container">
		<h2 class="center">Frequently Asked Questions</h2>
	<?php 
		$args = array(
			'post_type'=> 'faqs',
			'order'    => 'DESC'
			);              

		$the_query = new WP_Query( $args );
		if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			$question = get_field('faq_question');
			$answer = get_field('faq_answer'); ?>
		
		<p class="large"><?php echo $question; ?></p>
		<p><?php echo $answer; ?></p>
		
		<?php endwhile; else: ?>	
	
		<?php endif; wp_reset_postdata(); ?>
	</div>
</div>

<?php if(get_field('contact_name') || get_field('contact_headshot') || get_field('contact_intro') || get_field('main_phone_number') || get_field('alt_phone_number') || get_field('contact_email') ):?>

<div class="panel contact">
	<div class="container">
		
		<?php if(get_field('contact_headshot')): ?>
			<div class="imgWrap" style="float: left; width: 30%;">
				<img src="<?php the_field('contact_headshot'); ?>" class="alignright" />
			</div>
		
		<?php else: ?>
			<div class="imgWrap">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/headshot.png" class="alignright" />
			</div>
		
		<?php endif; ?>
		
		<?php if(get_field('contact_name') || get_field('contact_intro') || get_field('main_phone_number') || get_field('alt_phone_number') || get_field('contact_email') ):?>
		
			<div class="contactWrap">
		
			 <?php if(get_field('contact_name')):?>
				<h2><?php the_field('contact_name'); ?></h2>
			<?php endif;?>

			 <?php if(get_field('contact_intro')):?>
				<?php the_field('contact_intro'); ?>
			<?php endif;?>	
				
			<?php if(get_field('main_phone_number') || get_field('alt_phone_number') || get_field('contact_email') ):?>
				<ul class="contactInfo">
					
					<?php if(get_field('main_phone_number')):?>
						<li class="phone"><a href="tel:<?php the_field('main_phone_number');?>"><?php the_field('main_phone_number');?></a> (Cell)</li>
					<?php endif; ?>
					<?php if(get_field('alt_phone_number')):?>
						<li class="phone"><a href="tel:<?php the_field('alt_phone_number');?>"><?php the_field('alt_phone_number');?></a> (Office)</li>
					<?php endif; ?>
					<?php if(get_field('contact_email')):?>
						<li class="email"><a href="mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email');?></a></li>
					<?php endif; ?>					
				
				</ul>
			
			<?php endif; ?>
			
			</div>
		
		
		<?php endif;?>
	
		<div class="clearfix"></div>
	</div>
</div>

<?php endif;?>

<?php

get_footer();
