<?php
if(isset($_POST['send']))
{
session_start();
$tel=$_POST['telephone'];
$name=$_POST['name'];
$object="Отправка заявки";
$text=date("Y-m-d:H-i").": $name заказал(а) заявку на звонки на этому номеру $tel";
$_SESSION['tel']=$tel;
$_SESSION['name']=$name;
$to="triowork2@gmail.com";

$header="From:$name\r\nReply-to:$name\r\nContent-type:text/plain;charset=utf-8\r\n";
$object="=?utf-8?B?".base64_encode($object)."?=";
mail($to,$object,$text,$header);
header("Location:succes.php?send=1");
exit;
}
if(isset($_POST['send2']))
{
session_start();
$tel=$_POST['telephone'];
$object="Заказ звонка";
$text=date("Y-m-d:H-i").": Заказаз звонка по этому $tel номеру";
$_SESSION['tel']=$tel;
$to="triowork2@gmail.com";

$header="From:$name\r\nReply-to:$name\r\nContent-type:text/plain;charset=utf-8\r\n";
$object="=?utf-8?B?".base64_encode($object)."?=";
mail($to,$object,$text,$header);
header("Location:succes1.php?send=1");
exit;
}
if(isset($_POST['send3']))
{
session_start();
$tel=$_POST['telephone'];
$object="Заказ звонка";
$text=date("Y-m-d:H-i").": Заказаз звонка по этому $tel номеру";
$_SESSION['tel']=$tel;
$to="triowork2@gmail.com";

$header="From:$name\r\nReply-to:$name\r\nContent-type:text/plain;charset=utf-8\r\n";
$object="=?utf-8?B?".base64_encode($object)."?=";
mail($to,$object,$text,$header);
header("Location:succes1.php?send=1");
exit;
}
if(isset($_POST['send4']))
{
session_start();
$tel=$_POST['telephone'];
$name=$_POST['name'];
$prod=$_POST['product'];
$object="Заказ продукта";
$text=date("Y-m-d:H-i").": $name с этим $tel телефоном заказал(а) покупку продукта $prod";
$_SESSION['tel']=$tel;
$to="triowork2@gmail.com";

$header="From:$name\r\nReply-to:$name\r\nContent-type:text/plain;charset=utf-8\r\n";
$object="=?utf-8?B?".base64_encode($object)."?=";
mail($to,$object,$text,$header);
header("Location:succes1.php?send=1");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link href="slide/css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slide.css" type="text/css"/>
<link rel="stylesheet" href="css/slide1.css" type="text/css"/>



<script src="slide/js/init.js" type="text/javascript"></script>

<script type="text/javascript" src="js/nen.slider.js"></script>	
<script type="text/javascript" src="js/main.js"></script>

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

<title>Продажа лучших слингов.
Доставка по Москве и всей России

</title>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logoPlace">
			<img src="images/logo.png">
		</div>
		<div id="infoPlace">
			<p class="tel">8(495)663-52-39</p>
			<p class="tel">8(925)663-52-39</p>
			<p class="Bt_text">Звоните! с 9.00 до 22.00  пн-вс.<br>или</p>
			<div class="call-button"><a href="#call" onclick="yaCounter22659319.reachGoal('zakzv'); return true;"><img src="images/call_but.png"></a>
			</div>
		</div>
		<div id="TextPlace">
			<p>Продажа  <span>лучших</span> слингов.</br>   
Доставка по Москве и всей России</p>
		</div>
	</div>
	<div id="form_place">
		<div id="form1">
			<p class="form1_t1">Хотите купить слинг,<br>но не знаете какой выбрать?</p>
			<p class="form1_t2">Оставьте заявку и наш<br> слингоконсультант<br> расскажет  вам все о слингах.</p>
			<form method="POST" action="index.php" name="myform1">
				<p><input type="text" name="name" placeholder="ваше имя" required="required"></p>
				<p><input type="text" name="telephone" placeholder="ваш телефон" required="required"></p>
				<input type="submit" name="send" value="">
			</form>
		</div>
	</div >
	<div id="easy_rec">
	<p>Слинги easy - почувствуй себя свободной!</p>
		<div id="circle"><p class='s'>Более <br><span>5375</span></br> родителей</br> носят слинги <span class="yellow">easy</span></p>
		</div>
		<div id="circle1"><p>Доставка <br><span>300р</span></br> в любую точку России</p>
		</div>
		<div id="circle2"><p>Гарантируем <br><span>возврат</span></br> если вам </br>не подойдет</p>  
		</div>
	</div >
	<div id="aboutSling">
		<p class="about_h">Вы знаете каким должен быть правильный слинг?</p>
		<table>
			<tr><td rowspan="6" class="pic"><img src="images/5_pic.png"></td></tr>
			<tr><td><p class="head_t"><span>1</span>Слинг с кольцами - самый удобный тип слинга</p><p class="text">В нем малыш может сидеть вертикально, на боку, или лежать.
В слинг с кольцами легко посадить и легко достать малыша. 
А спящего можно переложить, не разбудив.</p></td></tr>
			<tr><td><p class="head_t"><span>2</span>Слинги пошиты из 100% хлопка</p><p class="text">Экологичная, гипоаллергенная ткань с плотной и мягкой фактурой,
не вызывает раздражения кожи, быстро сохнет и легко стирается.
</p></td></tr>
			<tr><td><p class="head_t"><span>3</span>Особое, «саржевое» плетение волокон ткани</p><p class="text">Благодаря саржевому переплетению нитей, обеспечивается 
«обнимательность» слинга. 
Такой слинг не вытягивается и обеспечивает необходимую поддержку 
спинке малыша и его носящей мамы.
</p></td></tr>
			<tr><td><p class="head_t"><span>4</span>Кольца выдерживают более 680кг на разрыв</p><p class="text">Они сделаны из прочного алюминия методом стыковой сварки.
Окрашены безопасными для малыша и устойчивыми к истиранию красками.</p></td></tr>
			<tr><td><p class="head_t"><span>5</span>Мягкие бортики равномерно передают нагрузку</p><p class="text">Яркие бортики подбиты тонким синтепоном и выполнены из  100% 
хлопка класса премиум. Они практически не тянутся, фиксируя тем 
самым ребенка в слинге. 
А применение синтепона позволяет мягко передавать нагрузку на</p></td></tr>
		</table>
	</div >
	<div id="summer">
		<div id="in_summer"><p>Летняя коллекция</p>
		</div><div class="act"><div style="height:120px;"></div><p id="date"></p><div id="countdown"></div></div>
	</div >
	<div class="clear"></div>
	<div id="summ_slings">
		<!--slide-->
		<!--<div id="content">
		<h1>Демонстрация слайдера MobilySelect</h1>
		<p class="pd">Пример 1</p>
		<pre class="code_sample">
		<!--$('.slider1').mobilyslider();-->
		</pre>
		<div class="slider"><p id="sliderp">«Волшебный сад»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/l1/1.jpg" alt="Лиловый сад" /></div>
							<div><img src="slide/tow/l1/2.jpg" alt="Лиловый сад" /></div>
							<div><img src="slide/tow/l1/3.jpg" alt="Изумрудный сад" /></div>
							<div><img src="slide/tow/l1/4.jpg" alt="Изумрудный сад" /></div>
							<div><img src="slide/tow/l1/5.jpg" alt="Ночной сад" /></div>
							<div><img src="slide/tow/l1/6.jpg" alt="Ночной сад" /></div>
							<div><img src="slide/tow/l1/7.jpg" alt="Цветочный сад" /></div>
							<div><img src="slide/tow/l1/8.jpg" alt="Розовый сад" /></div>
							<div><img src="slide/tow/l1/9.jpg" alt="Бусы в подарок" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Лиловый сад</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct1" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
		<div class="slider"><p id="sliderp">«Воспоминания»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/l2/1.jpg" alt="Изумрудный закат" /></div>
							<div><img src="slide/tow/l2/2.jpg" alt="Изумрудный закат" /></div>
							<div><img src="slide/tow/l2/3.jpg" alt="Морской закат" /></div>
							<div><img src="slide/tow/l2/4.jpg" alt="Морской закат" /></div>
							<div><img src="slide/tow/l2/5.jpg" alt="Песочный закат" /></div>
							<div><img src="slide/tow/l2/6.jpg" alt="Ночной закат" /></div>
							<div><img src="slide/tow/l2/7.jpg" alt="Вечерний закат" /></div>
							<div><img src="slide/tow/l2/8.jpg" alt="Вечерний закат" /></div>
							<div><img src="slide/tow/l2/9.jpg" alt="Бусы в подарок" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Изумрудный закат</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct1" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
		<div class="slider"><p id="sliderp">«Закат мечты»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/l3/1.jpg" alt="Карамель" /></div>
							<div><img src="slide/tow/l3/2.jpg" alt="Карамель" /></div>
							<div><img src="slide/tow/l3/3.jpg" alt="Шоколад" /></div>
							<div><img src="slide/tow/l3/4.jpg" alt="Шоколад" /></div>
							<div><img src="slide/tow/l3/5.jpg" alt="Орех" /></div>
							<div><img src="slide/tow/l3/6.jpg" alt="Ваниль" /></div>
							<div><img src="slide/tow/l3/7.jpg" alt="Ваниль" /></div>
							<div><img src="slide/tow/l3/8.jpg" alt="Розовый сад" /></div>
							<div><img src="slide/tow/l3/9.jpg" alt="Бусы в подарок" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Карамель</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct1" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
		<!--end slide-->
	</div>

		
		
	</div >
	<div id="autumn">
		<div id="in_autumn"><p>Осенняя, золотая коллекция</p>
		</div>
	</div >
	<div class="clear1"></div>
	<div id="autumn_slings">
		<div class="slider1"><p id="slider1p">«Золотой одуванчик»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/o1/1.jpg" alt="Бирюза" /></div>
							<div><img src="slide/tow/o1/2.jpg" alt="Шоколад" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Бирюза</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct2" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
		<div class="slider1"><p id="slider1p">«Лесной одуванчик»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/o3/1.jpg" alt="Весенний беж" /></div>
							<div><img src="slide/tow/o3/2.jpg" alt="Шоколадный беж" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Ночная звезда</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct2" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
		<div class="slider1"><p id="slider1p">«Серебряный одуванчик»</p>
			<div class="product">

						<div class="image">
							<div class="active"><img src="slide/tow/o2/1.jpg" alt="Ночная звезда" /></div>
						</div>
						<div class="color">
							<div class="nav">
								<div class="left"></div>
								<div class="right"></div>
							</div>
							<p>Весенний беж</p>
						</div>
						<span>выберите расцветку</span>
						<input type="button" class="getProduct2" onclick="getProduct(this);yaCounter22659319.reachGoal('zaktov'); return true;" value="" />
					</div>
		</div>
	</div >
	<div id="easySlings">
		<p class="easy_head">Что такое слинги easy:</p>
		<table>
			<tr><td rowspan="6" class="pic1">
			<p class="number">1</p>
			<p class="number">2</p>
			<p class="number">3</p>
			<p class="number">4</p>
			<p class="number">5</p>
			</td></tr>
			<tr><td><p class="easy_h1">Это в первую очередь безопастность и здоровье малыша</p><p class="easy_t">Все наши слинги прошли сертификацию по Европейскому и Российскому стандартам.
Одобрены Российской Академией медицинских наук и Институтом планирования семьи.
</p></td></tr>
			<tr><td><p class="easy_h1">Это высочайшее качество в мелочах</p><p class="easy_t">Экологичная, гипоаллергенная ткань с плотной и мягкой фактурой,
не вызывает раздражения кожи, быстро сохнет и легко стирается.
</p></td></tr>
			<tr><td><p class="easy_h1">Это свобода во всем</p><p class="easy_t">Они настолько удобны и универсальны, что подойдут для дома и улицы. 
Их можно носить в теплое и холодное время года.
</p></td></tr>
			<tr><td><p class="easy_h1">Это комфорт</p><p class="easy_t">Они сделаны из прочного алюминия методом стыковой сварки.
Окрашены безопасными для малыша и устойчивыми к истиранию красками.
</p></td></tr>
			<tr><td><p class="easy_h1">Это стиль</p><p class="easy_t">Мама с ребенком это стильно, красиво и модно и наши слинги это только подчеркивают.</p></td></tr>
		</table>
	</div>
	<div id="compSling">
	<p>Что входит в комплект поставки:</p>
	<img src="images/photo.png">
	<table>
	<tr>
	<td><img src="images/comp1.png"></td>
	<td><img src="images/comp2.png"></td>
	<td><img src="images/comp3.png"></td>
	<td><img src="images/comp4.png"></td>
	</tr>
	</table>
	</div>
	<div id="getSling">
		
		<p class="get_h">Как получить слинг:</p>
		<p class="p1">Вы оставляете<br> заявку на сайте</p>
		<p class="p2">В течение 10<br> минут мы вам<br> перезваниваем</p>
		<p class="p3">На следующий<br> день привозим<br> ваш заказ</p>
		<p class="p4">Вы проверяете<br> и оплачиваете<br> курьеру</p>
		<p class="p5">Носите долго и<br> счастливо а потом<br> дарите внукам</p>
		
	</div>
	<div id="form2">
		<p>Порадуйте себя и своего малыша.Закажите слинг сейчас.И уже завтра он<br> будет у вас дома!</p>
		<form method="POST" action="index.php" name="form2">
		<p><input type="text" name="telephone" placeholder="ваш телефон" required="required"></p>
		<input type="submit" name="send2" value="">
		</form>
	</div>
	<div id="coment">
		<div id="in_coment"><p>Отзывы о наших слингах:</p>
		</div>
	</div >
	<div class="clear"></div>	
	<div id="comentText">
	<div id="coment3">
	<img src="images/ph1.png">
	<div id="coment3_t">
	<p>Олеся Москва.</br>
Это что то невообразимое, какой яркий, какой качественный, все строчечки ровненькие, кольца, блестят переливаются. Привезли в бумажном экопакетике, перевязан бусиками, инструкция - прям глянцевый журнал. Девочки, такого я не ожидала. Шикарный шоколадный цвет, вышивка просто супер. Кольца точ в точ в тон вышивке.
</br></br>
Ну ладно хватит эмоций, теперь по делу:</br>
Просунула хвост в кольца, диаметр колец то, что надо, не сильно большие, и не слишком маленькие, фиксируют мою малышку хорошо, а если нужно чуть подрегулировать, то, тоже получается без проблем. Ткань не тянется, и действительно быстро сохнет. После 3х недель использования и двух стирок выглядит как новый, что быдет дальше посмотрим, но пока я полностью довольна.



</p>
	</div></div>
	<div id="coment4">
	<div id="coment4_t">
	<p>Наташа Омск.</br>
Получила ваш слинг, действительно быстро, почтальон принес прямо домой. Первое впечатление - это подход. Упаковка, сам слинг, слингобусы, инструкция, все очень изящно и мило. Сразу стало спокойно на душе, что не обманули. При использовании это только подтвердилось. Слинг достоин всех похвал. Его действительно удобно носить. На плече лежит как влитой,  не сползает даже со скользкой куртки. Класть маленького Женю в слинг тоже очень удобно, и регулировка положения слинга не вызывает проблем, в кольцах ткань фиксируется плотно, и в тоже время легко подтягивается, когда это нужно. Единственное приходится немного прогибаться, когда перекладываю его в кроватку. Был бы хвост длиннее было проще, но тогда он бы болтался под ногами. Я очень доволна, спасибо огромное.
</p>
	</div>
	<img src="images/ph2.png">
	</div>
	<div id="coment5">
	<img src="images/ph3.png">
	<div id="coment5_t"><p>Марина Нижний Новгород.</br>
Привет, это Марина из Новгорода, решила написать вам отзыв, потому что руки мои теперь часто свободны, и даже сейчас моя дочурка лежит в слинге, а я могу свободно печатать. Наш слинг нам очень нравится, и я и моя дочурка очень довольны, мне удобно и ей думаю тоже, слинг ее как будто обнимает, и она крепко спит. У нас даже папа освоил  "эту чудо штуковину" и теперь кажется даже больше времени проводит с нашей крохой.  После неоднократной стирки слинг такое ощущение стал даже лучше, теперь он еще более мягкий, но при этом не растянулся, и вглядит как новый, и кстати почти не заламывается. Ткань очень красивая, не стыдно на улицу одевать, мы часто гуляем с малышкой на руках, про коляску совсем забыли, вот так.
</p>
	</div></div>
	<div id="coment6">
	<div id="coment6_t">
	<p>Катерина Новосибирск</br>
Хочу сказать огромное спасибо за слинг! Это просто спасение! Оказывается как много проблем можно решить с его помощью! В нашем городе элементарно не у всех магазинов и аптек есть пандусы, но зато есть высокие крылечки и ступеньки, на которые часто нам просто не получалось забраться с коляской. Зато теперь мы идем туда, куда хотим, малышка сидит у меня в слинге, а я решаю накопившиеся вопросы и не думаю о том, где и как оставлять ребенка. Слингом полностью доволна, качество превзошло все ожидания, а главное как удобно! Вчера не удержалась и заказала второй своей подруге, которая должна вот вот родить. И вспомнила, что обещала написать вам отзыв, вот теперь написала. Может вы нам скидку сделаете, как постоянным клиентам? :)
</p>

	</div>
	<img src="images/ph4.png">
	</div>
	<div id="coment7">
	<img src="images/ph5.png">
	<div id="coment7_t"><p>Ольга Санкт-Петербург</br>
