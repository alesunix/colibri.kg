<?php

# Данные о странице
$title = 'Гостевой дом COLIBRI отдых на южном берегу озера Иссык-Куль';
$keywords = 'Отдых,озеро,купание,пляж,Иссык-Куль,Южный берег,Кыргызстан';
$description = 'Гостевой дом COLIBRI Отдых на Южном берегу озера Иссык-Куль Тамга 3х разовое питание для детей и взрослых Размещение в ЛЮКС номерах';
$template = 'info';
$page_blocks = 'reklam';

# Содержание страницы
$content = <<<EOF
<style>
   .blue  {
	color:#87CEEB;
	face="Times New Roman";
    text-shadow: 0.3px 0.4px 0.3px black, 0 0 1em; /* Параметры тени */
    padding: 10px;
	font-size: 18px;
   }
   .orange  {
	color:#FF4500;
	face="Times New Roman";
    text-shadow: 0.3px 0.4px 0.3px black; /* Параметры тени */
    padding: 10px;
	font-size: 15px;
   }
  </style>

<!-- Cлайдер ---------------------------------------------------------------------------------------------------------------->
<left>
<div id="dva">
<a href="#1"id="dvaF"><img src="/i/slide-1.png" alt="Гостевой дом COLIBRI"/><strong>Озеро Иссык-Куль (Южный берег)</strong></a>
<a href="/galary.html"><img src="/i/slide-2.png" alt="Гостевой дом COLIBRI"/><strong>Озеро Иссык-Куль (Южный берег)</strong></a>
<a href="/galary.html"><img src="/i/slide-3.png" alt="Гостевой дом COLIBRI"/><strong>Озеро Иссык-Куль (Южный берег)</strong></a>
<a href="/galary.html"><img src="/i/slide-4.png" alt="Гостевой дом COLIBRI"/><strong>Озеро Иссык-Куль (Южный берег)</strong></a>

  <div>
    <button type="button" value="0">1</button>
    <button type="button" value="1">2</button>
    <button type="button" value="2">3</button>
	<button type="button" value="3">4</button>
  </div>
</div>
</left>

<script>
window.requestAnimationFrame = (function () { // для поддержки requestAnimationFrame всеми браузерами
        return window.requestAnimationFrame ||
               function (callback) {
                   return window.setTimeout(callback, 1000 / 60);
               };
})();
// функция слайдера
function slider(f, img, button, V, Vo) {
  var iii = 0,
      start = null,
      clear = 0;
  function step(time) {
    if (start === null) start = time;
    var progress = time - start;
    if (progress > V) {
      start = null;
      for (var i=0; i<img.length; i++) {
        img[i].style.zIndex = "0";
        button[i].style.opacity = "1";
      }
      img[iii].style.zIndex = "1";
      iii = ((iii != (img.length - 1)) ? (iii + 1) : 0);
      img[iii].style.zIndex = "2";
      img[iii].style.opacity = "0";
      button[iii].style.opacity = ".4";
    } else if(img[iii].style.opacity != "") {
      img[iii].style.opacity = ((progress/Vo < 1) ? (progress/Vo) : 1);
    }
    if(clear != "0" && progress > Vo) {} else {requestAnimationFrame(step);}
  }
  requestAnimationFrame(step);
  f.onmouseenter = function() { if(clear == "0") clear = "1"; }  // при наведении на слайдер
  f.onmouseleave = function() { if(clear == "1") {clear = "0"; requestAnimationFrame(step);} }  // курсор убран со слайдера
  for (var j=0; j<button.length; j++) {  // при нажатии кнопок
    button[j].onclick = function() {
      clear = "2";
      for (var i=0; i<img.length; i++) {
        img[i].style.zIndex = "0";
      }
      img[this.value].style.zIndex = "2";
      img[this.value].style.opacity = "1";
      for (var k=0; k<button.length; k++) {
        button[k].style.opacity = ((button[k] == this) ? '.4' : '1');
      }
    }
  }
}
// вызов функции слайдера
 var f = document.getElementById('dva'),
    a = f.getElementsByTagName('a'),
    button = f.getElementsByTagName('div')[0].getElementsByTagName('button');
  slider(f, a, button, '5000', '1000');
</script>
<!-- Cлайдер ---------------------------------------------------------------------------------------------------------------->


