<?
 header('Content-type: text/html; charset=UTF-8');
	require('geo/geo.php');
    $geo = new Geo(); // запускаем класс
    $data = $geo->get_value(); 
    $city = $geo->get_value('city', true);
	function isCity($currCity) {
	$sel=$_REQUEST['mod']=='' ? 0 :  (int)$_REQUEST['mod'];
	if($sel == 1) { return true; }
	else {return false;}
		//if($currCity == "Казань" || $currCity == "Тольятти") {
		//	return true;
		//} else {
		//	return false;
		//}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Турники Sports-7.Ru | Главная страница</title>
		<meta property="og:type" content="article"/>
		<meta property="og:title" content="Продажа турников"/>
		<meta property="og:description" content="ТУРНИК + БРУСЬЯ + ПРЕСС со скидкой"/>
		<meta property="og:url" content="http://sports-7.ru"/>
		<meta property="og:image" content="images/vk.jpg"/>
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="css/animations.css" />

		<link rel="shortcut icon" href="images/favicon.png" type="image/png">
		<link rel="image_src" href="images/vk.jpg">
		<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/script_site.js"></script>
		<script src="js/dscountdown.js"></script>
		<script src="feedback/js/feedback.js"></script>
		
    <script src="feedback/js/jquery.arcticmodal.js"></script>
    <script src="feedback/js/jquery.jgrowl.js"></script>
<?if(!isCity($city)) {
	echo '
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on("click", ".do_order, .order_item", function(){
		$("#small-modal").arcticmodal({
				afterClose: function(data, el) {
				$("#dop_modal").arcticmodal();
				}
			});
		return false;
		});
		
		$(document).on("click", ".make_mod", function(){
			$("#small-modal").arcticmodal({
				afterClose: function(data, el) {
				$("#dop_modal").arcticmodal();
				}
			});
		});
		
		$(document).on("click", ".order_call, .ask_us, .order_phone_call", function(){
			$("#call_dop").arcticmodal();
			return false;
		});
	});
    </script>'; 
} else {
	echo '
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on("click", ".order_call, .ask_us, .order_phone_call, .do_order, .order_item", function(){
			$("#call_dop").arcticmodal();
			return false;
		});
	});
    </script>'; 
}
?>
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.jgrowl.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
	</head>

	<body>
		<div class="fader">
			<div class="faderCont">
				<a href="javascript://" class="close_btn"></a>
				
			</div>
		</div>
		<script>
		$(document).ready(function () {
			$('.timer').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black',
					titleHours: "ЧАСОВ",
					titleMinutes: "МИНУТ",
					titleSeconds: "СЕКУНД"
				});
				$('.bxslider').bxSlider(
			  {
				pager: false,
				mode: 'fade'
			  });
		});
		</script>
			<div id="tab1">
				<header>
					<a href="/" class="hlogo fadeIn"></a>
					<ul>
						<li class="row1">Бесплатная<br />консультация</li>
						<li class="row2">Оплата после <br />получения товара</li>
						<li class="row3">
						<?if(isCity($city)) 
							echo "Бесплатная доставка <br />по Тольятти"; 
						else 
							echo "Система скидок"; ?>
						</li>
						<li class="row4">+7-927-<strong>894-60-09</strong></li>
					</ul>
				</header>
				<div class="header_bottom">
					<div class="head_wrap">
						<nav>
							<ul>
								<li><a href="#tab2">О НАС</a></li>
								<li><a href="#tab3">МОДЕЛИ</a></li>
								<li><a href="#tab6">ПРЕИМУЩЕСТВА</a></li>
								<li><a href="#tab7">ДО И ПОСЛЕ</a></li>
								<li><a href="#tab11">ОТЗЫВЫ О НАС</a></li>
							</ul>
							<a href="#" class="order_call modal_btn">ЗАКАЗАТЬ<br />ЗВОНОК</a>
						</nav>
						<div class="turnik_item expandUp">
							<img src="images/3v1.jpg" class="img_left" alt="3v1" />
							<div class="timer">
								
							</div>
							<div class="price_item">
								<div class="price_leftPos">
									<span class="turnik">ТУРНИК</span><div class="plus"></div><span class="brus">БРУСЬЯ</span><div class="plus"></div><span class="press">ПРЕСС</span>
								</div>
								<div class="price_figure"></div>
								<div class="price_text">
									<div class="price_val">
										<span class="old_price"><s>3990 руб.</s></span>
										<span class="current_price">2990 руб.</span>
									</div>
									<div class="descr">
										СКИДКА ТОЛЬКО<br />
										ПОСЛЕ ОСТАВЛЕННОЙ<br />
										ЗАЯВКИ
									</div>
								</div>
							</div>
							<div class="right_panel">
								<p>Заказать турник<br />
								<strong>со скидкой</strong><br />
								в один клик</p>
								<form action="" method="get" name="form-2">
									<input type="hidden" name="name" value=" " />
								  	<input type="phone" value="+7" maxlength="11" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder = "+7" name="tell"/>
									<input type="submit" class="feedback make_mod" name="send" value="ЗАКАЗАТЬ"/>
								</form>
							</div>
						</div>
						
					</div>
					<div class="garanties">
							<ul>
								<li class="row1">Популярность</li>
								<li class="row2">Надежность</li>
								<li class="row3">Глупо не купить</li>
							</ul>
						</div>
				</div>
			</div>
			<div id="tab2">
				<div class="wrapper">
					<div class="left_image"><img src="images/turnik_girl.jpg" alt="girl" /></div>
					<div class="right_cont">
						<h1>О НАС</h1>
						<p>SPORTS-7 исполняет ваши желания! Хотите нравиться окружающим?<br />
					Нравиться самому себе, чувствовать в себе силу?</p>
						<div class="advice1">
							Совет №1. Если вы хотите всем нравиться,то вам следует<br />
						выполнять упражнения для роста на турнике. Вы подтягиваетесь,<br />
						потом резко спускаетесь. висите на руках и туловище,<br />
						вертитесь по кругу. 
						</div>
					</div>
				</div>
			</div>
			<div id="tab3">
				<div class="wrapper">
					<h1>ХОЧЕШЬ СОБОЙ ГОРДИТЬСЯ?</h1>
					<p>Занимайся! У нас для тебя есть самые лучшие модели турников!</p>
				</div>
			</div>
			<div class="wrapper">
				<div class="corner"></div>
			</div>
			<div id="tab4">
				<div class="wrapper">
					<div class="image_cont">
						<div class="image_scene"><img src="img/1_01.jpg" width="369" height="263" alt="" /></div>
						<div class="image_switcher">
							<ul>
								<li><a href="img/1_01.jpg" rel="iLoad|Set1"><img src="img/min/1_01.jpg" alt="" /></a></li>
								<li><a href="img/1_02.jpg" rel="iLoad|Set1"><img src="img/min/1_02.jpg" alt="" /></a></li>
								<li><a href="img/1_03.jpg" rel="iLoad|Set1"><img src="img/min/1_03.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="item_cont">
						<h2>ТУРНИК + БРУСЬЯ + ПРЕСС</h2>
						<p>ХАРАКТЕРИСТИКИ</p>
						<div class="descr">
								Ширина перекладины — 110см<br />
	Вынос турника от стены — 50 см<br />
	Вынос брусьев от стены —  75 см<br />
	Ширина между центрами параллельных брусьев — 60 см<br />
	Диаметр перекладины — 27 мм<br />
	Выдерживает нагрузку — до 250 кг<br />
	Места хвата — неопреновые ручки<br />
	Окраска — порошковая (цвет: черный/белый)<br />
	Вес турника — 13 кг
						</div>
						<div class="price_pane">
							<div class="this_old_price"><s>3990 руб.</s></div>
							<div class="this_new_price">2990 руб.</div>
							<a href="#" class="do_order">ЗАКАЗАТЬ</a>
						</div>
					</div>
				</div>
			</div>
			
			<div id="tab5">
				<div class="wrapper">
					<div class="image_cont">
						<div class="image_scene"><img src="images/turnik_2_hvata.jpg"  width="360" height="184" alt="" /></div>
						<div class="image_switcher">
							<ul>
								<li><a href="img/2.jpg" rel="iLoad|Set2"><img src="img/min/2.jpg" alt="" /></a></li>
								<li><a href="img/2_01.jpg" rel="iLoad|Set2"><img src="img/min/2_01.jpg" alt="" /></a></li>
								<li><a href="img/2_02.jpg" rel="iLoad|Set2"><img src="img/min/2_02.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="item_cont">
						<h2>ТУРНИК на 2 хвата</h2>
						<p>ХАРАКТЕРИСТИКИ</p>
						<div class="descr">
							Ширина перекладины — 110см<br />
	Вынос турника от стены — 40 см<br />
	Диаметр перекладины — 27 мм<br />
	Выдерживает нагрузку — до 200 кг<br />
	Места хвата — неопреновые ручки<br />
	Окраска — порошковая (цвет: черный/белый)<br />
	Вес турника — 4 кг
						</div>
						<div class="price_pane">
							<div class="this_old_price"><s>3990 руб.</s></div>
							<div class="this_new_price">1990 руб.</div>
							<a href="#" class="do_order">ЗАКАЗАТЬ</a>
						</div>
					</div>
				</div>
			</div>
			<div id="tab6">
				<div class="wrapper">
					<h1>Почему вам нужен</h1>
					<p>Именно наш турник для занятий?</p>
					<ul class="first_line">
						<li class="row1"><span>КАЧЕСТВО</span></li>
						<li class="row2"><span>Быстрая доставка<br />
