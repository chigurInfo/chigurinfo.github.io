<? 
		require("../_inc/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title> Визуальный редактор - Создание сайтов, создание Интернет магазинов </title>
  <meta name="description" content=" Создание сайтов, создание Интернет магазинов ">
  <meta name="keywords" content=" создание сайтов создание Интернет магазинов ">
  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <meta name="author" content="neoweb">
  <meta name="generator" content="AceHTML 6 Pro">

<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/style.css">  
<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/menu.css">
</head>
<body><center>



<? 
		$page = "";
		require("../_inc/header.php");
?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->




<h1>Визуальный редактор.</h1><p>

Материал в процессе редактирования выглядит так же, как и конечный результат.<br>
Изображение визуального редактора:<p>


<?/*
<!-- TinyMCE -->
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "../css/editor.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
//			username : "Some User",
//			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</head>
<body>

<form method="post" action=""  style="padding: 0;margin: 0;">

	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="26" cols="80" style="width: 400px">
	<p>
		<h1>Окно редактора.</h1>
		<img src="../pic/ice.jpg" alt=" " hspace="5" vspace="5" width="180" height="136" align="right"> 
		На панели редактора вы можете видеть огромнейший набор элементов управления.
		Для форматирования текстов, добавления изображений, ссылок, видео. Для вставки таблиц и специальных символов.
		Функции поиска, вставки и замены текста. Для включения полноэкранного режима, отправка на печать и так далее.</p>
		<p>
		Редактор поддерживает основные клавиатурные сочетания:<br>
		Сtrl + C копирование<br>
		Сtrl + V вставка<br>
		Сtrl + X копирование с удалением<br>
		Сtrl + I курсив<br>
		Сtrl + B жирность<br>
		Сtrl + U подчеркивание<br>
		Сtrl + Z отменить действие<br>
		Сtrl + Y повторить действие<p>
	</textarea>

	<br><!-- 
	<input type="submit" name="save" value="Сохранить">
	<input type="reset" name="reset" value="Сброс"> -->
</form>
*/?>


<img src="../pic/editor.gif" border="0" width="677" height="422" alt="Визуальный редактор"><p>

<a href="../" class="intext" title="">Вернуться на главную</a>

<!-- 
<img src="../pic/editor_3.jpg" border="0" width="702" height="311" alt=""><p>

На панели редактора вы можете видеть огромнейший набор элементов управления.
Для форматирования текстов, добавления изображений, ссылок, видео. Для вставки таблиц и специальных символов.
Функции поиска, вставки и замены текста. Полноэкранный режим, отправка на печать и так далее.<p>

 -->







<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<? 
		require("../_inc/footer.php");
?>







<?
// ===============   сборщик статистики   =============== */
//		$pagename = "contacts/";			//		<---  текущая страница......
		require("../statistics/save.php");
// ===============   сборщик статистики   =============== */
?>


</center>
</body>
</html>