<div class='well well-small'>
<div class="post">
<b>Гостевой дом Colibri</b> Расположен на южном побережье озера Иссык-Куль село Тамга, ул. Садовая 14 на территории военного санатория. <br>
Природа щедро одарила Иссык-Кульский регион Кыргызстана прекрасным незамерзающим горным озером, благоприятным климатом, золотыми песками пляжей, красивейшим горным ландшафтом, чистым ионизированным воздухом, обилием солнца.
<br><br>
К услугам отдыхающих 3х разовое питание для детей и взрослых.<br>
Размещение отдыхающих производится в ЛЮКС номерах со всеми удобствами. <br>
Также в течение всего отдыха Вы будете наслаждаться разнообразными, вкусными и полезными блюдами как национальной, так и европейской кухни.
</div></div>
<div class="post-detail">
<span class="post-info"><span>
Ваш отдых - наша работа<br>
Звоните мы всегда ждем Вас!
</span></span></div>
<h1> </h1>
			<section class="portfolio-container">
				<ul class="portfolio-items">
					<li class="img_item">
						<div class="caption14">
							<h3>Апартаменты</h3>
							<p>Для наших гостей имеются следующие виды отдыха и комфорта:</p>
							<a href="/galary.html" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/apartment.jpg" />
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Экскурсии</h3>
							<p>По Экскурсиям мы предоставляем следующие услуги:</p>
							<a href="/ecscurs.html" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/ekskursii2.jpg" />
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Номера и Цены</h3>
							<p>Прейскурант цен на проживание в Гостевом доме «Colibri»</p>
							<a href="/tarifs.html" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/ceny.jpg" />
					</li>
					<li class="img_item">
						<div class="caption14">
							<h3>Контакты</h3>
							<p>с.Тамга, ул. Садовая 14 Region-Tamga@mail.ru  (0555) 291 - 546 Наталья</p>
							<a href="/contact.html" class="pcv_button gray">Подробнее</a>
						</div>
						<img src="i/call_me.gif" />
					</li>
				</ul><!-- Конец .portfolio-items -->
			</section><!-- Конец .portfolio-container -->
			<div class="clear"></div>




<div class='well well-small'>
<style>
h1 {
font-size:18px;
font-weight:700;
font-family:Arial,sans-serif;
color:#666;
text-align:center;
text-transform:uppercase;
text-shadow:1px -1px 2px #fff;
}
   .blue  {
	color:#267ea9;
	face="Times New Roman";
    text-shadow: 0.3px 0.4px 0.3px black, 0 0 1em; /* Параметры тени */
    padding: 10px;
	font-size: 18px;
   }
   .orange  {
	color:#FF4500;
	face="Times New Roman";
    text-shadow: 0.3px 0.4px 0.3px #b3b3b3; /* Параметры тени */
    padding: 10px;
   }
  </style>
 <hr>
<div class="post">
<a href="/company.html"><h1><font style="color: #2b9fdf; text-shadow: 1px 1px 1px black;">Только у нас Вы запомните отдых с множеством эмоций!</font></h1></a>
• <tagname class="orange"><b>Особый подход к нашим посетителям.</b> <br></tagname>
Гостевой дом <b>«COLIBRI»</b> всегда рад нашим гостям. <br>
Благодаря приемлемым <a href="/tarifs.html">ценам</a> у нас возможен отдых как для состоятельных так и для среднего достатка людей.<br> 
Мы очень внимательны к просьбам и пожеланиям наших гостей.<br>
• <tagname class="orange"><b>Разнообразный досуг.</b></tagname><br>
Отдых на <b>Иссык-Куле</b> – это не только пляжные игры и купание в озере. <br>
У нас Вы можете поиграть в бильярд, посетить сауну или спеть в караоке.<br>
• <tagname class="orange"><b>Бесплатный Wi-Fi.</b></tagname><br>
Современное общество немыслимо без информационных технологий. <br>
Мы побеспокоились и об этом, по всей территории есть беспроводной доступ в интернет.</b><br>
<hr>
<a href="/ecscurs.html"><h1><font style="color: #2b9fdf; text-shadow: 1px 1px 1px black;">Экскурсии</font></h1></a>
Вы можете воспользоваться нашими дополнительными услугами:<br>
<font color=orange>&#10004;	</font> <tagname class="orange"><b>Авто экскурсии:</b></tagname> (Ледовые озера с рыбалкой, водопады, горячие источники, памятники)<br>
<font color=orange>&#10004;	</font> <tagname class="orange"><b>Конные походы:</b></tagname> (Прогулки на лошадях)<br>
<font color=orange>&#10004;	</font> <tagname class="orange"><b>Пешие походы:</b></tagname> (Пешие походы по местным достопримечательностям и историческим местам)<br>
<hr>
</div><!--/well --></div>




EOF;
			