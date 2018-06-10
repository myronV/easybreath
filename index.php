<?php
session_start();
$period_cookie = 25920000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>

<!DOCTYPE html>
<html class="html">
	<head>
		<script src="/js/museredirect.js" type="text/javascript"></script>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
		<meta name="description" content="Маска для снорклинга EasyBreath Tribord - купить маску для ныряния в Украине. Маска EasyBreath - смотрите и дышите под водой, как на суше!"/>
		<meta name="keywords" content="маска для снорклинга, easy breath, easybreath, маска easybreath, маска для плавания, маска easybreath tribord, easybreath tribord"/>
		<link rel="shortcut icon" href="/img/waterbreath-favicon.ico" />
		<title>Маска для снорклинга EasyBreath Tribord - купить маску для ныряния в Украине: цена со скидкой. Маска для плавания Water Breath Easy</title>
		<!--link media="only screen and (max-device-width: 370px)" rel="alternate" href="phone/index.html"/>
		<link media="only screen and (max-device-width: 960px)" rel="alternate" href="tablet/index.html"/-->
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/css/site_global.css"/>
		<link rel="stylesheet" type="text/css" href="/css/index.css" id="pagesheet"/>
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="/css/iefonts_index.css" />
		<![endif]-->
		<style>
			#u397 iframe {display:block; position:relative; height:413.187898089166px;}
		</style>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="/css/mphStyle.css"  >