по всей России</span></li>
						<li class="row3"><span>Работаем напрямую<br />
от производителя</span></li>
					</ul>
					<ul class="first_line second_line">
						<li class="row4"><span>Гарантия возврата</span></li>
						<li class="row5"><span>ВАША САМООЦЕНКА<br />
ПОДНИМЕТСЯ В РАЗЫ</span></li>
					</ul>
				</div>
			</div>
<div class="gray_bg">
			<div id="tab7">
				<div class="wrapper">
					<h1>А КАКОЙ<br />
РЕЗУЛЬТАТ<br />
У ТЕБЯ?</h1>
				</div>
			</div>
			<div id="tab8">
				<div class="wrapper">
					<div class="left_shadow"></div>
					<div class="right_shadow"></div>
					<div class="turnik_item">
							<img src="images/3v1.jpg" class="img_left" alt="3v1" />
							<div class="timer">
								
							</div>
							<div class="price_item">
								<div class="price_leftPos">
									<span class="turnik">ТУРНИК</span><div class="plus"></div><span class="brus">БРУСЬЯ</span><div class="plus"></div><span class="press">ПРЕСС</span>
								</div>
								<div class="price_figure"></div>
								<div class="price_text">
									<div class="price_val">
										<span class="old_price"><s>3990 руб.</s></span>
										<span class="current_price">2990 руб.</span>
									</div>
									<div class="descr">
										СКИДКА ТОЛЬКО<br />
										ПОСЛЕ ОСТАВЛЕННОЙ<br />
										ЗАЯВКИ
									</div>
								</div>
							</div>
							<div class="right_panel">
								<p>Заказать турник<br />
								<strong>со скидкой</strong><br />
								в один клик</p>
								<form action="" method="get" name="form-2">
								  	<input type="phone" value="+7" maxlength="11" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder = "+7" name="tell"/>
									<input type="submit" class="feedback make_mod" name="send" value="ЗАКАЗАТЬ"/>
								</form>
							</div>
						</div>
				</div>
			</div>
