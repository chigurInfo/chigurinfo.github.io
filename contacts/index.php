<? 
		require("../_inc/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title> <?if(isset($_POST['go'])) echo"�������� ���������."; else echo"���������� ����������.";?> �������� ������, �������� �������� ��������� </title>
  <meta name="description" content=" ���������� ����������. �������� ������, �������� �������� ��������� ">
  <meta name="keywords" content=" �������� ������ �������� �������� ��������� ">
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
			���������� ����������.<p>

			<div class="temp"><b>�������� ������, �������� �������� ���������.</b></div>
			�������, ����.<br>
			�������: <script language="JavaScript" type="text/javascript">document.write('+38 ' + ' (068) ' + '358-' + '92-' + '96')</script> (���������).<br>
			����������� �����: <script language="JavaScript" type="text/javascript">document.write('<a ' + 'href="mailto:' + 'info' + '@' + 'neoweb.kiev.ua" ' + 'title' + '="info' + '@' + 'neoweb.kiev.ua" class="contact">' + 'info' + '@' + 'neoweb.kiev.ua</' + 'a>')</script>.<br>
			����� ICQ: <script language="JavaScript" type="text/javascript">document.write('<a class="contact" href="http://wwp.icq.com/scripts/contact.dll?msgto=407260047"  title="����� ICQ" rel="nofollow">407-260-047</a>')</script>.<p>
<?/*
			����� �� ������ �������� � ��������� ��������� � ���� ��������.</p>


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
			�������� ���������.</p>

			<form name="sendform" method="post" enctype="multipart/form-data" action="" onsubmit="return checkform(this, document.sendform.mail, document.sendform.message);" style=" margin:  0;">


			<table border="0" cellpadding="0" cellspacing="0">
				<tr><td class="sent_form_text">�.�.�.:</td><td class="sent_form_text"><input class="mainstyle" type="text" name="name" size="40" maxlength="50" style="width: 360px;"></td></tr>
				<tr><td class="sent_form_text">��� e-mail:<br></td><td class="sent_form_text"><input class="mainstyle" type="text" name="mail" size="40" maxlength="40" style="width: 360px;">
				<div id="mail_comment" class="comment" style="display: none;">������� e-mail</div>
				</td></tr>
				<tr><td class="sent_form_text">���� ���������:</td><td class="sent_form_text"><input class="mainstyle" type="text" name="subject" size="50" maxlength="50" style="width: 360px;"></td></tr>
				<tr><td class="sent_form_text">���������:</td><td class="sent_form_text"><textarea class="mainstyle"  name="message" cols=50 rows=7 style="width: 360px;"></textarea>
				<div id="message_comment" class="comment" style="display: none;">������� ����� ���������</div>
				</td></tr>
				<tr><td class="sent_form_text">&nbsp;</td><td class="sent_form_text"><input class="buttonstyle"  type="submit" name="go" value="��������� ���������" style="width: 180px; padding: 2 0;" ></td>
				</tr>
			</table>

			</form>			

			


			
<?
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
} else{			// ����������� ������ ��� ��������� if(!isset($go))
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~





	$name = $_POST['name'];	
	$mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$message = "\n�����: ".$name." [ ".$mail." ] \n\n".$message."\n\n---\n��������� ���������� � ����� www.neoweb.kiev.ua";
		
						//--------- �������� ��� -----------
					
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
			�������� ���������.</p>
			
			<div class="message">
			��������� ���������� � ����� ���������� � ��������� �����.<br>
			���������� ��� �� ��������!
			</div><p>
			
*/?>

<?
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//						}		// ����������� ������ ��� ��������� else   [ if(!isset($go)) ]
?>			










<? 
		require("../_inc/footer.php");
?>






<!-- ===============   ������� ����������   =============== //-->
<?

//		$pagename = "contacts/";			//		<---  ������� ��������......

		require("../statistics/save.php");

?>
<!-- ===============   ===================   =============== //-->

</center>
</body>
</html>
