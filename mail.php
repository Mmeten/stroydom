<!doctype html>
<html>
<head>
   <link href='images.jpg' rel='icon'>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <title>Ваше сообщение успешно отправлено</title>
</script>
 
</head>
 
<body>
 
<?php
    $back = "<p><a href=\"new.html\">Вернуться назад</a></p>";
   
    if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) and !empty($_POST['message'])){
        $name = trim(strip_tags($_POST['name']));
        $phone = trim(strip_tags($_POST['phone']));
        $mail = trim(strip_tags($_POST['mail']));
        $message = trim(strip_tags($_POST['message']));
       
        mail('yaroslavmakson@gmail.com', 'Письмо с сайта СтройДома', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=utf-8");
       
        echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";
       
        exit;
    }
    else {
        echo "Для отправки сообщения заполните все поля! $back";
        exit;
    }
?>
</body>