</div>
			<div id="tab9">
				<div class="wrapper">
					<h1>СОПУТСТВУЮЩИЕ ТОВАРЫ</h1>
					<p>Для более быстрого развития мышц и упражнений</p>
					<ul class="items">
						<li class="row1">
							<div class="item_img"><img src="img/rychki.jpg" width="179" height="276" alt="" /></div>
							<div class="tov_descr">Неопреновые ручки</div>
							<div class="price_table">
								<span class="old_price_table"><s>699 РУБ.</s></span>
								цена: <span class="new_price_table">499 РУБ.</span>
							</div>
							<a href="#" class="order_item">Заказать товар</a>
						</li>
						<li class="row2">
							<div class="item_img"><img src="img/lyamki.jpg"  width="179" height="276" alt="" /></div>
							<div class="tov_descr">Лямки для турника </div>
							<div class="price_table">
								<span class="old_price_table"><s>499 РУБ.</s></span>
								цена: <span class="new_price_table">399 РУБ.</span>
							</div>
							<a href="#" class="order_item">Заказать товар</a>
						</li>
						<li class="row3">
							<div class="item_img"><img src="img/perchatki.jpg"  width="179" height="276" alt="" /></div>
							<div class="tov_descr">Перчатки для подтягиваний</div>
							<div class="price_table">
								<span class="old_price_table"><s>1 500 РУБ.</s></span>
								цена: <span class="new_price_table">1 399 РУБ.</span>
							</div>
							<a href="#" class="order_item">Заказать товар</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="tab10">
				<div class="wrapper">
					<h1>ГАРАНТИИ И ДОСТАВКА</h1>
					<p class="main_descr">Подробное объяснение наших предложений</p>
					<div class="left_dost_cont">
						<ul>
							<li>
								<h3><?if(isCity($city)) {echo "Бесплатная доставка по Тольятти";} else { echo "оплата при получении"; }?></h3>
								<span>
								<?if(isCity($city)) {echo "Мы производим Бесплатную доставку до вашего дома в Тольятти";} else { echo "Вы производите оплату заказу только после получения товара в транспортной компании или в отделении Почты России"; }?></span>
							</li>
							<li>
								<h3><?if(isCity($city)) {echo "ВСЕГДА В НАЛИЧИИ";} else { echo "Доставка в день заказа"; }?></h3>
								<span>Наши объемы производства позволяют <br /> 