Всем привет, я Ольга.</br>
Хочу поделиться своими впечатлениями. Когда в нашей семье родилась маленькая Катюшка, друзья не сговариваясь подарили нам почти сразу три слинга. Слинг шарф, слинг с кольцами Ехидна и слинг Изи. Слинг шарф был первым подарком, и я сначала училась наматывать его, и почти уже освоила. Но тут у нас появилось еще два слинга с кольцами. Теперь Ехидну я использую в основном дома когда одна, а Изи у меня парадный вариант, мы всегда ходим с ним на прогулки, и щеголяем перед гостями, выглядит он стильно, как модный аксессуар. И если выбирать между этими двумя моделями, я бы оставила Изи, потому что в нем удобно малышке, и мама выглядит шикарно. А ткань после нескольких стирок не растянулась, не потеряла своей красоты, но стала еще более мягкая и приятная на ощупь. Так что если вы думаете какой слинг покупать, Изи - достойный вариант, думаю вы и ваш малыш будете довольны. Вот.
</p>
	</div>
	</div>
	
	</div>
	<div class="clear2"></div>
<div class="otzot"><p>Отправить свой отзыв можно на почту:<br> 
<a href="mailto:info@easy-sling.ru">info@easy-sling.ru</a></p></div>
	<div id="form3">
		<p class="form3_h">Закажите слинг прямо сейчас</p>
		<p class="form3_t">Оставьте свой телефон, и в течение<br> 15 минут мы вам перезвоним</p>
			<form method="POST" action="#" name="#">
		<p><input type="text" name="telephone" placeholder="ваш телефон" required="required"></p>
		<input type="submit" name="send3" value="">
		</form>
		<div class="bot_wrp"><p class="ser">Весь товар <span>сертифицирован.</span> Гарантия   1   год.</p></div>
	</div >
	<div id="footer">
		<div class="f_logo"></div>
		<div class="f_info"><p class="tel1">8(495)663-52-39</p>
			<p class="tel1">8(925)663-52-39</p><div><a href="#call" onclick="yaCounter22659319.reachGoal('zakzv'); return true;"><img style="margin:0;" src="images/call_but.png"></a>
			</div></a></div>
		<div class="f_text"><p>Продажа слингов с доставка по всей России</p></div>
		<div class="end_f"><p>Город Москва, м. Пушкинская, улица Петровка, дом.23, стр.10. ИП Юшина Е.А.     ОГРН: 311169030100176      ИНН: 165807987650</p></div>
	</div >

