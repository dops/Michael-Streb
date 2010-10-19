$(document).ready(function() {
  
  if (window.location.pathname.length > 1) {
    var path = unescape(window.location.pathname.substr(1) + window.location.hash);
    var l = getLinkData(path);
  } else {
    var l = {'file': 'home', 'id': false};
  }
  log(l);
	$('#main #content').loadURL(l.file, l.id);
	
});