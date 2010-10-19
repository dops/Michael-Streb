$(document).ready(function() {
	
	$('a, input').bind('focus', function() {
    $(this).blur();
  });
	
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
  
  $('a').click(function(event) {
    log('Hallo');
		event.preventDefault();
		var l = getLinkData($(this).attr('href'));
		$('#main #content').loadURL(l.file, l.id);
	});
}