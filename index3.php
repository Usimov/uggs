<!DOCTYPE html>
<html lang="en">
<head>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    

    <script type="text/javascript" src="js/jquery.fancybox.js" ></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.call-but').fancybox({
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150,
				helpers : {
					overlay : null
				}
			});
		});
	</script>

        <link rel="stylesheet" href="css/jquery.countdown.css" />


<title>Продажа двигателей Б/У для иномарок</title>
</head>
<body>






		
		
		
			               
						
					
                        <div id="countdown"></div>
                        <p style="margin: -14px 0 0 24px;">дней&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;часа&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;минут&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;секунд</p>
						
					
			

<p id="date"></p>

<!-- JavaScript -->
		<script src="js/jquery.countdown.js"></script>
		<script src="js/script.js"></script>
<script type="text/javascript">
var d = new Date();
var monthA = 'января,февраля,марта,апреля,мая,июня,июля,августа,сентября,октября,ноября,декабря'.split(',');
var s = monthA[d.getMonth()];
var k = d.getDate() + 1;
document.getElementById('date').innerHTML="до "+k+" "+s;
</script>


</body>
</html>
