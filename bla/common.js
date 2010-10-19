$(document).ready(function() {
	
	$('a, input').bind('focus', function() {
    $(this).blur();
  });
	
	$(".lightbox").lightbox();
	
//	$(document).bind("contextmenu",function(e){
//		return false;
//	});
	
	$('a').click(function(event) {
		event.preventDefault();
		var l = getLinkData($(this).attr('href'));
		$('#main #content').loadURL(l.file, l.id);
	});
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
}