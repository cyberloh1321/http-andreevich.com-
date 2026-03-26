<?php

if((empty($_POST['email']) and empty($_POST['password'])))
{
    echo "Ошибка email или password";
}
else{
    print("<br>Email: " . $_POST['email']); 
    print("<br>Пароль: " . $_POST['password']);
}

?>