всегда иметь в наличии все виды<br /> 
турников.</span>
							</li>
							<li>
								<h3>Гарантия 3 года</h3>
								<span>Мы производим турники уже более <br /> 
10 лет! Поэтому мы с уверенностью <br /> 
даем гарантию 2 года на все товары.</span>
							</li>
						</ul>
					</div>
					<?if(!isCity($city)) {echo '
					<div class="dost_rt">
					
						<p class="dost_rt_descr">Доставка производится<br />
по всей России компаниями:</p>
						<div class="image_holder">
							<ul>
								<li><img src="images/ico1.png" alt="" /></li>
								<li><img src="images/ico2.png" alt="" /></li>
								<li><img src="images/ico3.png" alt="" /></li>
								<li><img src="images/prus.png" width="57" height="53" alt="" /></li>
							</ul>
						</div>
						<p class="dost_rt_descr2">Оплатите заказ удобным для<br />
Вас способом:</p>
						<div class="image_holder image_holder2">
							<ul style="overflow: hidden">
								<li><img src="images/ico4.png" alt="" /></li>
								<li><img src="images/ico5.png" alt="" /></li>
								<li><img src="images/ico6.png" alt="" /></li>
							</ul>
						
						</div>
						
					</div>';} ?>
				</div>
			</div>

			<div class="gray_bg">
			<div id="tab11">
				<div class="wrapper">
					<h1>НАШИ ОТЗЫВЫ</h1>
					<p>Отзывы клиентов после покупки товара</p>
					
					
					<?if(!isCity($city)) {echo '
					<ul class="bxslider">
				  <li>
					<div class="u_ava"><img src="img/1.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Артём Ильичёв, г. Тольятти</div>
						<div class="u_message">
						Делал заказ на этом сайте. Отличный турник и хороший сервис. 
Купил турник, пресс, брусья. Занимаюсь уже на нем около 3 месяцев все отлично.
Спасибо большое.
						</div>
					</div>
				  </li>
				  <li>
					<div class="u_ava"><img src="img/2.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Юра Гайдуков, г. Воронеж</div>
						<div class="u_message">
						Оформил заказ, перезвонили через 1 минуту. Ответили на все мои вопросы.
Решил оплатить по предоплате тк так сделали мне бесплатную доставку.
Через 3 дня забрал посылку из транспортной компании. Турник классный. Спасибо, буду вас советовать.
						</div>
					</div>
				  </li>
				  <li>
					<div class="u_ava"><img src="img/3.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Ксенья Сысоева, г. Самара</div>
						<div class="u_message">
						Купила себе маленький турник, что бы по утрам тянуться, а то зарядку лень делать.
А тут повисела утром, спинку растянула и отлично.
По цене не дорого и качество отличное.
						</div>
					</div>
				  </li>
				</ul>
				';} else { 
				echo '
					<ul class="bxslider">
				  <li>
					<div class="u_ava"><img src="img/1.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Максим Ильичёв, г. Тольятти</div>
						<div class="u_message">
						Заказал турник, привезли уже через час , что меня очень удивило. Качество туника порадовала.
Отличная цена за такой турник. Спасибо. Буду вас рекомендовать своим друзьям
						</div>
					</div>
				  </li>
				  <li>
					<div class="u_ava"><img src="img/2.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Игорь Баграев, г. Тольятти</div>
						<div class="u_message">
						В интернете искал турник в моем городе. Нашел данный сайт. Понравилось то, что производство находится в Тольятти. Цена меня устроила . Бесплатно привезли до дома. Сейчас занимаюсь на нем. Все нравится.
						</div>
					</div>
				  </li>
				  <li>
					<div class="u_ava"><img src="img/3.png" alt="ava" /></div>
					<div class="u_right">
						<div class="u_name">Ксения Сысоева, г. Тольятти</div>
						<div class="u_message">
						Позвонил в данную компанию. Ответили на все мои вопросы. Привезли турник. Все хорошо.
						</div>
					</div>
				  </li>
				</ul>
				'; 
				}?>
				
				
				</div>
			</div>
						<div id="tab8">
				<div class="wrapper">
					<div class="left_shadow"></div>
					<div class="right_shadow"></div>
					<div class="turnik_item">
							<img src="images/3v1.jpg" class="img_left" alt="3v1" />
							<div class="timer">
								
							</div>
							<div class="price_item">
								<div class="price_leftPos">
									<span class="turnik">ТУРНИК</span><div class="plus"></div><span class="brus">БРУСЬЯ</span><div class="plus"></div><span class="press">ПРЕСС</span>
								</div>
								<div class="price_figure"></div>
								<div class="price_text">
									<div class="price_val">
										<span class="old_price"><s>3990 руб.</s></span>
										<span class="current_price">2990 руб.</span>
									</div>
									<div class="descr">
										СКИДКА ТОЛЬКО<br />
										ПОСЛЕ ОСТАВЛЕННОЙ<br />
										ЗАЯВКИ
									</div>
								</div>
							</div>
							<div class="right_panel">
								<p>Заказать турник<br />
								<strong>со скидкой</strong><br />
								в один клик</p>
								<form action="" method="get" name="form-2">
								  	<input type="phone" value="+7" maxlength="11" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder = "+7" name="tell"/>
									<input type="submit" class="feedback make_mod" name="send" value="ЗАКАЗАТЬ"/>
								</form>
							</div>
						</div>
				</div>
			</div>
			</div>
			<div id="tab12">
				<div class="wrapper">
					<h1>КАК МЫ РАБОТАЕМ?</h1>
					<p>Подробности о покупке</p>
					<div class="how_we_work"></div>
					<ul>
						<li class="how1">Вы оставляете<br />
заявку</li>
						<li class="how2"><?if(isCity($city)) {echo "Мы доставляем турник <br />вам в этот же день";} else { echo "Обсуждение по телефону<br />
и отправка турника<br />
с получением"; }?></li>
						<li class="how3"><?if(isCity($city)) {echo "Вы получаете турник<br /> и начинаете на нем <br />заниматься";} else { echo "Вы с удовольствием<br />
начинаете свои<br />
тренировки"; }?></li>
					</ul>
				</div>
			</div>
			<div id="tab13">
				<div class="wrapper">
					<h1>У ВАС ОСТАЛИСЬ ВОПРОСЫ?</h1>
					<a href="#" class="ask_us">ЗАДАЙТЕ ИХ НАМ!</a>
				</div>
			</div>
			<footer>
				<div class="wrapper">
					<a href="/" class="f_logo"></a>
					<div class="contact_phone">+7-927-<strong>894-60-09</strong></div>
					<a href="#" class="order_phone_call">ЗАКАЗАТЬ<br />ЗВОНОК</a>
					<div class="foot_rt">
						<ul>
							<a href="http://busines-up.ru"><li>Контекстная реклама  -</li></a>
							<a href="http://vk.com/rigez_studio"><li>Разработка сайта -</li></a>
						</ul>
					</div>
				</div>
			</footer>
			<div style="display:none;">
<!-- Формы в модальных окнах -->
    <div class="box-modal" id="small-modal">
        <div class="modal-close arcticmodal-close cl2"></div>
        <div class="modal-content-box">
            <p>Заказать турник<br />
								<strong>со скидкой</strong><br />
								в один клик</p>
								<form action="" method="get" name="form-2">
								    <?if(!isCity($city)) { echo '<input type="hidden" name="fromCity" value="Тольятти" />';} else { echo '<input type="hidden" name="fromCity" value="Россия" />'; }?>
									<input type="hidden" name="name" value=" " />
								  	<input type="phone" value="+7" maxlength="11" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder = "+7" name="tell"/>
									<input type="submit" class="feedback send_m" name="send" value="ЗАКАЗАТЬ"/>
								</form>
        </div>
    </div>
	
	    <div class="box-modal-full" id="dop_modal">
        <div class="modal-close arcticmodal-close dop-close"></div>
        <div class="modal-content-box">
            <p class="dop_p">Введите свои данные:</p>
								<form action="" method="get" name="form-3">
								<?if(!isCity($city)) { echo '<input type="hidden" name="fromCity" value="Тольятти" />';} else { echo '<input type="hidden" name="fromCity" value="Россия" />';  }?>
									<input type="text" name="fio" value="" placeholder="Ваше ФИО..." />
									<div class="form_text">Введите ваш адрес...</div>
									<input type="text" name="city" value="" placeholder="Введите ваш город..." />
									<input type="text" name="street" value="" placeholder="Введите вашу улицу..." />
									<input type="text" name="house" value="" placeholder="Введите ваш дом..." />
									<input type="text" name="flor" value="" placeholder="Введите вашу квартиру..." />
								  	<input type="text" value="" placeholder = "Введите ваш индекс..." name="index"/>
									<input type="submit" class="feedback" name="send" value="ОСТАВИТЬ ЗАЯВКУ"/>
								</form>
        </div>
    </div>
	
	<div class="box-modal" id="call_dop">
        <div class="modal-close arcticmodal-close cl2"></div>
        <div class="modal-content-box">
            <p>Оставьте свой <br />номер и наш менеджер свяжется с вами</p>
								<form action="" method="get" name="form-4" style="  margin-top: 44px;">
								<?if(!isCity($city)) { echo '<input type="hidden" name="fromCity" value="Тольятти" />';} else { echo '<input type="hidden" name="fromCity" value="Россия" />'; }?>
									<input type="hidden" name="name" value=" " />
								  	<input type="phone" value="+7" maxlength="11" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder = "+7" name="tell"/>
									<input type="submit" class="feedback send_m" name="send" value="ЗАКАЗАТЬ"/>
								</form>
        </div>
    </div>
<!-- // Формы в модальных окнах -->
</div>
<script src="js/iLoad.js"></script>
	</body>
</html>