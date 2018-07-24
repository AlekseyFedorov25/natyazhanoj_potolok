<?php   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$site_name = $_SERVER['HTTP_HOST'];
   
// Create the email and send the message
$to = 'aleksey.fedorov04@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Заполнена контактная Форма с сайта\r$site_name";
$email_body = "Вы получили новое письмо, отправленное с помощью контактной формы.\n\n"."Вот данные:\n\nИмя: $name\n\nТелефон: $phone\n\nСообщение: $message";
mail($to,$email_subject,$email_body);
return true;         
?>