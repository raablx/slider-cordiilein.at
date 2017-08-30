<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="msapplication-tap-highlight" content="no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		Test Wordpress | Owl Carousel | 2.2.1
	</title>
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="owl.carousel.min.css">
	<!--<link rel="stylesheet" href="owl.theme.default.min.css">-->
	<link rel="stylesheet" href="owl.custom.css">
</head>

<body>

	<?php if ( is_home() ) {
	//get_template_part( 'part', 'slider' );
	$the_query = new WP_Query( 'posts_per_page=5' ); $i=1; ?>
	<div class="owl-carousel owl-theme">
	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="item owl_full_item">
			<div style="display: block; position: relative;">
				<a href="<?php the_permalink() ?>">
					<div class="imgwrap">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" height="520px">
					</div>
					<div class="item_content">
						<center>
							<div class="entry-meta entry-meta-top">
								<time class="entry-date" itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
								<a href="<?php echo esc_url( get_comments_link() ); ?>" class="entry-comments-no"><?php comments_number(); ?></a>
							</div>
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Continue Reading', 'olsen-light' ); ?></a>

						</center>
					</div>
				</a>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<?php } ?>

	<script type="text/javascript" src="jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				center: true,
				items:1,
				loop:true,
				nav:true,
				navText:[],
				dots: false,
				margin:0,
				responsive:{
					790:{
						items:1,
					},
					1050:{
						stagePadding: 160,
					},
					1450:{
						stagePadding: 320,
					},
					1750:{
						stagePadding: 450,
					}
				}
			});
		});
	</script>
</body>

</html>
