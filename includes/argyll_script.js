/*!

	This is for random scripts to help the site preform better. Plugins should not go here.
	This site requires jQuery 1.7 or higher.

*/


// Main Functions on DOM Load
$(document).ready(function(){
	
	// Raptorize this bitch...
	$('#cpyright').raptorize({ 'enterOn': 'konami-code' });
	

	// Scroll To Function
	$('a[href*=#]').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 900);
				return false;
			}
		}
	});


    // Textarea
	$("textarea.textarea").focus(function() {
    	$(this).val('');
    });


    // Kill Sep on Alpha/Omega Work Pieces
    if($('.singleWrap').length > 0){
	    var pli = $('.wtRight a[rel="prev"]').length > 0;
	    var nli = $('.wtRight a[rel="next"]').length > 0;
	    if(!pli || !nli){ $('.wtRight i.sep').hide(); }  
    }
    


	// Side Scroll Bar
	if(Modernizr.mq('only screen and (max-width: 768px)')) {} else {
		if($('#work_right').length > 0){
			$(function() {
			    var offset = $("#work_right").offset();
			    var topPadding = 25;
			    $(window).scroll(function() {
			        if ($(window).scrollTop() > offset.top) {
			            $("#work_right").stop().animate({
			                marginTop: $(window).scrollTop() - offset.top + topPadding
			            });
			            $('a.btt').fadeIn();
			        } else {
			            $("#work_right").stop().animate({
			                marginTop: 0
			            });
			            $('a.btt').fadeOut();
			        };
			    });
			});
		}
	}
	
	// Set Grid to Equal Heights
	$(window).load(function() { 
		$('.mgrid_4').each(function(){ 
			$(this).find('.wpw').css('height', $(this).find('img:first').height()) 
		});
	});
	
	
	// Center Things
	$('.tagline h4').center();
	$('.amper').center();
	
	// Responsive Nav
	$('span.menuHit').click(function(){
		$(this).next().slideToggle();
	});
	
	
	// Responsive Via JS
	$(window).resize(function() { 
		$('.tagline h4').each(function(){ $(this).center(); }); 
		$('.amper').center();
		$('.mgrid_4').each(function(){ $(this).find('.wpw').css('height', $(this).find('img:first').height()) });
	});	

	

});