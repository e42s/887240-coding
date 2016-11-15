
function createNotification(type,text) {
	PNotify.removeAll();
	new PNotify({
	    title: 'Yoohoo!',
	    text: text,
	    type: type,
	    styling: 'bootstrap3'
	});
}


/*----homework form checker----*/
$( "#submitHomework" ).submit(function( event ) {
	event.preventDefault();
	//check file upload?
	if ($("#homeworkFile")[0].files.length>0)
		createNotification('success', 'upload successed');
	else
		createNotification('error', 'pls select file before confirm');		
});
