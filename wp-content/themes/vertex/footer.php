		<footer id="foot">
			<div class="main-foot">
				<div class="container">
					<div class="foot-col">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="foot-col">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<div class="foot-col">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<div class="foot-col">
						<?php dynamic_sidebar('footer-4'); ?>
					</div>
				</div>
			</div>
			<div class="bottom-foot">
				<div class="container">
					<p class="credits"><?php echo ( vertex_setting('vertex_copyright') !='' ? sanitize_text_field( vertex_setting('vertex_copyright') ) : vertex_footer_copyright() ); ?></p>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87342440-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
