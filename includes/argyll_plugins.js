/* 

	This is for PLUGINS. Random scripts should not go here.
	This site requires jQuery 1.7 or higher.

*/

window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

/*
 * jQuery Raptorize Plugin 1.0 - www.ZURB.com/playground
*/
(function($){$.fn.raptorize=function(options){var defaults={enterOn:'click',delayTime:5000};var options=$.extend(defaults,options);return this.each(function(){var _this=$(this);var audioSupported=true;
var raptorImageMarkup='<img id="elRaptor" style="display: none; z-index:999999;" src="http://argyllstudios.com/wp-content/themes/argyll/includes/raptor/raptor.png" />'
var raptorAudioMarkup='<audio id="elRaptorShriek" preload="auto"><source src="http://argyllstudios.com/wp-content/themes/argyll/includes/raptor/raptor-sound.mp3" /><source src="http://argyllstudios.com/wp-content/themes/argyll/includes/raptor/raptor-sound.ogg" /></audio>';var locked=false;$('body').append(raptorImageMarkup);if(audioSupported){$('body').append(raptorAudioMarkup);}
var raptor=$('#elRaptor').css({"position":"fixed","bottom":"-700px","right":"0","display":"block"})
function init(){locked=true;if(audioSupported){function playSound(){document.getElementById('elRaptorShriek').play();}
playSound();}
raptor.animate({"bottom":"0"},function(){$(this).animate({"bottom":"-130px"},100,function(){var offset=(($(this).position().left)+400);$(this).delay(300).animate({"right":offset},2200,function(){raptor=$('#elRaptor').css({"bottom":"-700px","right":"0"})
locked=false;})});});}
if(options.enterOn=='timer'){setTimeout(init,options.delayTime);}else if(options.enterOn=='click'){_this.bind('click',function(e){e.preventDefault();if(!locked){init();}})}else if(options.enterOn=='konami-code'){var kkeys=[],konami="38,38,40,40,37,39,37,39,66,65";$(window).bind("keydown.raptorz",function(e){kkeys.push(e.keyCode);if(kkeys.toString().indexOf(konami)>=0){init();$(window).unbind('keydown.raptorz');}});}});}})(jQuery);

// Center Function
jQuery.fn.center=function(){parent = this.parent();this.css("left", Math.max(0, (($(parent).width() - this.outerWidth()) / 2) + $(window).scrollLeft()) + "px");return this;}