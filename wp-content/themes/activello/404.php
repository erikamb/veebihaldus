<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package activello
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="post-inner-content">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Kurb, aga soovitud lehte ei leitud.', 'activello' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><div style="max-width: 500px;" id="_giphy_VwoJkTfZAUBSU"></div><script> _gif_artist = "89a"; _gif_artist_avatar = "https://media.giphy.com/avatars/89a/iyZt0gfnnlTR.jpg"; var _giphy = _giphy || []; _giphy.push({id: "VwoJkTfZAUBSU",w: 386, h: 558, clickthrough_url: "http://giphy.com/gifs/89a-eightninea-VwoJkTfZAUBSU"});var g = document.createElement("script"); g.type = "text/javascript"; g.async = true;g.src = ("https:" == document.location.protocol ? "https://" : "http://") + "giphy.com/static/js/widgets/embed.js";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(g, s);</script></p>
						<p>
						<br>
						<?php esc_html_e( 'Ära anna alla, proovi alltoodud teemadest midagi sobivat leida, või kasuta otsingut.', 'activello' ); ?></p>

						<?php get_search_form(); ?>

						<div class="row">
							<div class="col-md-6 not-found-widget">
								<?php the_widget( 'WP_Widget_Recent_Posts', 'title='.esc_html__( 'Hiljutised sisestused', 'activello' ) ); ?>
							</div>

							<div class="col-md-6 not-found-widget">
								<?php if ( activello_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
								<div class="widget widget_categories">
									<h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'activello' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
									?>
									</ul>
								</div><!-- .widget -->
								<?php endif; ?>
							</div>
						</div>

						<div class="row">
							

							<div class="col-md-6 not-found-widget">
								<?php the_widget( 'WP_Widget_Tag_Cloud', 'title='.esc_html__( 'Tags', 'activello' ) ); ?>
							</div>
						</div>


				</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
