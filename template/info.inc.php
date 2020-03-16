<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="google-site-verification" content="PdIj7rMTslr_jYcarTzw6HZqCHo4bh6E6YxBGpc7qQ0" />
<meta charset="<?=$config['encoding']?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$title?></title>
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">


		<meta charset="windows-1251" />
	    <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />	
		<link rel="stylesheet" type="text/css" href="css/style — Slider.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" href="css/button.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
		

		
		
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45405429-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45405429-5');
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://colibri.kg/",
  "name": "Гостевой дом COLIBRI отдых на южном берегу озера Иссык-Куль",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996555291546",
    "contactType": "Customer service"
  }
}
</script>
<script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
  VK.init({
    apiId: 6771532,
    onlyWidgets: true
  });
</script>
<!--header-->
<header class="navbar navbar-fixed-top">
<nav class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<!--<a class="brand" href="<?=$config['sitelink']?>"><?= $config['sitename']?></a>
<img src="<?=$config['sitelink']?>i/logo-small.png" alt="COLIBRI" class="pull-left" style="height:40px;">-->
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><b><span class="text-info">&nbsp;<?=$config['sitename']?></span></a></b>
<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>
<!--google переводчик
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'en,zh-TW', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
</ul>
</div>
</div>
</nav>
</header>
<!--/header-->
<!--content-->
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h2 class="muted"><?=$config['slogan']?></h2>
<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<h1><font style="color: #2b9fdf; text-shadow: 1px 1px 1px black;"><?=$title;?></font></h1>
<?=$content;?>
</article><!--/span-->
<!--/Установка новостей-->
<?php
?>
<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'donate', $donate )?>
<?=GetBlock($page_blocks, 'reklam', $reklam )?>
<!--/Коментарии-->


</aside><!--/span-->
</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<style>
.footer-bg {
background-image: url(/i/footer.png);
}
</style>
<footer class="container-fluid & footer-bg">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>
<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter" data-counter=""></div>

<p class="pull-right">
<small>
<br> с.Тамга, ул. Садовая 14<br>
• Телефоны в Кыргызстане:<br>
(0555) 291 - 546 Наталья<br>
(0558) 025 - 267 <a href="https://api.whatsapp.com/send?phone=996558025267">Whatsapp</a><br>
(0771) 150 - 550 <a href="https://api.whatsapp.com/send?phone=996771150550">Whatsapp Евгений</a>
<br>
• Телефоны в Казахстане:<br>
+7(707) 5858310 <a href="https://api.whatsapp.com/send?phone=77075858310">Whatsapp Александр</a>
<br> E-mail: Region-Tamga@mail.ru
<br>
<!-- WWW.NET.KG , code for http://colibri.kg -->
<script language="javascript" type="text/javascript">
 java="1.0";
 java1=""+"refer="+escape(document.referrer)+"&amp;page="+escape(window.location.href);
 document.cookie="astratop=1; path=/";
 java1+="&amp;c="+(document.cookie?"yes":"now");
</script>
<script language="javascript1.1" type="text/javascript">
 java="1.1";
 java1+="&amp;java="+(navigator.javaEnabled()?"yes":"now");
</script>
<script language="javascript1.2" type="text/javascript">
 java="1.2";
 java1+="&amp;razresh="+screen.width+'x'+screen.height+"&amp;cvet="+
 (((navigator.appName.substring(0,3)=="Mic"))?
 screen.colorDepth:screen.pixelDepth);
</script>
<script language="javascript1.3" type="text/javascript">java="1.3"</script>
<script language="javascript" type="text/javascript">
 java1+="&amp;jscript="+java+"&amp;rand="+Math.random();
 document.write("<a href='http://www.net.kg/stat.php?id=6052&amp;fromsite=6052' target='_blank'>"+
 "<img src='http://www.net.kg/img.php?id=6052&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='66' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=6052&amp;fromsite=6052' target='_blank'><img
  src="http://www.net.kg/img.php?id=6052" border='0' alt='WWW.NET.KG' width='88'
  height='66' /></a>
</noscript>
<!-- /WWW.NET.KG -->
<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet-->
<br>
<img src="http://100btc.ru/informer/BTC-USD_88x31.png" border="0" title="Bitcoin" width="88" height="31" alt="Курс Bitcoin к USD">

</p>
<style>
   .shadow  {
	face="Arial";
    text-shadow: 1px 1px 1px #fff; /* Параметры тени */
   }
</style>
<p>
</font> <tagname class="shadow">
<?=date('Y')?> © Гостевой дом COLIBRI<br>
Отдых на южном берегу Иссык-Куля.<br>
Использование материалов без письменного согласия и ссылки на источник запрещено.<br>
<a href="https://www.facebook.com/ColibriTamga/" target="_blank">Наша страница в facebook.com</a>
</font></b></dfn>
<br>
<sub><a href="https://www.facebook.com/alesunix" target="_blank">developed by alesunix</a></sub>
</small>
<br>
<!--Informer.kg code start-->
<!-- weather widget start -->
<a target="_blank" href="https://nochi.com/weather/tamga-137564">
<img src="https://w.bookcdn.com/weather/picture/3_137564_1_20_137AE9_250_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=589&anc_id=69503"  alt="booked.net"/></a>
<!-- weather widget end -->
<a href="http://www.for.kg/" target="_blank">
<img src="http://www.for.kg/informers/currency.php?type=1&color=4" width="120" height="90" border="0" alt="Курсы валют Кыргызстана по отношению к сому" />
</a>
<a href='http://aidan-express.kg' target='_blank'><img src="i/aidan-express.jpg" width="88" height="31" alt="ЭКСПРЕСС ДОСТАВКА ДОКУМЕНТЫ, ПОСЫЛКИ И ГРУЗЫ ПО КЫРГЫЗСТАНУ И ВСЕМУ МИРУ"></a>
<!-- Informer.kg code end-->
</p>
</footer>
<!--/footer -->

<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>

<!--tooltips--->
<script type="text/javascript">
$(window).resize(function() {
if ($(window).width() < 979) {
$('aside a').tooltip('destroy');
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip('destroy');
$('aside a').tooltip({
placement: "left"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "bottom"
});
}
});

if ($(window).width() < 979) {
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('aside a').tooltip({
placement: "left"
});
}
$('header a').tooltip({
placement: "bottom"
});
$('a,label,input').tooltip({});
</script>
<!--/tooltips--->

<!--Кнопка вверх--->
<a href="#" class="scrollup">Наверх</a>
<script type="text/javascript">
$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});
</script>
<!--/Кнопка вверх--->
<!-- Placed at the end of the document so the pages load faster -->


<!-- Scripts -->
<script src="js/wow.min.js"></script> 
<script src="js/wow.js"></script>
		
		

			
</body></html>