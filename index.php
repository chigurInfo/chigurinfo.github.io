<? 
		require("_inc/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title> Создание сайтов, создание Интернет магазинов </title>
  <meta name="description" content=" Создание сайтов, создание Интернет магазинов ">
  <meta name="keywords" content=" создание сайтов создание Интернет магазинов ">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <meta name="author" content="neoweb">
  <meta name="generator" content="AceHTML 6 Pro">

<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/style.css">  
<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/menu.css">  
</head>
<body><center>

<script type="text/javascript" src="wz_tooltip.js"></script>
<script type="text/javascript" src="tip_balloon.js"></script>


<? 
		$page = "home";
		require("_inc/header.php");
?>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<h1>Создание сайтов, создание Интернет магазинов.</h1>


<p class="high2">
Основные услуги.
</p>
<ul>
	<li><b class="plain">Создание сайтов, создание Интернет магазинов</b> "под ключ";
	<li>дизайн сайтов;
	<li><span class="dashed" onmouseover="Tip('Верстка, удовлетворяющая требованиям W3 консорциума (www.W3.org).', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">валидная верстка</span> web-страниц;
	<li>написание программ PHP+MySQL;
	<li>создание систем управления для сайтов;
</ul>
<?/*
<span class="temp">Создание корпоративных сайтов, сайтов визиток, информационных сайтов, создание Интернет магазинов "под ключ";</span>
*/?>


<p class="high2">
О сроках.</p>
Создание сайта занимает одну-две недели. Создание Интернет магазина - до двух недель.


<p class="high2">
Системы управления.</p>
Для каждого сайта или Интернет магазина создается система управления содержимым (СУС). 
Это <span class="dashed" onmouseover="Tip('CMS - (от англ.) Content Manager System.', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">CMS</span>, позволяющая владельцу сайта самостоятельно
управлять информационным наполнением. Таким образом исключены расходы на поддержку ресурса. Для пользования СУС не требуются специальные навыки.<br>
В системах управления применяется <noindex><a href="editor/" class="intext" rel="nofollow"
 onmouseover="Tip(' <img src=pic/small_editor.jpg border=0 width=241 height=150 ', WIDTH, 246, PADDING, 6, BGCOLOR, '#ffffff', BORDERCOLOR, '#AFAFAF')"
 onmouseout="UnTip()">визуальный редактор</a></noindex>.


<?/*
<p class="high2">
Визуальный редактор.</p>
В системах управления применяется визуальный 
<span class="dashed" onmouseover="Tip('Сокращение от What You See Is What You Get, англ. что видишь, то и получишь.', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">WYSIWYG</span>
редактор. <noindex><a href="editor/" class="intext" rel="nofollow">Подробнее...</a></noindex>
*/?>


<p class="high2">
Определение стоимости.</p>
Цена <b class="plain">создания сайта</b> или <b class="plain">Интернет магазина</b> на прямую связана с трудозатратами.
Поэтому, необходимо иметь представление о том, какую работу предстоит проделать. Узнать стоимость создания вашего сайта вы можете по телефону 
<script language="JavaScript" type="text/javascript">document.write('8 ' + ' (068) ' + '358-' + '92-' + '96')</script>
или написав на электронный адрес<script language="javascript" type="text/javascript">document.write(' <a ' + 'href="mailto:' + 'info' + '@' + 'neoweb.kiev.ua" ' + 'title' + '="info' + '@' + 'neoweb.kiev.ua" class="intext">' + 'info' + '@' + 'neoweb.kiev.ua</' + 'a>')</script>.


<p class="high2">
Технологии.</p>
Для создания сайтов и Интернет магазинов используются следующие технологии и языки программирования:
HTML, CSS, JavaScript, JSHttpRequest, PHP, MySQL.


<p class="high2">
Условия выполнения работы.</p>
Четкое соблюдение сроков.
Регистрация доменного имени на клиента. <?/* Внимание юзабилити. Соблюдение принципов типографики для веб-дизaйна. */?>
Оплата после проверки работы. Предоплата минимальная, в размере стоимости домена и хостинга.


<p class="high2">
Видимость сайта в сети.</p>
После завершения разработки, сайт регистрируется в поисковых машинах Google, Yandex, Bigmir, Ukr.net.<p>


<?
 /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
 /*
?>
<p style="text-align: right;">
<a href="#" name="helpful" ></a>

<b>Была ли эта информация вам полезна?</b><!--  / Нашли ли вы ответ на свой вопрос? -->
<div style="border-top: 1px solid #BDBDBD;"></div>
<div style="text-align: right;">

<?
		$useful = $_GET["useful"];		//		echo"\$useful = $useful";
		
		if(!isset($useful)){
?>

  <form name="useful" method="GET" action="/support/webmasters/bin/answer.py" style="padding:0;margin:0;">
  <input type="hidden" name="answer" value="35237" />
  <input type="hidden" name="show_useful" value="1" />
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />Да</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio"  name="useful" value="0" onclick="yesno(0)" />Нет</label>
  <br/><br/>
  </form>
  <script>
  function yesno(ans) {
  document.location='?answer=35237&topic=8475&useful='+ans+'&expand_useful=1&#helpful';
  }
  function submit_form(ans){
  if(ans == 'yes'){
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=1&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("comment").value) + "&#helpful";
  }
  else{
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=0&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("info_on_page").selectedIndex) + " : " + escape(document.getElementById("further_improve").value) + "&#helpful";
  }
  }
  </script>


<?
} else if($useful === "1"){
?>


<form name="useful" method="GET" action="/support/webmasters/bin/answer.py" style="padding:0;margin:0;">
  <input type="hidden" name="answer" value="35237" />
  <input type="hidden" name="show_useful" value="1" />
  <label onclick="yesno(1)"><input type="radio" checked name="useful" value="1" onclick="yesno(1)" />Да</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio"  name="useful" value="0" onclick="yesno(0)" />Нет</label>
  <br/><br/>
  Мы рады, что ответ оказался полезным. Чем он вам понравился?<br/>
  <input type="text" name="comment" id="comment" value="" maxlength="100" style="font-size: 10px; padding: 2px; width: 220px;" />
  <input type="button" value="Отправить отзыв" onClick="submit_form('yes');" />
  </form>
  <script>
  function yesno(ans) {
  document.location='?answer=35237&topic=8475&useful='+ans+'&expand_useful=1&#helpful';
  }
  function submit_form(ans){
  if(ans == 'yes'){
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=1&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("comment").value) + "&#helpful";
  }
  else{
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=0&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("info_on_page").selectedIndex) + " : " + escape(document.getElementById("further_improve").value) + "&#helpful";
  }
  }
  </script>


<?
} else if($useful === "0"){
?>


  <form name="useful" method="GET" action="/support/webmasters/bin/answer.py" style="padding:0;margin:0;">
  <input type="hidden" name="answer" value="35237" />
  <input type="hidden" name="show_useful" value="1" />
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />Да</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio" checked name="useful" value="0" onclick="yesno(0)" />Нет</label>
  <br/><br/>
  Объясните, пожалуйста, почему вы не считаете эту информацию полезной. Спасибо!
  <select id="info_on_page" name="info_on_page" onchange="showLayerDefault('further_improve_lang');showLayerDefault('further_improve');showLayerDefault('submit2');">
  <option>Выберите вариант</option>
  <option value="didnt answer my question">Я не получил(а) ответ на свой вопрос</option>
  <option value="isnt what i was looking for">Сведения недостаточно подробны</option>
  <option value="isnt clear">Нет ясности</option>
  <option value="other">Другое</option>
  </select><br>
  <span id="further_improve_lang" style="display: none">Что, на ваш взгляд, нужно исправить?</span>
  <input type="text" id="further_improve" style="margin-top: 10px;display:none; font-size: 10px; padding: 2px; width: 220px;" name="comment" value="" maxlength="100" />
  <input type="button" id="submit2" onClick="submit_form('no');" value="Отправить отзыв" style="display:none" />
  </form>
  <script>
  function yesno(ans) {
  document.location='?answer=35237&topic=8475&useful='+ans+'&expand_useful=1&#helpful';
  }
  function submit_form(ans){
  if(ans == 'yes'){
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=1&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("comment").value) + "&#helpful";
  }
  else{
  document.location = "/support/webmasters/bin/answer.py?answer=35237&useful=0&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("info_on_page").selectedIndex) + " : " + escape(document.getElementById("further_improve").value) + "&#helpful";
  }
  }
  </script>

<?
		}		//				} else if($useful === "0"){
?>

<script>
function showLayerDefault(layer){
 try {
 document.getElementById(layer).style.display = "";
 } catch(e){}
}
function hideLayer(layer){
 try {
 document.getElementById(layer).style.display = "none";
 } catch(e){}
}
</script>
 <!-- 
  <form name="useful" method="GET" action="/support/webmasters/bin/answer.py" style="padding:0;margin:0;">
  <input type="hidden" name="answer" value="homepage" />
  <input type="hidden" name="show_useful" value="1" />
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />Да</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio" name="useful" value="0" onclick="yesno(0)" />Нет</label>
  <br/><br/>
  Объясните, пожалуйста, почему вы не считаете эту информацию полезной. Спасибо!
  <select id="info_on_page" name="info_on_page" onchange="showLayerDefault('further_improve_lang');showLayerDefault('further_improve');showLayerDefault('submit2');">
  <option>Выберите вариант</option>
  <option value="didnt answer my question">Я не получил(а) ответ на свой вопрос</option>
  <option value="isnt what i was looking for">Сведения недостаточно подробны</option>
  <option value="isnt clear">Нет ясности</option>
  <option value="other">Другое</option>
  </select><br/>
  <span id="further_improve_lang" style="display: none">Что, на ваш взгляд, нужно исправить?</span>
  <input type="text" id="further_improve" style="margin-top: 10px;display:none; font-size: 10px; padding: 2px; width: 220px;" name="comment" value="" maxlength="100" />
  <input type="button" id="submit2" onClick="submit_form('no');" value="Отправить отзыв" style="display:none" />

</form>
  <script>
  function yesno(ans) {
  document.location='?answer=homepage&useful='+ans+'&expand_useful=1&#helpful';
  }
  function submit_form(ans){
  if(ans == 'yes'){
  document.location = "/support/webmasters/bin/answer.py?answer=homepage&useful=1&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("comment").value) + "&#helpful";
  }
  else{
  document.location = "/support/webmasters/bin/answer.py?answer=homepage&useful=0&show_useful=1&comment=" + escape("ru") + " : " + escape(document.getElementById("info_on_page").selectedIndex) + " : " + escape(document.getElementById("further_improve").value) + "&#helpful";
  }
  }
  </script>
Спасибо! Ваш отзыв поможет улучшить качество информации. -->
</span>

<?




*/
 /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


<? 
		require("_inc/footer.php");
?>






<!-- ===============   сборщик статистики   =============== //-->
<?

		$pagename = "home";			//		<---  текущая страница......

		require("statistics/save.php");

?>
<!-- ===============   ===================   =============== //-->

</center>
</body>
</html>
