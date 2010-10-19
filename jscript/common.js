$(document).ready(function() {
	
	$(".lightbox").lightbox();
	
//	$(document).bind("contextmenu",function(e){
//		return false;
//	});
});

// Log function for debuging in firefox
function log(msg) {
	if (typeof console == 'object') {
		console.log(msg);
	}
}

function getLinkData(href) {
  var temp = href.split(' ');
  return {'file' : temp.shift(), 'id' : temp.join(' ')};
}

function bindJqueryFunctions() {
  prepareFormHandler();
  
  $(".lightbox").lightbox();
  
  $('a.intern').click(function(event) {
		event.preventDefault();
		var l = getLinkData($(this).attr('href'));
		$('#main #content').loadURL(l.file, l.id);
	});
	
	$('a').bind('focus', function() {
    $(this).blur();
  });
}