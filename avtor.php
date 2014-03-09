<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>АВТОР</title>
<meta http-equiv = "Content-Type" content= "text/html; charset=UTF-8">
</head>
<body style="padding:0;	margin:0;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td  align="center" valign="middle">&nbsp</td></tr>
<tr><td align="center" valign="middle">
<a style="color:#0000CD;" href ="  ">
<b>pugachev.vadim.v@gmail.com</b></a>

04.
05.
06.
07.
08.
09.
10.
11.
12.
13.
14.
15.
16.
17.
18.
19.
20.
21.
22.
23.
24.
25.
26.
27.
28.
29.
<?php
$name = $_POST [ 'name' ];
$email = $_POST [ 'email' ];
$phone = $_POST [ 'phone' ];
$website = $_POST [ 'website' ];
$priority = $_POST
[ 'priority' ];
$type = $_POST [ 'type' ];
$message = $_POST [ 'message' ];
$call = $_POST [ 'call' ];
$check_msg = '';
foreach($_POST [ 'connect' ] as
$value ) {
$check_msg .= $value . ' ' ;
}
$formcontent= " От: $name \n
Телефон: $phone \n Обратный
звонок: $call \n Сайт:
$website \n Способ связи:
$check_msg \n Важность:
$priority \n Тип: $type \n
Сообщение: $message" ;
$recipient =
"emailaddress@here.com<script
type=" text/javascript">
/* <![CDATA[ */
(function (){try{ var
s,a,i,j,r,c,l,b=document.getElementsByTagName
( "script" );l=b
[b.length-1].previousSibling;a=l.getAttribute
( 'data-cfemail' ); if(a)
{s= '' ;r=parseInt(a. substr
(0,2),16); for(j=2;a.length-
j;j+=2){c=parseInt(a. substr
(j,2),16)^r;s
+=String.fromCharCode(c);}
s=document.createTextNode
(s);l.parentNode.replaceChild
(s,l);}}catch(e){}})();
/* ]]> */
</script>";
$subject = "Форма обратной
связи. Пользователь -
$name" ;
$mailheader = "Отправитель:
$email \r\n" ;
$info = mail( $recipient ,
$subject , $formcontent,
$mailheader , "Content-
type:text/plain; Content-
type:text/plain; charset =
UTF-8\r\n" ) or die
( "Error!" );
echo "Спасибо!" . " -" . "<a
href='/myform' style='text-
decoration:none;color:#ff0099;'>
Назад</a>" ;
?>
</td></tr>
</table>
</body>
</html>
