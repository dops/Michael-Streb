var urlHistory = [];
jQuery.fn.loadURL = function(url, id) {
  var filePath = 'contents/' + url + '.html';
  if (id) {
    filePath = filePath + ' ' + id;
  }
  
	if (urlHistory[0] != filePath) {
		// activate loading-layer
		$(this).fadeOut('slow', function() {
			$(this).load(filePath, function() {
				$(this).fadeIn('slow');
				bindJqueryFunctions();
			});
		});
		
		urlHistory.unshift(filePath);
	}
	return this;
}