<div id="call" class="modalDialog">
      <div id="call-form-hide" ><a href="#close" title="Закрыть" class="close">X</a>
        <div id="form11" style="">
			<!--<p class="form1_t12">Хотите купить слинг,<br>но не знаете какой выбрать?</p>
			--><p class="form1_t22">Укажите ваше имя и телефон<br> и мы перезвоним вам в</br> течение 15 минут в рабочее время</p>
			<form method="POST" action="index.php" name="myform1" onsubmit="submit_func3();return stop_func3;yaCounter22659319.reachGoal('zakzvt'); return true;">
				
				<p><input type="text" name="name" placeholder="ваше имя" required="required"></p>
				
				<p><input type="text" name="telephone" placeholder="ваш телефон" required="required"></p>
				<input type="submit" name="send" value="" >
			</form>
		</div></div></div></div></div>



	
<script type="text/javascript">
			function getProduct(el) {
				var price = $(el).siblings('.price').html();
				var product = $(el).siblings('.color').children('p').html();
				$('body').append('<div id="prTemp" class="modalDialog"><div id="call-form-hide" ><a href="#close" title="Закрыть" class="close">X</a><div id="form11" style=""><p class="form1_t22">Укажите ваше имя и телефон<br> и мы перезвоним вам в</br> течение 15 минут в рабочее время</p><form method="POST" action="index.php" name="myform1" onsubmit="submit_func3();return stop_func3;"><input type="hidden" name="product" value="'+product+'" /><p><input type="text" name="name" placeholder="ваше имя" required="required"></p><p><input type="text" name="telephone" placeholder="ваш телефон" required="required"></p><input type="submit" name="send4" value="" ></form></div></div></div>');
				window.location.hash = 'prTemp';
				return false;
			}
			function addColor(el) {
				var d = $(el).val();
				$(el).parent('div').siblings('.cusel').remove();
				switch(d) {
					case '1':
					var color = ['Волшебные бабочки','Флора','Аметистовые бабочки','Дыхание лета'];
					break;
					
					case '2':
					var color = ['Сказки Австралии','Розовые фламинго','Воздушное путешествие','Бирюзовая ночь','Легенды Азии','Песня лета','Мелодия весны'];
					break;
					
					case '3':
					var color = ['Апельсин','Бисквит'];
					break;
				}
				var opts = '';
				for (var i=0;i<color.length;i++) {
					opts += '<option value="'+color[i]+'">'+color[i]+'</option>';
				}
				$(el).parent('div').after('<select id="'+color.length+'" value="color">'+opts+'</select>');
				cuSel(params);
			}
var d = new Date();
var monthA = 'января,февраля,марта,апреля,мая,июня,июля,августа,сентября,октября,ноября,декабря'.split(',');
var s = monthA[d.getMonth()];
var k = d.getDate() + 1;
document.getElementById('date').innerHTML="до "+k+" "+s;
</script>






<script src="js/jquery.countdown.js"></script>
		<script src="js/script.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22659319 = new Ya.Metrika({id:22659319,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22659319" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