<!--<div id="mobilephoneHead" style="background-color:#3b3b3b">-->
<!--	<div class="inCenter">-->
<!--		<div class="area">-->
<!--			<span><img src="/img/mphNumber1.png"></span>-->
<!--			<span><img src="/img/mphNumber2.png"></span>-->
<!--			<span><img src="/img/mphNumber3.png"></span>-->
<!--			<span><img src="/img/mphNumber4.png"></span>-->
<!--			<div class="workmode">РЕЖИМ РАБОТЫ:</div>-->
<!--			<div class="worktime">-->
<!--				<p class="weekdays">ПН-ПТ с 09<span>00</span> до 20<span>00</span></p>-->
<!--				<p class="weekends">СБ-ВС с 10<span>00</span> до 19<span>00</span></p>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
</div>
<div id="mobilephoneSpace"></div>		<div class="clearfix" id="page">
			<div class="position_content" id="page_position_content">
				<div class="clearfix colelem" id="pu432">
					<div class="browser_width grpelem" id="u432">
						<iframe scrolling="no" frameborder="no" width="100%" height="660" src="/vid.htm"></iframe>
					</div>
					<div class="browser_width grpelem" id="u264">
						<div class="clearfix" id="u264_align_to_page">
							<div class="clearfix colelem" id="pmain">
								<a class="anchor_item grpelem" id="main"></a>
								<div class="clearfix grpelem" id="u597">
									<div class="rounded-corners clip_frame grpelem" id="u565">
										<img class="block" id="u565_img" src="/img/2013-product.png"  alt="" width="93" height="54"/>
									</div>
									<img class="grpelem" id="u559-4" src="/img/u559-4.png" alt="Easy Breath" width="132" height="34"/>
									<img class="grpelem" id="u559-4" src="/img/u559-4.png" alt="Easy Breath" width="132" height="34"/>
									<div class="rounded-corners grpelem" id="u571"></div>
								</div>
							</div>
							<div class="H1 clearfix colelem" id="u98-4">
								<h1>УНИКАЛЬНАЯ ПОДВОДНАЯ МАСКА EASYBREATH</h1>
							</div>
							<div style="position: relative;top: 360px;left: -400px;">
								<div class="clearfix grpelem" id="u413">
									<div class="clearfix grpelem" id="u411-6">
										<p>Старая цена</p>
										<p>2062 грн.</p>
									</div>
									<div class="grpelem" id="u412" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9877,M12=-0.1564,M21=0.1564,M22=0.9877,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="-7"></div>
								</div>
								<div class="clearfix grpelem" id="u406">
									<div class="rounded-corners clearfix grpelem" id="u373">
										<div class="clearfix grpelem" id="u405-4">
											<p>1299 грн.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix colelem" id="u444">
								<div class="clearfix grpelem" id="u419">
									<a class="nonblock nontext anim_swing shadow rounded-corners grpelem buy_default" id="u420" href="#callback">Купить маску</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clip_frame grpelem" id="u267">
						<img class="block" id="u267_img" src="/img/tribord_easybreath_oia-1.png" alt="" width="399" height="551"/>
					</div>
					<div class="H2 clearfix grpelem" id="u99-6">
						<h2>ПОЛУЧИ МАКСИМУМ УДОВОЛЬСТВИЯ</h2>
						<h2>ОТ НЫРЯНИЯ</h2>
					</div>
					<div class="clearfix grpelem" id="u276">
						<div class="clearfix grpelem" id="u125">
							<div class="H3 clearfix grpelem" id="u123-4">
								<h3>Надоел дискомфорт в обычной маске, трубка в зубах и вкус соленой воды во рту? Выход есть!</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix colelem" id="pu1724">
					<div class="browser_width grpelem" id="u1724">
						<div class="clearfix" id="u1724_align_to_page">
							<div class="clearfix colelem" id="ppu1793">
								<div class="clearfix grpelem" id="pu1793">
									<div class="clearfix colelem" id="u1793">
										<img src="/img/kbad.png" >
									</div>
									<div class="clearfix colelem" id="u1794">
										<img src="/img/kbad.png" >
									</div>
								</div>
								<div class="clearfix grpelem" id="pu1749-4">
									<div class="clearfix colelem" id="u1749-4">
										<p>Вам надоело, что в обычной маске постоянно запотевает стекло?</p>
									</div>
									<div class="clearfix colelem" id="u1750-4">
										<p>Вас раздражает трубка в зубах?</p>
									</div>
								</div>
								<div class="clip_frame clearfix grpelem" id="u1781">
									<div id="u1781_clip">
										<img class="position_content" id="u1781_img" src="/img/1095473121542522accad06b982188fa22d8e0280e99_b.jpg"  alt="" width="301" height="169"/>
									</div>
								</div>
							</div>
							<div class="clearfix colelem" id="ppu1797">
								<div class="clearfix grpelem" id="pu1797">
									<div class="clearfix colelem" id="u1797">
										<img src="/img/kbad.png" >
									</div>
									<div class="clearfix colelem" id="u1800">
										<img src="/img/kbad.png">
									</div>
									<div class="clearfix colelem" id="u1804">
										<img src="/img/kbad.png">
									</div>
									<div class="clearfix colelem" id="u1807">
										<img src="/img/kbad.png">
									</div>
									<div class="clearfix colelem" id="u1810">
										<img src="/img/kbad.png">
									</div>
								</div>
								<div class="clearfix grpelem" id="pu1751-4">
									<div class="clearfix colelem" id="u1751-4">
										<p>Достало, когда вода протекает внутрь маски?</p>
									</div>
									<div class="clearfix colelem" id="u1752-4">
										<p>Постоянный вкус соленой воды во рту?</p>
									</div>
									<div class="clearfix colelem" id="u1755-4">
										<p>Постоянно переживаете, что в трубку попадет вода?</p>
									</div>
									<div class="clearfix colelem" id="u1756-4">
										<p>В обычной маске плохой обзор?</p>
									</div>
									<div class="clearfix colelem" id="u1757-4">
										<p>Раздражает, что нельзя дышать носом?</p>
									</div>
								</div>
								<div class="clearfix grpelem" id="pu1775">
									<div class="clip_frame colelem" id="u1775">
										<img class="block" id="/img/u1775_img" src="/img/foto_2.jpg" alt="" width="302" height="169"/>
									</div>
									<div class="clip_frame colelem" id="u1778">
										<img class="block" id="/img/u1778_img" src="/img/water inside.jpg" alt="" width="301" height="169"/>
									</div>
								</div>
							</div>
							<div class="clearfix colelem" id="u1827-5">
								<p>ВЫХОД ЕСТЬ. МАСКА <span id="u1827-2">EASYBREATH</span></p>
							</div>
						</div>
					</div>
					<div class="browser_width grpelem" id="u1726">
						<div class="clearfix" id="u1726_align_to_page">
							<div class="clearfix grpelem" id="u1727-4">
								<p>ОТДЫХ ДОЛЖЕН БЫТЬ В УДОВОЛЬСТВИЕ</p>
							</div>
						</div>
					</div>
					<div class="clearfix grpelem" id="u1824"></div>
				</div>
				<div class="clearfix colelem" id="pu87">
					<div class="browser_width grpelem" id="u87">
						<div class="clearfix" id="u87_align_to_page">
							<div class="clearfix colelem" id="ppu148-6">
								<div class="clearfix grpelem" id="pu148-6">
									<div class="clearfix colelem" id="u148-6">
										<p id="u148-2">ГЕРМЕТИЧНОСТЬ</p>
										<p id="u148-4">Система Dry Top полностью предотвращает попадание воды внутрь трубки</p>
									</div>
									<div class="clearfix colelem" id="u151-8">
										<p id="u151-2">ОТВОД ВОДЫ</p>
										<p id="u151-4">Клапан, расположенный в нижней</p>
										<p id="u151-6">части маски, позволяет выводить попавшую воду.</p>
									</div>
									<div class="clearfix colelem" id="u152-6">
										<p id="u152-2">2 РАЗМЕРА МАСКИ</p>
										<p id="u152-4">Есть 2 размера с подстройкой плотности посадки.</p>
									</div>
									<div class="clearfix colelem" id="u153-6">
										<p id="u153-2">ЛЕГКО ДЫШАТЬ</p>
										<p id="u153-4">Полнолицевая маска позволяет свободно дышать и ртом и носом.</p>
									</div>
								</div>
								<div class="clip_frame grpelem" id="u133">
									<img class="block" id="u133_img" src="/img/xfbllfae0am-min.jpg" alt="" width="337" height="620"/>
								</div>
								<div class="clearfix grpelem" id="pu154-8">
									<div class="clearfix colelem" id="u154-8">
										<p id="u154-2">НЕ ЗАПОТЕВАЕТ</p>
										<p id="u154-4">Эксклюзивные технологии вентиляции маски &#45; не</p>
										<p id="u154-6">запотевает ни при каких условиях</p>
									</div>
									<div class="clearfix colelem" id="u155-6">
										<p id="u155-2">ВИДИМОСТЬ</p>
										<p id="u155-4">Верх трубки оранжевого цвета виден лучше, чем верх классической трубки</p>
									</div>
									<div class="clearfix colelem" id="u156-6">
										<p id="u156-2">ЛЕГКО ОДЕВАТЬ</p>
										<p id="u156-4">Эластичный регулируемый текстильный ремешок для бережного отношения к волосам.</p>
									</div>
									<div class="clearfix colelem" id="u157-9">
										<p id="u157-2">УГОЛ ОБЗОРА 180°</p>
										<p id="u157-4">Безопасная небьющаяся</p>
										<p id="u157-6">линза из поликарбоната.</p>
										<p id="u157-7">&nbsp;</p>
									</div>
								</div>
							</div>
							<div class="clearfix colelem" id="u215-4">
								<p>ИМЕЕТСЯ КРЕПЛЕНИЕ ДЛЯ КАМЕРЫ GOPRO !</p>
							</div>
						</div>
					</div>
					<div class="browser_width grpelem" id="u126">
						<div class="clearfix" id="u126_align_to_page">
							<a class="anchor_item grpelem" id="option"></a>
							<div class="clearfix grpelem" id="u127-4">
								<p>ПОЧЕМУ МАСКА EASYBRETH ЛУЧШЕ ДРУГИХ</p>
							</div>
						</div>
					</div>
					<div class="clip_frame grpelem" id="u167">
						<img class="block" id="/img/u167_img" src="/img/icon1 (3).jpg" alt="" width="63" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u173">
						<img class="block" id="/img/u173_img" src="/img/icon1.jpg" alt="" width="63" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u179">
						<img class="block" id="/img/u179_img" src="/img/icon2 (1).jpg" alt="" width="62" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u185">
						<img class="block" id="/img/u185_img" src="/img/icon2 (2).jpg" alt="" width="62" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u191">
						<img class="block" id="/img/u191_img" src="/img/icon1 - _25d0_25ba_25d0_25be_25d0_25bf_25d0_25b8_25d1_258f.jpg" alt="" width="63" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u197">
						<img class="block" id="/img/u197_img" src="/img/icon1 (1).jpg" alt="" width="63" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u203">
						<img class="block" id="/img/u203_img" src="/img/icon1 (2).jpg" alt="" width="63" height="62"/>
					</div>
					<div class="clip_frame grpelem" id="u209">
						<img class="block" id="/img/u209_img" src="/img/icon2 (3).jpg" alt="" width="62" height="62"/>
					</div>
				</div>
				<div class="clearfix colelem" id="pu220">
					<div class="browser_width grpelem" id="u220">
						<div class="clearfix" id="u220_align_to_page">
							<div class="grpelem" id="u222">
								<iframe width="640" height="409" src="https://www.youtube.com/embed/Tavh98ASK4Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="browser_width grpelem" id="u277">
						<div class="clearfix" id="u277_align_to_page">
							<div class="clearfix grpelem" id="u278-4">
								<p>ВИДЕО&#45;ОБЗОР</p>
							</div>
						</div>
					</div>
					<a class="anchor_item grpelem" id="video"></a>
				</div>
				<div class="browser_width colelem" id="u279">
					<div class="clearfix" id="u279_align_to_page">
						<div class="clearfix colelem" id="u280-4">
							<p>ТЕХНИЧЕСКАЯ ИНФОРМАЦИЯ</p>
						</div>
						<div class="clearfix colelem" id="pu300-4">
							<div class="clearfix grpelem" id="u300-4">
								<p>Состав</p>
							</div>
							<div class="clearfix grpelem" id="u319-4">
								<p>Правила ухода</p>
							</div>
						</div>
						<div class="clearfix colelem" id="pu281-18">
							<div class="clearfix grpelem" id="u281-18">
								<p>
									<span id="u281">​</span>
									<span class="actAsInlineDiv normal_text" id="u284">
										<span class="actAsDiv rounded-corners excludeFromNormalFlow" id="u283"></span>
									</span>
									&nbsp;рама – 100.0% полипропилен;
								</p>
								<p>
									<span id="u281-5">​</span>
									<span class="actAsInlineDiv normal_text" id="u285">
										<span class="actAsDiv rounded-corners excludeFromNormalFlow" id="u286"></span>
									</span>
									&nbsp;уплотнитель шва: 100.0% силикон;
								</p>
								<p>
									<span id="u281-9">​</span>
									<span class="actAsInlineDiv normal_text" id="u287">
										<span class="actAsDiv rounded-corners excludeFromNormalFlow" id="u288"></span>
									</span>
									&nbsp;линза – 100.0% поликарбонат &#45; акрилонитрил&#45;бутадиен&#45;стирол
								</p>
								<p>
									<span id="u281-13">​</span>
									<span class="actAsInlineDiv normal_text" id="u289">
										<span class="actAsDiv rounded-corners excludeFromNormalFlow" id="u290"></span>
									</span>
									&nbsp;трубка/ разъем клапана – 100.0% поликарбонат &#45; акрилонитрил&#45;бутадиен&#45;стирол.
								</p>
							</div>
							<div class="clearfix grpelem" id="u291-4">
								<p>Рекомендуем мыть маску вручную с использованием средства для мытья посуды.&nbsp; Особенно тщательно промывайте внутреннюю часть маски.&nbsp; Трубку необходимо тщательно прочищать от песка.</p>
							</div>
						</div>
						<div class="clearfix colelem" id="pu309-4">
							<div class="clearfix grpelem" id="u309-4">
								<p>Правила хранения</p>
							</div>
							<div class="clearfix grpelem" id="u320-4">
								<p>Ограничение на использование</p>
							</div>
						</div>
						<div class="clearfix colelem" id="pu310-4">
							<div class="clearfix grpelem" id="u310-4">
								<p>Хранить в сухом темном месте</p>
							</div>
							<div class="clearfix grpelem" id="u321-4">
								<p>Не подходит для глубоководного плавания, интенсивных погружений</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="browser_width colelem" id="u2791">
					<div class="clearfix" id="u2791_align_to_page">
						<div class="clearfix colelem" id="u2791-1">
							<p>ВЫБРАТЬ ПОДХОДЯЩИЙ ЦВЕТ</p>
						</div>
						<div style="clear:both"></div>
						<hr>
						<div style="text-align:center;margin:25px 0 10px;font-size:34px;">МАСКИ EASYBREATH ДЛЯ ВЗРОСЛЫХ</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/blackmask.jpg" >
						</div>
							<div class="tovblocktext">
								<h1>Easybreath Чёрная</h1>
								<p class="tovsize">Размер: <span>L / XL</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">2062 грн.</div>
								<div class="tovblockprice tovprice">1299 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="buy_href" href="#callback" data-type="1">Заказать</a></div>
							</div>
							<div style="clear:both"></div>
						</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/bluemask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Синяя</h1>
								<p class="tovsize">Размер: <span>L / XL</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">2062 грн.</div>
								<div class="tovblockprice tovprice">1299 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="buy_href" href="#callback" data-type="2">Заказать</a></div>
							</div>
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/aquamask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Бирюзовая</h1>
								<p class="tovsize">Размер: <span class="none">L / XL</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">2062 грн.</div>
								<div class="tovblockprice tovprice">1299 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="anone">Нет в наличии</a></div>
							</div>
						</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/pinkmask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Розовая</h1>
								<p class="tovsize">Размер: <span class="none">L / XL</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">2062 грн.</div>
								<div class="tovblockprice tovprice">1299 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="anone">Нет в наличии</a></div>
							</div>
						</div>
						<div style="clear:both"></div>
						<hr>
						<div style="text-align:center;margin:25px 0 10px;font-size:34px;">МАСКИ EASYBREATH ДЛЯ ДЕТЕЙ</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/blackmask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Чёрная</h1>
								<p class="tovsize">Размер: <span>S / M</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">1904 грн.</div>
								<div class="tovblockprice tovprice">1199 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="buy_href" href="#callback" data-type="3">Заказать</a></div>
							</div>
							<div style="clear:both"></div>
						</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/bluemask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Синяя</h1>
								<p class="tovsize">Размер: <span>S / M</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">1904 грн.</div>
								<div class="tovblockprice tovprice">1199 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="buy_href" href="#callback" data-type="4">Заказать</a></div>
							</div>
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/aquamask.jpg" >
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Бирюзовая</h1>
								<p class="tovsize">Размер: <span class="none">S / M</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">1904 грн.</div>
								<div class="tovblockprice tovprice">1199 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="anone">Нет в наличии</a></div>
							</div>
						</div>
						<div class="tovblock">
							<div class="tovblockimg">
								<img src="/img/pinkmask.jpg">
							</div>
							<div class="tovblocktext">
								<h1>Easybreath Розовая</h1>
								<p class="tovsize">Размер: <span class="none">S / M</span></p>
								<p>Модель с креплением для экшн камер</p>
								<div class="tovblockprice tovoldprice">1904 грн.</div>
								<div class="tovblockprice tovprice">1199 грн.</div>
								<div style="clear:both"></div>
								<div style="text-align:center"><a class="anone">Нет в наличии</a></div>
							</div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				
				<div class="clearfix colelem" id="pu322">
					<div class="browser_width grpelem" id="u322">
						<div class="clearfix" id="u322_align_to_page">
							<div class="clip_frame grpelem" id="u325">
								<img class="block" id="u325_img" src="/img/pasted image 478x295.jpg" alt="" width="478" height="295"/>
							</div>
							<div class="clearfix grpelem" id="u331-8">
								<p>1. Замерьте расстояние от начала подбородка до переносицы между глаз</p>
								<p>2. Если данное расстояние 10&#45;12 см, то размер S/M</p>
								<p>3. Если данное расстояние больше 12 см, то размер L/XL</p>
							</div>
						</div>
					</div>
					<div class="browser_width grpelem" id="u323">
						<div class="clearfix" id="u323_align_to_page">
							<div class="clearfix grpelem" id="u324-4">
								<p>КАК ВЫБРАТЬ РАЗМЕР МАСКИ</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix colelem" id="pu341">
					<div class="museBGSize browser_width grpelem" id="u341"></div>
					<div class="rgba-background browser_width grpelem" id="u348">
						<!-- column -->
						<div class="clearfix" id="u348_align_to_page">
							<div class="clearfix colelem" id="u349-6">
								<!-- content -->
								<p>УСПЕЙТЕ ЗАКАЗАТЬ МАСКУ EASYBREATH</p>
								<p>ДО НАЧАЛА СЕЗОНА</p>
							</div>
							<div class="rgba-background rounded-corners clearfix colelem" id="u368">
								<div class="clearfix grpelem" id="u413">
									<div class="clearfix grpelem" id="u411-6">
										<p>Старая цена</p>
										<p>2062 грн.</p>
									</div>
									<div class="grpelem" id="u412" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9877,M12=-0.1564,M21=0.1564,M22=0.9877,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="-7"></div>
								</div>
								<div class="clearfix grpelem" id="u406">
									<div class="rounded-corners clearfix grpelem" id="u373">
										<div class="clearfix grpelem" id="u405-4">
											<p>1299 грн.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix colelem" id="u415-4">
								<p>Пусть ваш отпуск будет незабываемым!</p>
							</div>
						</div>
					</div>
					<div class="clip_frame grpelem" id="u359">
						<img class="block" id="u359_img" src="/img/tribord_easybreath_oia-1273x377.png"  alt="" width="273" height="377"/>
					</div>
						<div class="ThumbGroup clearfix grpelem" id="u377">
							<div class="popup_anchor">
								<div class="Thumb popup_element clearfix" id="u378">
									<div class="clearfix grpelem" id="u379">
										<div class="shadow rounded-corners clearfix grpelem" id="u381">
											<div class="clearfix grpelem" id="u380-4">
												<a class="buy_default nonblock anim_swing shadow rounded-corners grpelem" href="#callback">ЗАКАЗАТЬ СЕЙЧАС</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<a class="anchor_item grpelem" id="order"></a>
				</div>
				<div class="clearfix colelem" id="pu435">
					<!-- group -->
					<div class="browser_width grpelem" id="u435">
						<!-- simple frame -->
					</div>
					<div class="browser_width grpelem" id="u436">
						<!-- group -->
						<div class="clearfix" id="u436_align_to_page">
							<div class="clearfix grpelem" id="u437-4">
								<!-- content -->
								<p>ОНИ ОСТАЛИСЬ ДОВОЛЬНЫ</p>
							</div>
						</div>
					</div>
					<div class="SlideShowWidget clearfix grpelem" id="slideshowu1067">
						<!-- none box -->
						<div class="popup_anchor" id="u1069popup">
							<div class="SlideShowContentPanel clearfix" id="u1069">
								<!-- stack box -->
								<div class="SSSlide clip_frame clearfix grpelem" id="u1072">
									<!-- image -->
									<div id="u1072_clip">
										<img class="ImageInclude position_content" id="u1072_img" data-src="/img/3.jpg" src="/img/blank.gif"  alt="" data-width="565" data-height="360"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1250">
									<!-- image -->
									<div id="u1250_clip">
										<img class="ImageInclude position_content" id="u1250_img" data-src="/img/98decf6e6886873d4b4701c392d5538024f7.jpg" src="/img/blank.gif" alt="" data-width="589" data-height="442"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1259">
									<!-- image -->
									<div id="u1259_clip">
										<img class="ImageInclude position_content" id="u1259_img" data-src="/img/453a622fbc84ad7c02d87f41ee7cf3ef9786.jpg" src="/img/blank.gif" alt="" data-width="589" data-height="442"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1268">
									<!-- image -->
									<div id="u1268_clip">
										<img class="ImageInclude position_content" id="u1268_img" data-src="/img/456_25d1_2580_25d0_25be_25d1_2588.jpg" src="/img/blank.gif" alt="" data-width="565" data-height="360"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1277">
									<!-- image -->
									<div id="u1277_clip">
										<img class="ImageInclude position_content" id="u1277_img" data-src="/img/7370c78caa7e4b1ef69703d73ffaeededbcb.jpg" src="/img/blank.gif" alt="" data-width="600" data-height="337"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1286">
									<!-- image -->
									<div id="u1286_clip">
										<img class="ImageInclude position_content" id="u1286_img" data-src="/img/11375369_1476047379364909_326368349_n.jpg" src="/img/blank.gif" alt="" data-width="558" data-height="558"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1295">
									<!-- image -->
									<img class="block ImageInclude" id="u1295_img" data-src="/img/15803534_1208614729228934_4288377385943826432_n.jpg" src="/img/blank.gif" alt="" data-width="480" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1304">
									<!-- image -->
									<img class="block ImageInclude" id="u1304_img" data-src="/img/16229471_1766994226963517_3625679716175839232_n.jpg" src="/img/blank.gif" alt="" data-width="480" data-height="426"/>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1313">
									<!-- image -->
									<img class="block ImageInclude" id="u1313_img" data-src="/img/31770844314_1d7b1e2de3_b.jpg" src="/img/blank.gif" alt="" data-width="480" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1322">
									<!-- image -->
									<div id="u1322_clip">
										<img class="ImageInclude position_content" id="u1322_img" data-src="/img/a4a95d542e9a7a7d82fbe23ef5e7235aec5b.jpg" src="/img/blank.gif" alt="" data-width="592" data-height="442"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1331">
									<!-- image -->
									<div id="u1331_clip">
										<img class="ImageInclude position_content" id="u1331_img" data-src="/img/b4d14832f628eb3a81b39da82d6d121b3ddf.jpg" src="/img/blank.gif" alt="" data-width="558" data-height="558"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1340">
									<!-- image -->
									<img class="block ImageInclude" id="u1340_img" data-src="/img/cwsiubpvqaev2a4.jpg"  src="/img/blank.gif" alt="" data-width="488" data-height="359"/>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1349">
									<!-- image -->
									<img class="block ImageInclude" id="u1349_img" data-src="/img/d65438504573528d2348cf488f7562e0.jpg" src="/img/blank.gif" alt="" data-width="480" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1358">
									<!-- image -->
									<img class="block ImageInclude" id="u1358_img" data-src="/img/easybreath-subea-by-decathlon-2.jpg"  src="/img/blank.gif" alt="" data-width="539" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1367">
									<!-- image -->
									<img class="block ImageInclude" id="u1367_img" data-src="/img/ilot-casy_03.jpg" src="/img/blank.gif" alt="" data-width="540" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1376">
									<!-- image -->
									<div id="u1376_clip">
										<img class="ImageInclude position_content" id="u1376_img" data-src="/img/jeff-easybreath-surface.jpg" src="/img/blank.gif" alt="" data-width="640" data-height="360"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1385">
									<!-- image -->
									<img class="block ImageInclude" id="u1385_img" data-src="/img/masque-easybreath-decathlon_17.jpg" src="/img/blank.gif" alt="" data-width="540" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1394">
									<!-- image -->
									<div id="u1394_clip">
										<img class="ImageInclude position_content" id="u1394_img" data-src="/img/maxresdefault (1).jpg" src="/img/blank.gif" alt="" data-width="640" data-height="360"/>
									</div>
								</div>
								<div class="SSSlide invi clip_frame grpelem" id="u1403">
									<!-- image -->
									<img class="block ImageInclude" id="u1403_img" data-src="/img/selfieunderwaterinbluelagooncroatia.jpg" src="/img/blank.gif" alt="" data-width="540" data-height="360"/>
								</div>
								<div class="SSSlide invi clip_frame clearfix grpelem" id="u1412">
									<!-- image -->
									<div id="u1412_clip">
										<img class="ImageInclude position_content" id="u1412_img" data-src="/img/tribord-easybreath-snorkel-mask-3.jpg" src="/img/blank.gif" alt="" data-width="480" data-height="480"/>
									</div>
								</div>
							</div>
						</div>
						<div class="popup_anchor" id="u1068-6popup">
							<div class="SSPreviousButton clearfix" id="u1068-6">
								<p>
									<span id="u1068">​</span>
									<span>
										<span class="actAsInlineDiv normal_text" id="u1464" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0">
											<span class="actAsDiv clip_frame excludeFromNormalFlow" id="u1461">
												<img id="u1461_img" src="/img/strelka.png" alt="" width="49" height="41"/>
											</span>
										</span>
									</span>
									<span></span>
								</p>
							</div>
						</div>
						<div class="popup_anchor" id="u1099-6popup">
							<div class="SSNextButton clearfix" id="u1099-6">
								<p>
									<span id="u1099">​</span>
									<span>
										<span class="actAsInlineDiv normal_text" id="u1460">
											<span class="actAsDiv clip_frame excludeFromNormalFlow" id="u1457">
												<img id="u1457_img" src="/img/strelka.png" alt="" width="49" height="41"/>
											</span>
										</span>
									</span>
									<span></span>
								</p>
							</div>
						</div>
					</div>
					<a class="anchor_item grpelem" id="galary"></a>
				</div>
				<div class="verticalspacer"></div>
				<!--div class="browser_width colelem" id="u604">
					<div class="clearfix" id="u604_align_to_page">
						<div class="clearfix colelem" id="u1466-4">
							<p></p>
						</div>
						<a class="nonblock nontext clearfix colelem" id="u1467-4" href="policy.html" target="_blank">
							<p>Политика конфиденциальности</p>
						</a>
					</div>
				</div-->
			</div>
		</div>

		<!-- Корзина: Начало -->
		<form class="submitOrder" action="zakaz.php" method="post"
		      onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;"
		      id="form2">
		<div class="dm-overlay" id="callback">
			<div class="dm-table">
				<div class="dm-cell">
					<div class="dm-modal">
						<div class="dm-title">Оформление заказа<a href="#close" class="close"></a></div>
						<div class="dm-product">
							<div class="row">
								<div class="col-sm-4 col-xs-12 dmtimg"><div id="imgShow"></div></div>
								<div class="col-sm-5 col-xs-12 dmtitle">Подводная маска<br/>EASYBREATH<hr><div id="nameShow"></div></div>
								<div class="col-sm-3 col-xs-12 dmtitle">Цена<br/><br/><b><span class="redText"><span id="priceShow"></span></span></b></div>
							</div>
							<div style="clear:both"></div>
						</div>
						<form action="javascript:void(0)" name="form1" id="form1">
							<div class="dm-form">
								<div class="dm-rowinform">
									<div class="row">
										<div class="col-sm-4 col-xs-12 dmtext">
											<div>Ваше имя: <sup class="zred">*</sup></div>
										</div>
										<div class="col-sm-8 col-xs-12">
											<input type="text" name="name" placeholder="Ваше имя" id="inputName1"/>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
								<div class="dm-rowinform">
									<div class="row">
										<div class="col-sm-4 col-xs-12 dmtext">
											<div>Номер телефона: <sup class="zred">*</sup></div>
										</div>
										<div class="col-sm-8 col-xs-12">
											<input type="tel" name="phone" placeholder="Ваш телефон" id="inputPhone1"/>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
								<div class="dm-rowinform">
									<div class="row">
										<div class="col-sm-4 col-xs-12 dmtext">
											<div>Цвет: <sup class="zred">*</sup></div>
										</div>
										<div class="col-sm-8 col-xs-12">
											<select name="chosen" id="chosen" required>
												<option value="1">Черный</option>
												<option value="2">Синий</option>
												<option value="3" disabled>Бирюзовый</option>
												<option value="4" disabled>Розовый</option>
											</select>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
								<div class="dm-rowinform">
									<div class="row">
										<div class="col-sm-4 col-xs-12 dmtext">
											<div>Размер: <sup class="zred">*</sup></div>
										</div>
										<div class="col-sm-8 col-xs-12">
											<select name="sizer" id="sizer">
												<option value="для детей">для детей - S/M</option>
												<option value="для взрослых">для взрослых - L/XL</option>
											</select>
										</div>
									</div>
									<div style="clear:both"></div>
								</div>
								<input type="hidden" name="form" value="form1"/>
								<input type="hidden" name="size" value="4"/>
								<input type="hidden" name="product" value="Подводная маска EasyBreath - Черная"/>
								<input type="hidden" name="price1" value="1299"/>
								<input type="hidden" name="art1" value="easybreath-black"/>
								<input type="hidden" name="product" value="Подводная маска EasyBreath - Синяя"/>
								<input type="hidden" name="price2" value="1299"/>
								<input type="hidden" name="art2" value="easybreath-blue"/>
								<input type="hidden" name="product" value="Подводная маска EasyBreath - Черная,Детская"/>
								<input type="hidden" name="price3" value="1199"/>
								<input type="hidden" name="art3" value="easybreath-blue-kid"/>
								<input type="hidden" name="product" value="Подводная маска EasyBreath - Синяя,Детская"/>
								<input type="hidden" name="price4" value="1199"/>
								<input type="hidden" name="art4" value="easybreath-blue-kid"/>								<br/>
								<div class="dm-submit">
									<input type="submit" id="greenbutton" value="Оформить заказ"/>
								</div>
								<br/>
							</div>
							<div id="error"></div>
						</form>
						<div class="dm-gar">
							<div class="row">
								<div class="col-sm-4 col-xs-12 dmdownimg"><img src="/img/original.png">Оригинальная продукция</div>
								<div class="col-sm-4 col-xs-12 dmdownimg"><img src="/img/garant.png">Гарантия<br>качества</div>
								<div class="col-sm-4 col-xs-12 dmdownimg"><img src="/img/postman.png">Доставка по всей Украине</div>
							</div>
							<div style="clear:both"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="display:none;">
			<input type="hidden" id="price1" value="1299">
			<input type="hidden" id="price2" value="1299">
			<input type="hidden" id="price3" value="1199">
			<input type="hidden" id="price4" value="1199">
		</div>
		</form>
		<!-- Корзина: Конец -->
		<link href="/css/korzin-style.css" rel="stylesheet">
		
		<script type="text/javascript">
			window.jQuery || document.write('\x3Cscript src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
		</script>
		<script type="text/javascript" src="/js/korzin.js"></script>
		
		<script src="/js/museutils.js" type="text/javascript"></script>
		<script src="/js/jquery.tobrowserwidth.js" type="text/javascript"></script>
		<script src="/js/jquery.musepolyfill.bgsize.js" type="text/javascript"></script>
		<script src="/js/jquery.scrolleffects.js" type="text/javascript"></script>
		<script src="/js/webpro.js" type="text/javascript"></script>
		<script src="/js/musewpslideshow.js"  type="text/javascript"></script>
		<script src="/js/jquery.museoverlay.js" type="text/javascript"></script>
		<script src="/js/touchswipe.js" type="text/javascript"></script>
		<script src="/js/jquery.watch.js" type="text/javascript"></script>
		<!-- Other scripts -->
		<script type="text/javascript">
			$(document).ready(function() { try {
			Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
			$('.browser_width').toBrowserWidth();/* browser width elements */
			$('#u341').registerBackgroundPositionScrollEffect([{"in":[-Infinity,3463.43],"speed":[0,0]},{"in":[3463.43,Infinity],"speed":[0,0]}]);/* scroll effect */
			Muse.Utils.initWidget('#pamphletu374', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:1000,hideAllContentsFirst:false,shuffle:false,enableSwipe:false}); });/* #pamphletu374 */
			Muse.Utils.initWidget('#slideshowu1067', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu1067 */
			Muse.Utils.fullPage('#page');/* 100% height page */
			Muse.Utils.showWidgetsWhenReady();/* body */
			Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
			} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
		</script>
		
		<!-- Маска телефона -->
		<script src="/js/jquery.inputmask.js" ></script>
		<script src="/js/jquery.inputmask.custom.extensions.js" ></script>
		<script>
			$(document).ready(function(){
				$("#inputPhone1").inputmask("+38 (999) 999 - 99 - 99");
			});
		</script>
		<!-- Ajax -->
		<
		<script>
			function sendForm1(){
				let data = $("#form1").serialize();
				document.form1.submit.disabled = true;
				$.ajax({
					type: "POST",
					url: "validator.php"/*tpa=http://easybreath.hitprodazh.biz.ua/source/validator.php*/,
					data: data,
					cache: false,
					success: function(data){
						$("#error").html(data);
						document.form1.submit.disabled = false;
					}
				});
			}
		</script>
<!--		<div id="rc-connect" class="rc-reset rc-online">-->
<!--	<div id="rc-overlay" class="rc-reset"></div>-->
<!--	<div id="rc-popup" class="rc-reset">-->
<!--		<div id="rc-popup-close" class="rc-can-press rc-reset"></div>-->
<!--		<div id="rc-popup-text" class="rc-reset">-->
<!--			<span class="rc-txt rc-reset">Перезвоним за 30 секунд. Оставьте свой номер, и мы оперативно свяжемся с вами.</span>-->
<!--		</div>-->
<!--		<div id="rc-popup-form" class="rc-parent-form rc-reset">-->
<!--			<div id="rc-popup-form-field" class="rc-reset">-->
<!--				<div id="rc-popup-form-input-warning" class="rc-reset">-->
<!--					<div id="rc-popup-form-input-warning-header" class="rc-reset">-->
<!--						<span class="rc-txt rc-reset">Внимание!</span>-->
<!--					</div>-->
<!--					<div id="rc-popup-form-input-warning-mid" class="rc-reset">-->
<!--						<span class="rc-txt rc-reset">Проверьте правильность набранного номера</span>-->
<!--					</div>-->
<!--					<div id="rc-popup-form-input-warning-bottom" class="rc-reset"></div>-->
<!--				</div>-->
<!--				<div class="_27">-->
<!--					<input type="tel" id="rc-popup-form-input" class="rc-input-trigger rc-reset rc-poletext" placeholder="+38 Ваш телефон" />-->
<!--					<input type="hidden" id="userCity" name="city" value=""/>-->
<!--					<div class="flag-dropdown">-->
<!--						<div class="selected-flag" title="Ukraine (Україна): +38">-->
<!--							<div class="flag ua">-->
<!--								<div class="arrow"></div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<ul class="country-list hide">-->
<!--							<li class="country active" data-dial-code="380" data-country-code="ua">-->
<!--								<div class="flag ua"></div>-->
<!--								<span class="country-name">Ukraine (Україна)</span>-->
<!--								<span class="dial-code">+38</span>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="rc-call-progress rc-reset">-->
<!--					<div class="rc-progress-drag rc-reset"></div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div id="rc-popup-form-button" class="rc-trigger rc-can-press rc-reset" style="background-image: url(data:image/svg+xml;base64,CgkJPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIiB2ZXJzaW9uPSIxLjEiPgoJCQk8cGF0aCBmaWxsPSIjZmZmIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Mi43MzQyNzksIDQxLjQ5OTQ0OSkgcm90YXRlKDEyMC4wMDAwMDApIHRyYW5zbGF0ZSgtNDIuNzM0Mjc5LCAtNDEuNDk5NDQ5KSIgZD0iTTI3LjkgNTAuMkMyNi42IDUwLjkgMjYgNTAuOSAyNSA0OS43IDI0LjcgNDkuNCAyNC44IDQ5LjEgMjUuMSA0OC45IDI4IDQ3LjMgMjkuOCA0Ni4yIDMyLjMgNDQuOCAzMi41IDQ0LjYgMzIuOCA0NC41IDMzLjEgNDQuNSAzMy4zIDQ0LjQgMzMuNiA0NC42IDMzLjcgNDQuNyAzNC4xIDQ1LjYgMzMuNiA0Ni45IDMyLjcgNDcuNCAzMS45IDQ3LjkgMzAuOCA0OC41IDMwLjIgNDguOCAyOS42IDQ5LjIgMjguNyA0OS44IDI3LjkgNTAuMlpNNTcuNSA1MC4yQzU4LjggNTAuOSA1OS40IDUwLjkgNjAuNCA0OS43IDYwLjcgNDkuNCA2MC43IDQ5LjEgNjAuMyA0OC45IDU3LjQgNDcuMyA1NS42IDQ2LjIgNTMuMiA0NC44IDUyLjkgNDQuNiA1Mi42IDQ0LjUgNTIuMyA0NC41IDUyLjIgNDQuNCA1MS44IDQ0LjYgNTEuOCA0NC43IDUxLjQgNDUuNiA1MS45IDQ2LjkgNTIuNyA0Ny40IDUzLjYgNDcuOSA1NC42IDQ4LjUgNTUuMiA0OC44IDU1LjkgNDkuMiA1Ni44IDQ5LjggNTcuNSA1MC4yWk02MC45IDQ3LjlDNTkuMiA0Ni45IDU0LjkgNDQuNCA1Mi45IDQzLjMgNTIuNyA0My4xIDUyLjQgNDIuOCA1Mi40IDQyLjUgNTIuMSA0MC43IDUwLjkgMzkuMyA0OSAzOS4zIDQ2LjkgMzkuMyA0NC44IDM5LjIgNDIuNyAzOS4yIDQwLjcgMzkuMiAzOC42IDM5LjMgMzYuNSAzOS4zIDM0LjYgMzkuMyAzMy40IDQwLjcgMzMuMSA0Mi41IDMzLjEgNDIuOCAzMi44IDQzLjEgMzIuNiA0My4zIDMwLjYgNDQuNCAyNy4xIDQ2LjQgMjQuNiA0Ny44IDI0LjMgNDggMjMuNyA0Ny44IDIzLjQgNDcgMjMuMiA0Ni40IDIzLjEgNDUuOCAyMyA0NS4yIDIyLjMgNDEuNyAyMy42IDM4IDI2LjggMzYuNCAyOC43IDM1LjQgMzAuNyAzNC42IDMyLjcgMzMuOSAzNS45IDMyLjYgMzkuMyAzMi4zIDQyLjcgMzIuNCA0Ni4yIDMyLjMgNDkuNSAzMi42IDUyLjggMzMuOSA1NC44IDM0LjYgNTYuOCAzNS40IDU4LjcgMzYuNCA2MS45IDM4IDYzLjIgNDEuNyA2Mi41IDQ1LjIgNjIuNCA0NS44IDYxLjkgNDYuOSA2MS43IDQ3LjUgNjEuNiA0Ny44IDYxLjIgNDggNjAuOSA0Ny45WiI+PC9wYXRoPgoJCTwvc3ZnPgoJ);"></div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div id="rc-phone" class="rc-inactive rc-reset rc-dark-back-color rc-bottom-right" style="bottom: 1%; left: auto; top: auto; right: 1%; position: fixed;">-->
<!--		<div id="rc-phone-highlight" class="rc-reset"></div>-->
<!--		<div id="rc-phone-back" class="rc-colorify rc-reset" style="border: 3px solid rgb(25, 139, 190); background-image: url(data:image/svg+xml;base64,CgkJPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIiB2ZXJzaW9uPSIxLjEiPgoJCQk8cGF0aCBmaWxsPSIjZmZmIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Mi43MzQyNzksIDQxLjQ5OTQ0OSkgcm90YXRlKDEyMC4wMDAwMDApIHRyYW5zbGF0ZSgtNDIuNzM0Mjc5LCAtNDEuNDk5NDQ5KSIgZD0iTTI3LjkgNTAuMkMyNi42IDUwLjkgMjYgNTAuOSAyNSA0OS43IDI0LjcgNDkuNCAyNC44IDQ5LjEgMjUuMSA0OC45IDI4IDQ3LjMgMjkuOCA0Ni4yIDMyLjMgNDQuOCAzMi41IDQ0LjYgMzIuOCA0NC41IDMzLjEgNDQuNSAzMy4zIDQ0LjQgMzMuNiA0NC42IDMzLjcgNDQuNyAzNC4xIDQ1LjYgMzMuNiA0Ni45IDMyLjcgNDcuNCAzMS45IDQ3LjkgMzAuOCA0OC41IDMwLjIgNDguOCAyOS42IDQ5LjIgMjguNyA0OS44IDI3LjkgNTAuMlpNNTcuNSA1MC4yQzU4LjggNTAuOSA1OS40IDUwLjkgNjAuNCA0OS43IDYwLjcgNDkuNCA2MC43IDQ5LjEgNjAuMyA0OC45IDU3LjQgNDcuMyA1NS42IDQ2LjIgNTMuMiA0NC44IDUyLjkgNDQuNiA1Mi42IDQ0LjUgNTIuMyA0NC41IDUyLjIgNDQuNCA1MS44IDQ0LjYgNTEuOCA0NC43IDUxLjQgNDUuNiA1MS45IDQ2LjkgNTIuNyA0Ny40IDUzLjYgNDcuOSA1NC42IDQ4LjUgNTUuMiA0OC44IDU1LjkgNDkuMiA1Ni44IDQ5LjggNTcuNSA1MC4yWk02MC45IDQ3LjlDNTkuMiA0Ni45IDU0LjkgNDQuNCA1Mi45IDQzLjMgNTIuNyA0My4xIDUyLjQgNDIuOCA1Mi40IDQyLjUgNTIuMSA0MC43IDUwLjkgMzkuMyA0OSAzOS4zIDQ2LjkgMzkuMyA0NC44IDM5LjIgNDIuNyAzOS4yIDQwLjcgMzkuMiAzOC42IDM5LjMgMzYuNSAzOS4zIDM0LjYgMzkuMyAzMy40IDQwLjcgMzMuMSA0Mi41IDMzLjEgNDIuOCAzMi44IDQzLjEgMzIuNiA0My4zIDMwLjYgNDQuNCAyNy4xIDQ2LjQgMjQuNiA0Ny44IDI0LjMgNDggMjMuNyA0Ny44IDIzLjQgNDcgMjMuMiA0Ni40IDIzLjEgNDUuOCAyMyA0NS4yIDIyLjMgNDEuNyAyMy42IDM4IDI2LjggMzYuNCAyOC43IDM1LjQgMzAuNyAzNC42IDMyLjcgMzMuOSAzNS45IDMyLjYgMzkuMyAzMi4zIDQyLjcgMzIuNCA0Ni4yIDMyLjMgNDkuNSAzMi42IDUyLjggMzMuOSA1NC44IDM0LjYgNTYuOCAzNS40IDU4LjcgMzYuNCA2MS45IDM4IDYzLjIgNDEuNyA2Mi41IDQ1LjIgNjIuNCA0NS44IDYxLjkgNDYuOSA2MS43IDQ3LjUgNjEuNiA0Ny44IDYxLjIgNDggNjAuOSA0Ny45WiI+PC9wYXRoPgoJCTwvc3ZnPgoJ); background-color: rgba(8, 89, 126, 0.901961);"></div>-->
<!--		<div id="rc-phone-dial" class="rc-reset">-->
<!--			<div id="rc-phone-dial-snake" class="rc-reset">-->
<!--				<div id="rc-phone-dial-snake-curtain" class="rc-reset">-->
<!--					<div id="rc-phone-dial-half-circle" class="rc-reset">-->
<!--						<div id="rc-phone-dial-circle" class="rc-reset" style="border-color: rgb(8, 89, 126);"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div id="rc-phone-dial-snake-curtain2" class="rc-reset">-->
<!--					<div id="rc-phone-dial-half-circle2" class="rc-reset">-->
<!--						<div id="rc-phone-dial-circle2" class="rc-reset" style="border-color: rgb(8, 89, 126);"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div id="rc-phone-dial-close" class="rc-can-press rc-reset"></div>-->
<!--			<div id="rc-phone-dial-cnt" class="rc-reset" style="background-color: rgba(25, 139, 190, 0.901961);">-->
<!--				<div id="rc-phone-dial-ok" class="rc-reset">-->
<!--					<div id="rc-phone-dial-ok-curtain" class="rc-reset"></div>-->
<!--				</div>-->
<!--				<div id="rc-phone-dial-timer" class="rc-reset">-->
<!--					<span class="rc-txt rc-reset">00:30.00</span>-->
<!--				</div>-->
<!--				<div id="rc-phone-dial-descr" class="rc-reset">-->
<!--					<span class="rc-txt rc-reset" style="color: rgb(255, 255, 255);">Подождите...</span>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div id="rc-move-background" class="rc-reset"></div>-->
<!--		<div id="rc-phone-form" class="rc-reset" style="right: 7px; background-color: rgba(25, 139, 190, 0.921569);">-->
<!--			<div id="rc-phone-form-flash" class="rc-reset rc-flash-move">-->
<!--				<div id="rc-phone-form-flash-el" class="rc-reset" style=""></div>-->
<!--			</div>-->
<!--			<div id="rc-phone-form-close" class="rc-can-press rc-reset"></div>-->
<!--			<div id="rc-phone-form-wrap-curtain" class="rc-parent-form rc-reset">-->
<!--				<div id="rc-phone-form-wrap" class="rc-parent-form rc-reset">-->
<!--					<div id="rc-recall" class="rc-no-select rc-reset">-->
<!--						<span class="rc-txt rc-reset" style="color: rgb(255, 255, 255); text-shadow: rgb(25, 139, 190) 0px 1px 0px;">Перезвоним за<br/>30 секунд!</span>-->
<!--					</div>-->
<!--					<div id="rc-phone-field" class="rc-reset">-->
<!--						<div id="rc-phone-input-warning" class="rc-reset">-->
<!--							<div id="rc-phone-input-warning-header" class="rc-reset">-->
<!--								<span class="rc-txt rc-reset">Внимание!</span>-->
<!--							</div>-->
<!--							<div id="rc-phone-input-warning-mid" class="rc-reset">-->
<!--								<span class="rc-txt rc-reset">Проверьте правильность набранного номера</span>-->
<!--							</div>-->
<!--							<div id="rc-phone-input-warning-bottom" class="rc-reset"></div>-->
<!--						</div>-->
<!--						<div class="_27">-->
<!--							<input type="tel" id="rc-phone-input" class="rc-input-trigger rc-reset" placeholder="+38 Ваш телефон" />-->
<!--							<input type="hidden" id="userCity" name="city" value=""/>-->
<!--							<div class="flag-dropdown">-->
<!--								<div class="selected-flag" title="Ukraine (Україна): +38">-->
<!--									<div class="flag ua">-->
<!--										<div class="arrow"></div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div id="rc-phone-button" class="rc-trigger rc-no-select rc-can-press rc-reset" style="border-color: rgb(6, 71, 101); background-color: rgb(8, 89, 126);">-->
<!--						<div id="rc-phone-button-icon" class="rc-reset" style="background-image: url(data:image/svg+xml;base64,CgkJPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIiB2ZXJzaW9uPSIxLjEiPgoJCQk8cGF0aCBmaWxsPSIjZmZmIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Mi43MzQyNzksIDQxLjQ5OTQ0OSkgcm90YXRlKDEyMC4wMDAwMDApIHRyYW5zbGF0ZSgtNDIuNzM0Mjc5LCAtNDEuNDk5NDQ5KSIgZD0iTTI3LjkgNTAuMkMyNi42IDUwLjkgMjYgNTAuOSAyNSA0OS43IDI0LjcgNDkuNCAyNC44IDQ5LjEgMjUuMSA0OC45IDI4IDQ3LjMgMjkuOCA0Ni4yIDMyLjMgNDQuOCAzMi41IDQ0LjYgMzIuOCA0NC41IDMzLjEgNDQuNSAzMy4zIDQ0LjQgMzMuNiA0NC42IDMzLjcgNDQuNyAzNC4xIDQ1LjYgMzMuNiA0Ni45IDMyLjcgNDcuNCAzMS45IDQ3LjkgMzAuOCA0OC41IDMwLjIgNDguOCAyOS42IDQ5LjIgMjguNyA0OS44IDI3LjkgNTAuMlpNNTcuNSA1MC4yQzU4LjggNTAuOSA1OS40IDUwLjkgNjAuNCA0OS43IDYwLjcgNDkuNCA2MC43IDQ5LjEgNjAuMyA0OC45IDU3LjQgNDcuMyA1NS42IDQ2LjIgNTMuMiA0NC44IDUyLjkgNDQuNiA1Mi42IDQ0LjUgNTIuMyA0NC41IDUyLjIgNDQuNCA1MS44IDQ0LjYgNTEuOCA0NC43IDUxLjQgNDUuNiA1MS45IDQ2LjkgNTIuNyA0Ny40IDUzLjYgNDcuOSA1NC42IDQ4LjUgNTUuMiA0OC44IDU1LjkgNDkuMiA1Ni44IDQ5LjggNTcuNSA1MC4yWk02MC45IDQ3LjlDNTkuMiA0Ni45IDU0LjkgNDQuNCA1Mi45IDQzLjMgNTIuNyA0My4xIDUyLjQgNDIuOCA1Mi40IDQyLjUgNTIuMSA0MC43IDUwLjkgMzkuMyA0OSAzOS4zIDQ2LjkgMzkuMyA0NC44IDM5LjIgNDIuNyAzOS4yIDQwLjcgMzkuMiAzOC42IDM5LjMgMzYuNSAzOS4zIDM0LjYgMzkuMyAzMy40IDQwLjcgMzMuMSA0Mi41IDMzLjEgNDIuOCAzMi44IDQzLjEgMzIuNiA0My4zIDMwLjYgNDQuNCAyNy4xIDQ2LjQgMjQuNiA0Ny44IDI0LjMgNDggMjMuNyA0Ny44IDIzLjQgNDcgMjMuMiA0Ni40IDIzLjEgNDUuOCAyMyA0NS4yIDIyLjMgNDEuNyAyMy42IDM4IDI2LjggMzYuNCAyOC43IDM1LjQgMzAuNyAzNC42IDMyLjcgMzMuOSAzNS45IDMyLjYgMzkuMyAzMi4zIDQyLjcgMzIuNCA0Ni4yIDMyLjMgNDkuNSAzMi42IDUyLjggMzMuOSA1NC44IDM0LjYgNTYuOCAzNS40IDU4LjcgMzYuNCA2MS45IDM4IDYzLjIgNDEuNyA2Mi41IDQ1LjIgNjIuNCA0NS44IDYxLjkgNDYuOSA2MS43IDQ3LjUgNjEuNiA0Ny44IDYxLjIgNDggNjAuOSA0Ny45WiI+PC9wYXRoPgoJCTwvc3ZnPgoJ);"></div>-->
<!--						<span class="rc-txt rc-reset" style="color: rgb(255, 255, 255); text-shadow: rgb(6, 71, 101) 0px 1px 0px;">Заказать звонок</span>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
	</div>
</div>

<!--<link type="text/css" rel="stylesheet" href="/css/phone_style.css"/>-->
<!--<link type="text/css" rel="stylesheet" href="/css/widget_style.css"/>-->
<!--<script type="text/javascript" src="/js/jsphone.js"></script>-->
	</body>
</html>