<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Home
 * @package sanisidro
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div id="banner">
                <?php
					echo do_shortcode('[smartslider3 slider="3"]');
				?>
            </div>
			<section id="latest-news">
				<div class="container-fluid">
					<div class="container">
						<div class="container-heading">
							<h1 class="heading">Latest News</h1>
							<a href="#" class="btn btn-primary view-all">View All</a>
						</div>
						<div class="green-divider"></div>
						<?php echo do_shortcode('[latest_post type="4"]') ?>
					</div>
				</div>
			</section>

			<section id="latest-events">
				<div class="container-fluid">
					<div class="container">
						<div class="container-heading">
							<h1 class="heading">Latest Events</h1>
							<a href="#" class="btn btn-primary view-all">View All</a>
						</div>
						<div class="green-divider"></div>
						<?php echo do_shortcode('[latest_events]') ?>
					</div>
				</div>
			</section>
			<section id="latest-videos">
				<div class="container-fluid">
					<div class="container">
						<div class="container-heading">
							<h1 class="heading">Latest Videos</h1>
							<a href="#" class="btn btn-primary view-all">View All</a>
						</div>
						<div class="green-divider"></div>
						<?php echo do_shortcode('[latest_videos]') ?>
						
						<!-- <div class="content-holder">
							<div class="col-md-5 featured">
								<div class="image-holder"></div>
								<h3 class="post-title">Batobato Village in San Isidro Town to get New Barangal Hall</h3>
								<p class="post-meta">May 31, 2023</p>
								<p class="excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
								<a href="#" class="btn btn-primary view-all">Read More</a>
							</div>
							<div class="col-md-7 related">
								<div class="related-content">
									<div class="play-button"></div>
									<div class="overlay"></div>
									<h3 class="post-title">Batobato Village in San Isidro Town to get New Barangal Hall</h3>
								</div>
								<div class="related-content">
									<div class="play-button"></div>
									<div class="overlay"></div>
									<h3 class="post-title">Batobato Village in San Isidro Town to get New Barangal Hall</h3>
								</div>
								<div class="related-content">
									<div class="play-button"></div>
									<div class="overlay"></div>
									<h3 class="post-title">Batobato Village in San Isidro Town to get New Barangal Hall</h3>
								</div>
								<div class="related-content">
									<div class="play-button"></div>
									<div class="overlay"></div>
									<h3 class="post-title">Batobato Village in San Isidro Town to get New Barangal Hall</h3>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</section>
			<section id="tourism">
				<div class="container-fluid">
					<div class="container">
						<div class="container-heading">
							<h1 class="heading">Tourism</h1>
							<a href="#" class="btn btn-primary view-all">View All</a>
						</div>
						<div class="green-divider"></div>
						<?php echo do_shortcode('[latest_tourism]') ?>
					</div>
				</div>
			</section>
			<section id="contact">
				<div class="container-fluid">
					<div class="container">
						<div class="container-heading">
							<h1 class="heading">Contact Us</h1>
						</div>
						<div class="green-divider"></div>
						<div class="content-holder">
							<div class="col-md-6">
								<?php echo do_shortcode('[contact-form-7 id="15" title="Main Contact"]');?>
							</div>
							<div class="col-md-6" id="contact-right">
									<div id="content-holder">
										<p>Landline No.: +6387-388-3120</p>
										<p>Fax No.: +6387- 388-3109</p>
										<p>Email Address: sanisidro@gmail.com</p>
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();