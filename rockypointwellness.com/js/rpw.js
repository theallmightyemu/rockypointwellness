/*
Google Analytics
*/
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-71953159-1', 'auto');
ga('send', 'pageview');

/*
Menu
*/
var toolTip = function() {
	$(function() {
		$('.question').on('click', function() {
			var $this = $(this),
			$answer   = $this.find('.answer');
			if ($answer.is(':visible')) {
				$answer.fadeOut('normal');
			} else {
				$answer.fadeIn('normal');
			}
		});
		$('.showMenu').on('click', function() {
			if ($('.menu').is(':visible')) {
				$('.menu').slideUp();
			} else {
				$('.menu').slideDown();
			}
		});
	});
};

if (typeof jQuery == 'undefined') {
	var script    = document.createElement('script');
	script.src    = 'http://code.jquery.com/jquery-2.1.4.min.js';
	script.type   = 'text/javascript';
	script.onload = function() {toolTip();};
	document.getElementsByTagName('head')[0].appendChild(script);
} else {
	toolTip();
}
