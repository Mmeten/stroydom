<!doctype html>
<html>
 
   <head>
   <link href='images.jpg' rel='icon'>
      <title>Связь с компанией</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   
   <body>
   <a href="new.html"><input style="position: absolute;left: 950px; top: 50px; border-style: none; border: none;" type="image" src="dolm.jpg" height="120" width="400"></a>
    <div class="conteiner">
        <script>
            function checkForm(form) {
                var name = form.name.value;
                var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
                if (!n) {
                    alert("Имя введено неверно, пожалуйста исправьте ошибку");
                    return false;
                }
                var phone = form.phone.value;
                var p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
                if (!p) {
                    alert("Телефон введен неверно");
                    return false;
                }
                var mail = form.mail.value;
                var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
                if (!m) {
                    alert("E-mail введен неверно, пожалуйста исправьте ошибку");
                    return false;
                }
                var text = form.message.value;
                var t = text.length;
                if(t==0)
                {
                	alert("Все поля должны быть заполнены");
                	return false;
                }
                return true;
            }
        </script>
 
<style>
   	form {
   background: #f4f5f7;
   padding: 20px;
}
form .left, form .right {
   display: inline-block;
   vertical-align: top;
   width: 458px;
}
form .right {
   padding-left: 20px;
}
label {
   display: block;
   font-size: 18px;
   text-align: center;
   margin: 10px 0px 0px 0px;
}
input, textarea {
   border: 1px solid #82858D;
   padding: 10px;
   font-size: 16px;
   width: 436px;
}
textarea {
   height: 98px;
   margin-bottom: 32px;
}
input[type="submit"] {
   width: 200px;
   float: right;
   border: none;
   background: #595B5F;
   color: #fff;
   text-transform: uppercase;
} 
</style>

   
        <form method="post" action="mail.php" onSubmit="return checkForm(this)" >
               
            <div class="left">
                <label for="name">Имя:</label>
                <input maxlength="30" placeholder="Пример: Иванов Иван" type="text" name="name" />
                   
                <label for="phone">Телефон:</label>
                <input maxlength="30" placeholder="Пример: +380 77 777 7777" type="text" name="phone" />
                   
                <label for="mail">E-mail:</label>
                <input maxlength="30" placeholder="Пример: ivanov@mail.ru" type="text" name="mail" />
            </div>
               
            <div class="right">
                <label for="message">Сообщение:</label>
                <textarea rows="7" cols="50" placeholder="Кратко опишите свой вопрос" name="message"></textarea>
                   
                <input type="submit" value="Отправить" />
            </div>
               
        </form>
    </div>
   
   </body>
   
</html>