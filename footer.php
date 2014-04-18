		</div> <!-- // content -->
		<div class="clearfix"></div>
	</div><!-- // container -->
</div><!-- // wrapper -->	


<footer>
	<div class="finner row">
		<div class="grid_13 fg1">
			<a href="<?= contactLink('footer') ?>">WORK WITH US</a>
		</div>
		<div class="grid_5 fg4 omega">
			<div id="cpyright"><?php argyllText('copyright'); ?></div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Javascript -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/includes/argyll_plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/includes/argyll_script.js"></script>
<?php do_google_analytics(); ?>

</body>
</html>