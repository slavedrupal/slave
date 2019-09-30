jQuery(document).ready(function ($) {
	"use strict";
	$('#go-to-top').click(function () {
		$('body,html').animate({
		    scrollTop: 0
		}, 800);
		return false;
	});
	AOS.init();
	
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-112799649-1');
});