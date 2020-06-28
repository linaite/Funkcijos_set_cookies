<?php
//nustato cookies


function set_cookies()
{
    if (isset($_POST['login'])) {
        return setcookie($_POST['user_name'], $_POST['user_email']);
    }
}



 ?>