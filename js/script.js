
$(document).ready(function(){
	loadchat();
});


$('#message').keyup(function(e){
	var message= $(this).val();
	if (e.which==13) {
		$.post('ajax.php?action=SendMessage&message='+message,
		 function(response){
			loadchat();
			$('#message').val('');
		});
	}
});

function loadchat(){
	$.post('ajax.php?action=getChat', function(response){
			$('.chathistory').html(response);
		});
}

setInterval(function(){
	loadchat();
}, 2000);