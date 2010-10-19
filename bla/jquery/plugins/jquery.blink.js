jQuery.fn.blink = function(options) {
	var settings = jQuery.extend({
     speed: 20, times: 3
   }, options);
	for (i = 0; i < settings.times; i++) {
		this.fadeOut(settings.speed).fadeIn(settings.speed);
	}
};