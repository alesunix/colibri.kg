<?php

# Данные о странице
$title = 'Экскурсии';
$keywords = 'Экскурсии, рыбалка, Джеты Огуз, Ущелье, Водопады';
$description = 'Авто экскурсии конные и пешие походы достопремечательности';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<div class="post">
<img src="/i/exkurs.png" alt="Экскурсии">
<hr>
По Экскурсиям мы предоставляем следующие услуги:<br><br>
• <b>Авто экскурсии:</b> <br>
- Ледовые озера с рыбалкой, коньен Сказка,<br>
- Водопады: "Слезы барса" и "Чаша Манаса"<br>
- Термальные горячие источники Жууку находящиеся в лесу<br>
- Восточный базар Каракол с посещением памятника Проживальского<br>
- Ущелье "Семь быков"<br>
- Соленое озеро<hr>
• <b>Конные походы:</b> <br>
- Различные конные походы<br>
- Прогулки на лошадях<br>
- Двух - трех дневные походы в лесную зону<hr>
• <b>Пешие походы:</b> <br>
- Многочисленные пешие походы по местным достопримечательностям и историческим местам
<br><br>
<style>
.index2 {
	display: flex;
	flex-wrap: wrap;
	margin: 13px;
	white-space: nowrap;
	text-align: center;
	color:#FF4500;
	face="Times New Roman";
    text-shadow: 0.3px 0.4px 0.3px black; /* Параметры тени */
}
.index2 img:nth-child(n) {
	order: 1;
}
.index2 p:nth-child(n) {
	order: 2;
}
.index2 p:nth-child(3n) {
	order: 3;
}
.index2 p {
	display: block;
	margin: 15px;
	width: 200px;
}
  .index2 img {-webkit-transition: all 0.4s ease;-moz-transition: all 0.4s ease;transition: all 0.4s ease;
display: block;
margin: 3px;
min-width: 90px;
width: 23%;
height: 100%;
white-space: nowrap;
padding: 3px;
background: #ffffff;
border: 1px solid #d0d0d0;
-moz-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
box-shadow: 0 0 20px rgba(0, 0, 0, .2);
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
}
.index2 img:hover {-moz-transform: scale(1.9);-webkit-transform: scale(1.9);-o-transform: scale(1.9);-ms-transform: scale(1.9);transform: scale(1.9);
background: #ffffff;
border: 1px solid #cccccc;
text-decoration: none;
text-shadow: none;
-moz-box-shadow: 1em 1em 1em -0.5em rgba(0,0,6,0.5);
-webkid-box-shadow: 1em 1em 1em -0.5em rgba(0,0,6,0.5);
box-shadow: 1em 1em 1em -0.5em rgba(0,0,6,0.5);
}
</style>

<div class="index2"> 
<img src="/i/Водопад Слёзы Барса.png" alt="Водопад Слёзы Барса"><p>Водопад Слёзы Барса</p>
<img src="/i/Стена Джеты Огуз.png" alt="Стена Джеты Огуз"><p>Стена Джеты Огуз</p>
<img src="/i/Урочище Сару.png" alt="Урочище Сару"><p>Урочище Сару</p>
<img src="/i/Ущелье Барскаун над водопадом Слёзы Барса.png" alt="Ущелье Барскаун"><p>Ущелье Барскаун</p>
</div>
<div class="index2"> 
<img src="/i/Солёное озеро.png" alt="Солёное озеро"><p>Солёное озеро</p>
<img src="/i/Скала Разбитое Сердце.png" alt="Скала Разбитое Сердце"><p>Скала Разбитое Сердце</p>
<img src="/i/Сказка.png" alt="Сказка"><p>Сказка</p>
<img src="/i/Святые места.png" alt="Святые места"><p>Святые места</p>
</div>
<div class="index2">
<img src="/i/Примулы Арабеля.png" alt="Примулы Арабеля"><p>Примулы Арабеля</p>
<img src="/i/Один из ледников Арабеля.png" alt="Один из ледников Арабеля"><p>Один из ледников Арабеля</p>
<img src="/i/Маки Арабеля.png" alt="Маки Арабеля"><p>Маки Арабеля</p>
<img src="/i/Залив Тамги ранним утром.png" alt="Залив Тамги ранним утром"><p>Залив Тамги ранним утром</p>
</div>
<center>
<img src="/i/Древние письмена на камне Тамгаташ.png" width=520" height=100" alt="Древние письмена на камне Тамгаташ"><p>Древние письмена на камне Тамгаташ</p>
</center>




</div>
EOF;
