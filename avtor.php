<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>СЛУЖБА ПОДДЕРЖКИ</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="padding:0;	margin:0;">
<table style="height:100%;" width="100%" border="1" cellpadding="0" cellspacing="0">
<tr><td style="background-color:#E6E6FA;" align="center" valign="middle">
<a style="color:#0000CD;" href="http://www.pautinka.mobi">pautinka.mobi</a></td></tr>
<tr><td  align="center" valign="middle">&nbsp;</td></tr>
 <tr><td align="center" valign="middle"><center>
 <form action="send.php" method="post"><fieldset><legend>&nbsp;&nbsp;Служба&nbsp;поддержки&nbsp;!</legend> 
 <table class="table2">
 <tbody><tr><th colspan="2" class="zagalovok"><a style="border:1;" href="images/an.png"><img alt="pautinka"  
src="images/an.png"></a></th></tr><br>
 <tr><th colspan="2"></th></tr>
 <tr><td colspan="2" class="lable">*Ваше имя:</td></tr>
 <tr><td colspan="2" class="input"><input name="name" size="24" maxlength="24" class="input" type="text"></td></tr>
 <tr><td colspan="2" class="lable">*Ваш e-mail:</td></tr>
 <tr><td colspan="2" class="input"><input name="email" size="24" maxlength="24" class="input" type="text"></td></tr>
 <tr><td colspan="2" class="lable">*Сообщение:</td></tr>
 <tr><td colspan="2" class="input"><textarea name="text_message" cols="20" rows="7" class="input"></textarea></td></tr>
 <tr><td align="center"  class="lable" valign="bootom">*Введите цифры: </td></tr>
 <tr><td align="center" valign="top">
<?php $i=1; do {$num[$i] = mt_rand(0,9); echo "<img src='img/".$num[$i].".png' border='0' align='center' vspace='5px'>";
++;} while ($i<5); $captcha = $num[1].$num[2].$num[3].$num[4];?>
<input name="captcha" type="hidden" value="<?php echo $captcha ;?>"><br/> 
<input name="pr" style="margin-bottom:11px;" type="text" size="24" maxlength="4"></td></tr>
<tr><th colspan="2"></th></tr>
<tr><td colspan="2" align="center"><input name="mail_submit" type="submit" value="Отправить сообщение"></td></tr>
</tbody></table></fieldset></form></center></td></tr>

<tr><td align="center" valign="middle">&nbsp;</td></tr>
<tr><td align="center" valign="middle">* Поле обязательного заполнения.</td></tr>   
<tr><td align="center" valign="middle">&nbsp;</td></tr>
<tr><td style="background-color:#E6E6FA;" align="center" valign="middle"> 
&copy; 2014 <a style="color:#0000CD;" href="http://www.pautinka.mobi">pautinka.mobi</a></td></tr>
</table>
</body>
</html>
