
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
$( "#homeworkManagerSubmit" ).submit(function( event ) {
	event.preventDefault();
	createNotification('success', 'make successed');
});

/*----form checker----*/
var date = new Date();
var day = date.getDate();
var monthIndex = date.getMonth();
var year = date.getFullYear();
var fulldate = (monthIndex+1)+"/"+day+"/"+year;
var hr = date.getHours();
var min = date.getMinutes();

$('#selectDate').change(function () {

	if($('#selectDate').val()!=fulldate) {
		$("#alertDate").html("วันที่ไม่ตรงกับวันปัจจุบัน");
		$("#alertDate").show();
	} else {
		$("#alertDate").hide();
	}
});

$( "#nameCheckSubmit" ).submit(function( event ) {
	event.preventDefault();

	if($("#selectDate").val())  {
		createNotification('success', 'make successed');	
 		setTimeout(function() { window. location.href = "http://sadev.devss.pw/index.php/teacher/namecheck_table"; }, 2000);
	} else {
		createNotification('danger', 'select date before submit.');
	}

});

$( "#addStudent" ).submit(function( event ) {
	event.preventDefault();
	var student_code = $("#student_code").val();
	if(student_code!="") {
		$("#student_code").val(null);
		$("#studentImg").attr("src", "http://reg.buu.ac.th/registrar/getstudentimage.asp?id="+student_code);
		$('#chkStudentList tr:last').after('<tr><td>x</td><td>'+student_code+'</td><td>xxxxxxxxxx</td><td>'+hr+':'+min+'</td></tr>');
		createNotification('success', 'chk ok!');
	} else {
		createNotification('danger', 'enter student code before submit.');
	}
		

});
