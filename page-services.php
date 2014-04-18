<?php get_header(); ?>


	<div class="welcome welcome_about">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="tagline"><h4>Our Services</h4></div>

	<div class="our_services opTop">
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/web_design.svg" alt="Web Design" />
				</div>
				<h3>Web Design</h3>
				<h6>Websites, Blogs</h6>
				<p>
					We build engaging websites from the ground up, designed to showcase your business in a way your visitors won't soon forget. With an integrated content management system, you'll have total control. We heard that people like that sort of thing.
				</p>
			</div>
		</div>
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/web_dev.svg" alt="Web Development" />
				</div>
				<h3>Web Development</h3>
				<h6>Front and Back-End Code</h6>
				<p>
					We slice, we dice and we program rock solid code. We use the latest technologies such as SASS, jQuery, Rails and Laravel to output the cleanest markup for your website or application. Let us know what we can do for you.
				</p>
			</div>
		</div>
	</div>
	<div class="our_services">
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/ui.svg" alt="UI Design" />
				</div>
				<h3>UI Design</h3>
				<h6>Application, iOS</h6>
				<p>
					Beautifully designed websites are one thing, but if your client can't make use of the site on all of their devices then your product falls short. Let us help you on all fronts of your project and make it shine on all platforms.
				</p>
			</div>
		</div>
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/wordpress.svg" alt="WordPress" />
				</div>
				<h3>WordPress</h3>
				<h6>Custom Themes, Plug-Ins</h6>
				<p>
					We have had the privilege of working with WP for the past 6 years. Currently we are one of about 30 US companies listed in their <a href="http://directory.codepoet.com/profile/argyll-studios/" target="_blank">developer directory</a>. Whether you need a custom theme, plugin or migration, we are the team for the job.
				</p>
			</div>
		</div>
	</div>
	<div class="our_services">
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/illustration.svg" alt="Illustration" />
				</div>
				<h3>Illustration</h3>
				<h6>Custom Graphics, Icon Design</h6>
				<p>
					Stock photos are great, but if you really want to stand out and take your project to the next level, custom artwork is the way to go. We can illustrate something for you like a mascot or character, create a surreal photo manipulation, or anything in between.
				</p>
			</div>
		</div>
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/ecommerce.svg" alt="E-Commerce" />
				</div>
				<h3>Ecommerce</h3>
				<h6>Online Stores, Shopping Carts</h6>
				<p>
					Ecommerce can be tricky. You need a secure platform to protect your business. We have built hundreds of ecommerce web sites over the years on a variety of different platforms. Let us know your needs and we'll find the best platform for your business.
				</p>
			</div>
		</div>
	</div>
	<div class="our_services opBottom">
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/branding.svg" alt="Brand Identity" />
				</div>
				<h3>Brand Identity</h3>
				<h6>Brand Strategy, Logo Design</h6>
				<p>
					Your logo is a visual representation of your brand. It should stand out while keeping you relevant. We can make that happen. Oh, you already have a logo? No problemo. We can clean it up or make enhancements and maintain it's style and character.
				</p>
			</div>
		</div>
		<div class="grid_9">
			<div class="work_block">
				<div class="icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/service_icons/app.svg" alt="Web Applications" />
				</div>
				<h3>Web Applications</h3>
				<h6>Rails, Zend, CodeIgniter</h6>
				<p>
					From simple employee applications to full blown social networks, our team can handle any project you throw at us. We use the latest technologies to make sure your application is not only exactly what you want, but will be secure and ready for growth.
				</p>
			</div>
		</div>
	</div>
	
	<div class="tagline"><h4 style="left: 430.5px;">Questions</h4></div>

	<div class="our_expertise">
		<div class="grid_6">
			<h3>How much do you charge?</h3>
    		<p>We estimate the cost of each project individually, based on the anticipated amount of time that it will take.</p> <br /><br />
    		<h3>Do we need to meet?</h3>
    		<p>If you are located nearby, we certainly can. However, we can easily communicate and see your project through using email, phone and screencasts.</p> 
		</div>
		<div class="grid_6">
			<h3>How long will my project take?</h3>
    		<p>It really depends on the details involved. We typically map out a timeline with you at the start of the project.</p> <br /><br />
    		<h3>Do you offer site maintenance services?</h3>
    		<p>Sort of. We offer some free maintenance to recently closed projects. If you need more, make sure to bring it up and we'll see what we can do for you.</p>
		</div>
		<div class="grid_6">
			<h3>Will I be able to edit my site's content?</h3>
    		<p>Sure will. We'll set you up with a content management system so you have access to the content on your site.</p> <br /><br />
    		<h3>I have a question not listed here.</h3>
    		<p>No worries, just email us and we'll do our best to get you a quick and comprehensive response.</p>
		</div>
	</div>

<?php get_footer(); ?>