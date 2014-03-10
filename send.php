<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи.
    Если не существуют, то мы их создаем.
    Если форма передала пустые значения мы их удаляем */
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['text_message'])) {$text_message = $_POST['text_message']; if ($text_message == '') {unset($text_message);}}
if (isset($_POST['pr'])){$pr = $_POST['pr']; if ($pr == '') {unset($pr);}}
if (isset($_POST['captcha'])){$captcha = $_POST['captcha'];}
/* Проверяем заполнены ли все поля */
if (isset($name) && isset($email) && isset($text_message) && isset($pr))
{
/* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$text_message = htmlspecialchars(trim($text_message));
/* Проверяем вводимое поле "Имя", в
    данном случае только русские буквы */
if(!preg_match("/[А-Яа-я]/i", $name)){{
 {
echo "<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>Имя должно состоять только<br /> из русских букв!</div>
 <div align='center' class='warning_font' align='left'>Попробуйте ещё раз!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 </td>
 </tr>
 </table>";
  }
  return false;}
 return true;
}
/* Проверяемна правильность ввода e-mail  */
if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)){{
 {
echo "<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>Не правильный формат E-mail!</div>
 <div align='center' class='warning_font' align='left'>Попробуйте ещё раз!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 </td>
 </tr>
 </table>";
  }
  return false;}
 return true;
}
/* Проверяем правильность ввода капчи */
  if ($captcha == $pr)
  {
/* Формируем сообщение */
$address = "ваша@почта.ru";  /* Меняем на свою почту */
$sub = "Сообщение с сайта";
$mes = "Автор: $name \nE-mail: $email \n\nТекст сообщения:\n$text_message";
/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = Windows-1251\r\nFrom:$email");
      if ($verify == 'true')
     {
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/Galochka.png'>
 <div align='center' class='warning_font_big'>Поздравляем!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо доставлено администратору.<br />В ближайшее время с Вами обязательно свяжуться!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 </td>
 </tr>
 </table>";
      }
      else
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>ОШИБКА!!!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо не доставлено. Повторите отправку немного позже!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 </td>
 </tr>
 </table>";
}
}
else
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>Вы не правильно ввели цифры!</div>
 <div align='center' class='warning_font' align='left'>Попробуйте ещё раз!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 </td>
 </tr>
 </table>";
  }
}
else
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>Вы заполнили не все поля!</div>
 <div align='center' class='warning_font' align='left'>Попробуйте ещё раз!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></p>
 </td>
 </tr>
 </table>";
}
?>
