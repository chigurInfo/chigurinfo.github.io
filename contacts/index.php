<? 
		require("../_inc/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title> <?if(isset($_POST['go'])) echo"Отправка сообщения."; else echo"Контактная информация.";?> Создание сайтов, создание Интернет магазинов </title>
  <meta name="description" content=" Контактная информация. Создание сайтов, создание Интернет магазинов ">
  <meta name="keywords" content=" создание сайтов создание Интернет магазинов ">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <meta name="author" content="neoweb">
  <meta name="generator" content="AceHTML 6 Pro">

<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/style.css">  
<link rel="stylesheet" type="text/css" href="http://<?=$host?>/css/menu.css">
</head>
<body><center>



<? 
		if(!isset($_POST['go'])) $page = "contacts";
		require("../_inc/header.php");
?>
		
		
		
		
		


<?		
//	$go = $_POST['go'];
//if(!isset($go)) {
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>			

			<p class="high1">
			Контактная информация.<p>

			<div class="temp"><b>Создание сайтов, создание Интернет магазинов.</b></div>
			Украина, Киев.<br>
			Телефон: <script language="JavaScript" type="text/javascript">document.write('+38 ' + ' (068) ' + '358-' + '92-' + '96')</script> (Александр).<br>
			Электронная почта: <script language="JavaScript" type="text/javascript">document.write('<a ' + 'href="mailto:' + 'info' + '@' + 'neoweb.kiev.ua" ' + 'title' + '="info' + '@' + 'neoweb.kiev.ua" class="contact">' + 'info' + '@' + 'neoweb.kiev.ua</' + 'a>')</script>.<br>
			Номер ICQ: <script language="JavaScript" type="text/javascript">document.write('<a class="contact" href="http://wwp.icq.com/scripts/contact.dll?msgto=407260047"  title="Номер ICQ" rel="nofollow">407-260-047</a>')</script>.<p>
<?/*
			Также Вы можете написать и отправить сообщение с этой страницы.</p>


<script type="text/javascript" language="JavaScript">
<!--
function checkform(form, v1, v2){

if (!v1.value && v2.value){
						 			document.all.mail_comment.style.display = "block";
									document.all.message_comment.style.display = "none";
									return false;
} else if (v1.value && !v2.value){
									document.all.mail_comment.style.display = "none";
									document.all.message_comment.style.display = "block";
									return false;
} else if (!v1.value && !v2.value){
									document.all.mail_comment.style.display = "block";
									document.all.message_comment.style.display = "block";
									return false;
} else{
			document.all.mail_comment.style.display = "none";
			document.all.message_comment.style.display = "none";
			return true; }

}
//-->
</script> 

			<p class="high2">
			Написать сообщение.</p>

			<form name="sendform" method="post" enctype="multipart/form-data" action="" onsubmit="return checkform(this, document.sendform.mail, document.sendform.message);" style=" margin:  0;">


			<table border="0" cellpadding="0" cellspacing="0">
				<tr><td class="sent_form_text">Ф.И.О.:</td><td class="sent_form_text"><input class="mainstyle" type="text" name="name" size="40" maxlength="50" style="width: 360px;"></td></tr>
				<tr><td class="sent_form_text">Ваш e-mail:<br></td><td class="sent_form_text"><input class="mainstyle" type="text" name="mail" size="40" maxlength="40" style="width: 360px;">
				<div id="mail_comment" class="comment" style="display: none;">Укажите e-mail</div>
				</td></tr>
				<tr><td class="sent_form_text">Тема сообщения:</td><td class="sent_form_text"><input class="mainstyle" type="text" name="subject" size="50" maxlength="50" style="width: 360px;"></td></tr>
				<tr><td class="sent_form_text">Сообщение:</td><td class="sent_form_text"><textarea class="mainstyle"  name="message" cols=50 rows=7 style="width: 360px;"></textarea>
				<div id="message_comment" class="comment" style="display: none;">Введите текст сообщения</div>
				</td></tr>
				<tr><td class="sent_form_text">&nbsp;</td><td class="sent_form_text"><input class="buttonstyle"  type="submit" name="go" value="Отправить сообщение" style="width: 180px; padding: 2 0;" ></td>
				</tr>
			</table>

			</form>			

			


			
<?
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
} else{			// закрывающая скобка для оператора if(!isset($go))
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~





	$name = $_POST['name'];	
	$mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$message = "\nПишет: ".$name." [ ".$mail." ] \n\n".$message."\n\n---\nСообщение отправлено с сайта www.neoweb.kiev.ua";
		
						//--------- отправка СМС -----------
					
						$res = mail( "info@$host", $subject, $message,
							"Return-path: info@$host \n".
							"From: message@$host \n".
							"Reply-To: $name <$mail> \n".
							"Content-Type: text/plain; charset=windows-1251\n".
							"Content-Transfer-Encoding: 8bit\n".
							"Date: ".date("r")."\n".
							"X-Mailer: mailer_".$SERVER_NAME);
					
						//----------------------------------		
?>

			<p class="high1">
			Отправка сообщения.</p>
			
			<div class="message">
			Сообщение отправлено и будет обработано в ближайшее время.<br>
			Благодарим вас за внимание!
			</div><p>
			
*/?>

<?
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//						}		// закрывающая скобка для оператора else   [ if(!isset($go)) ]
?>			










<? 
		require("../_inc/footer.php");
?>






<!-- ===============   сборщик статистики   =============== //-->
<?

//		$pagename = "contacts/";			//		<---  текущая страница......

		require("../statistics/save.php");

?>
<!-- ===============   ===================   =============== //-->

</center>
</body>
</html>
