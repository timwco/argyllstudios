<?php get_header(); ?>


    <div class="welcome welcome_contact">
        <div class="grid_9 alpha"><h3>Get in touch and let us know how we can help you.</h3></div>
        <div class="grid_9 omega mbump"><h3><?php argyllText('accepting');?></h3></div>
    </div>
    

    <div class="omni" id="pageWrap">
        <div class="grid_14 alpha" id="contactLeft">
            <div class="plInner">
                <h1>Contact Us</h1>
                <div class="contactForms">
                    <div id="form_one">
                        <?php echo do_shortcode('[gravityform id="1" name="Just Saying Hi" title="false"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_4 omega cRight mbump" id="pageRight">
            <div class="prInner">
                <img class="scranton" src="<?php bloginfo('template_directory'); ?>/images/scranton.jpg" alt="Scranton, PA" />
                
                <h3>Argyll Studios, INC.</h3>
                <p>Scranton, Pennsylvania</p>
                
                <ul class="socialSBB">
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/images/contact_icons/email.svg" alt="email" />
                        <a href="#">inquire [at] argyllstudios.com</a>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/images/contact_icons/twit.svg" alt="twitter" />
                        <a href="#">@argyllstudios</a>
                    </li>
                </ul>
            </div>
        </div>      
    </div>
    
    
    

<?php get_footer(); ?>