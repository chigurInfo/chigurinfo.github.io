<? 
		require("_inc/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title> �������� ������, �������� �������� ��������� </title>
  <meta name="description" content=" �������� ������, �������� �������� ��������� ">
  <meta name="keywords" content=" �������� ������ �������� �������� ��������� ">
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
<h1>�������� ������, �������� �������� ���������.</h1>


<p class="high2">
�������� ������.
</p>
<ul>
	<li><b class="plain">�������� ������, �������� �������� ���������</b> "��� ����";
	<li>������ ������;
	<li><span class="dashed" onmouseover="Tip('�������, ��������������� ����������� W3 ����������� (www.W3.org).', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">�������� �������</span> web-�������;
	<li>��������� �������� PHP+MySQL;
	<li>�������� ������ ���������� ��� ������;
</ul>
<?/*
<span class="temp">�������� ������������� ������, ������ �������, �������������� ������, �������� �������� ��������� "��� ����";</span>
*/?>


<p class="high2">
� ������.</p>
�������� ����� �������� ����-��� ������. �������� �������� �������� - �� ���� ������.


<p class="high2">
������� ����������.</p>
��� ������� ����� ��� �������� �������� ��������� ������� ���������� ���������� (���). 
��� <span class="dashed" onmouseover="Tip('CMS - (�� ����.) Content Manager System.', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">CMS</span>, ����������� ��������� ����� ��������������
��������� �������������� �����������. ����� ������� ��������� ������� �� ��������� �������. ��� ����������� ��� �� ��������� ����������� ������.<br>
� �������� ���������� ����������� <noindex><a href="editor/" class="intext" rel="nofollow"
 onmouseover="Tip(' <img src=pic/small_editor.jpg border=0 width=241 height=150 ', WIDTH, 246, PADDING, 6, BGCOLOR, '#ffffff', BORDERCOLOR, '#AFAFAF')"
 onmouseout="UnTip()">���������� ��������</a></noindex>.


<?/*
<p class="high2">
���������� ��������.</p>
� �������� ���������� ����������� ���������� 
<span class="dashed" onmouseover="Tip('���������� �� What You See Is What You Get, ����. ��� ������, �� � ��������.', BALLOON, true, ABOVE, true, OFFSETX, -17, FADEIN, 100, FADEOUT, 100, PADDING, 8)" onmouseout="UnTip()">WYSIWYG</span>
��������. <noindex><a href="editor/" class="intext" rel="nofollow">���������...</a></noindex>
*/?>


<p class="high2">
����������� ���������.</p>
���� <b class="plain">�������� �����</b> ��� <b class="plain">�������� ��������</b> �� ������ ������� � ��������������.
�������, ���������� ����� ������������� � ���, ����� ������ ��������� ���������. ������ ��������� �������� ������ ����� �� ������ �� �������� 
<script language="JavaScript" type="text/javascript">document.write('8 ' + ' (068) ' + '358-' + '92-' + '96')</script>
��� ������� �� ����������� �����<script language="javascript" type="text/javascript">document.write(' <a ' + 'href="mailto:' + 'info' + '@' + 'neoweb.kiev.ua" ' + 'title' + '="info' + '@' + 'neoweb.kiev.ua" class="intext">' + 'info' + '@' + 'neoweb.kiev.ua</' + 'a>')</script>.


<p class="high2">
����������.</p>
��� �������� ������ � �������� ��������� ������������ ��������� ���������� � ����� ����������������:
HTML, CSS, JavaScript, JSHttpRequest, PHP, MySQL.


<p class="high2">
������� ���������� ������.</p>
������ ���������� ������.
����������� ��������� ����� �� �������. <?/* �������� ���������. ���������� ��������� ����������� ��� ���-���a���. */?>
������ ����� �������� ������. ���������� �����������, � ������� ��������� ������ � ��������.


<p class="high2">
��������� ����� � ����.</p>
����� ���������� ����������, ���� �������������� � ��������� ������� Google, Yandex, Bigmir, Ukr.net.<p>


<?
 /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
 /*
?>
<p style="text-align: right;">
<a href="#" name="helpful" ></a>

<b>���� �� ��� ���������� ��� �������?</b><!--  / ����� �� �� ����� �� ���� ������? -->
<div style="border-top: 1px solid #BDBDBD;"></div>
<div style="text-align: right;">

<?
		$useful = $_GET["useful"];		//		echo"\$useful = $useful";
		
		if(!isset($useful)){
?>

  <form name="useful" method="GET" action="/support/webmasters/bin/answer.py" style="padding:0;margin:0;">
  <input type="hidden" name="answer" value="35237" />
  <input type="hidden" name="show_useful" value="1" />
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />��</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio"  name="useful" value="0" onclick="yesno(0)" />���</label>
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
  <label onclick="yesno(1)"><input type="radio" checked name="useful" value="1" onclick="yesno(1)" />��</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio"  name="useful" value="0" onclick="yesno(0)" />���</label>
  <br/><br/>
  �� ����, ��� ����� �������� ��������. ��� �� ��� ����������?<br/>
  <input type="text" name="comment" id="comment" value="" maxlength="100" style="font-size: 10px; padding: 2px; width: 220px;" />
  <input type="button" value="��������� �����" onClick="submit_form('yes');" />
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
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />��</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio" checked name="useful" value="0" onclick="yesno(0)" />���</label>
  <br/><br/>
  ���������, ����������, ������ �� �� �������� ��� ���������� ��������. �������!
  <select id="info_on_page" name="info_on_page" onchange="showLayerDefault('further_improve_lang');showLayerDefault('further_improve');showLayerDefault('submit2');">
  <option>�������� �������</option>
  <option value="didnt answer my question">� �� �������(�) ����� �� ���� ������</option>
  <option value="isnt what i was looking for">�������� ������������ ��������</option>
  <option value="isnt clear">��� �������</option>
  <option value="other">������</option>
  </select><br>
  <span id="further_improve_lang" style="display: none">���, �� ��� ������, ����� ���������?</span>
  <input type="text" id="further_improve" style="margin-top: 10px;display:none; font-size: 10px; padding: 2px; width: 220px;" name="comment" value="" maxlength="100" />
  <input type="button" id="submit2" onClick="submit_form('no');" value="��������� �����" style="display:none" />
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
  <label onclick="yesno(1)"><input type="radio"  name="useful" value="1" onclick="yesno(1)" />��</label>
  &nbsp;&nbsp;
  <label onclick="yesno(0)"><input type="radio" name="useful" value="0" onclick="yesno(0)" />���</label>
  <br/><br/>
  ���������, ����������, ������ �� �� �������� ��� ���������� ��������. �������!
  <select id="info_on_page" name="info_on_page" onchange="showLayerDefault('further_improve_lang');showLayerDefault('further_improve');showLayerDefault('submit2');">
  <option>�������� �������</option>
  <option value="didnt answer my question">� �� �������(�) ����� �� ���� ������</option>
  <option value="isnt what i was looking for">�������� ������������ ��������</option>
  <option value="isnt clear">��� �������</option>
  <option value="other">������</option>
  </select><br/>
  <span id="further_improve_lang" style="display: none">���, �� ��� ������, ����� ���������?</span>
  <input type="text" id="further_improve" style="margin-top: 10px;display:none; font-size: 10px; padding: 2px; width: 220px;" name="comment" value="" maxlength="100" />
  <input type="button" id="submit2" onClick="submit_form('no');" value="��������� �����" style="display:none" />

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
�������! ��� ����� ������� �������� �������� ����������. -->
</span>

<?




*/
 /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 
?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


<? 
		require("_inc/footer.php");
?>






<!-- ===============   ������� ����������   =============== //-->
<?

		$pagename = "home";			//		<---  ������� ��������......

		require("statistics/save.php");

?>
<!-- ===============   ===================   =============== //-->

</center>
</body>
</html>
