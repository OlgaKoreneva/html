<?php
		if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
	//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
	// подключаемся к базе
    include ("bd.php");
	//извлекаем из базы все данные о пользователе с введенным логином
	$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); 
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
	else {
    //если пароли не сошлись
    exit ("Извините, введённый вами логин или пароль неверный.");
    }
    }
    ?>
