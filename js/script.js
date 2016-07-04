$(function(){
	
	var myDate = new Date ();

	var note = $('#note'),
				ts = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate()+7); //,
		//ts = myDate.setDate(tmpdate),
		//newYear = true;
	
	if((new Date()) <= ts) { ts = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate()+7); }


//	if((new Date()) > ts){
//		ts = (new Date()).getTime() + 7*24*60*60*1000;
//		newYear = false;
//	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += "Дней: " + days +", ";
			message += "часов: " + hours + ", ";
			message += "минут: " + minutes + " и ";
			message += "секунд: " + seconds + " <br />";
			
			note.html(message);
		}
	});
$('#countdown-3').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += "Дней: " + days +", ";
			message += "часов: " + hours + ", ";
			message += "минут: " + minutes + " и ";
			message += "секунд: " + seconds + " <br />";
			
			note.html(message);
		}
	});
	
    $('#countdown-2').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += "Дней: " + days +", ";
			message += "часов: " + hours + ", ";
			message += "минут: " + minutes + " и ";
			message += "секунд: " + seconds + " <br />";
			
			note.html(message);
		}
	});
});
