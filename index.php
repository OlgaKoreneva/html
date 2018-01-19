<!-- 
1) Допустимые символы в пароле: [a-zA-Z0-9] 
2)Обязательно должно быть: символы верхнего и нижнего регистра, а также цифры (минимум один символ каждого типа) 
3)Длина пароля от 8 до 12 символов. -->
<?php
if(isset($_POST['email']))
{
$_POST['email'] = stripslashes($_POST['email']);
    $_POST['email'] = htmlspecialchars($_POST['email']);
	$_POST['email'] = trim($_POST['email']);

	if(preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['email']))  
	{echo '   e-mail верен';}
	else 
	{echo '   e-mail неверен';}
	unset($_POST['email']);
}

if(isset($_POST['password']))
{
    $_POST['password'] = stripslashes($_POST['password']);
    $_POST['password'] = htmlspecialchars($_POST['password']);
	$_POST['password'] = trim($_POST['password']);
    
	if(preg_match("/(?=^.{8,12}$)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])/", $_POST['password']))  
	{echo 'пароль валиден  ';}
	else 
	{echo 'пароль не валиден  ';}
	unset($_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Сауна</title>
		 <link rel="stylesheet" type="text/css" href="1.css">
<style>
.menu
{
width:1140px;
height:38px;
position: absolute;
top:65px;
left:50%;
margin:-60px 0 0 -580px;
background-color: none; /* красный цвет выбранного пункта меню после открытия */
z-index:11;
}


.menu ul li{
padding: 10px;

background-color: none; /*оранжевый */
}

.menu ul > li:hover{
  background-color: #E4DBA5  ; /*желтый цвет выбранного пункта меню после открытия */

}

.menu ul ul > li:hover{
  background-color: #A4D1A3    ; /*зелееый цвет выбранного пункта подменю*/
  
}

.menu ul li, .menu ul{
  display: inline-block;
  background-color: none ;  /* синий */
  width: 140px;
  
}

.menu ul{
  position: relative;
  margin: 10 px;
  background-color: none; /*фиолетовый заливка пунктов меню*/
  width: 1140px;
}

.menu li{
  width: 250px;
  background-color: none;/* white */
  text-align: center;
  
}

.menu ul ul{
  display: none;
  position: absolute;
  background-color: #DEE0C2; /* розовый */ /*заливка выпадающих пунктов меню */
  margin-top: 8px;
  margin-left: -10px;
  width: 200px;
  
} 

.menu ul a{
  color: #CD8C3C    ; /*цвет букв (белый)*/
  text-decoration: none;
  background-color: none; /*серый */
  width: 555 px;
  
}

.menu ul ul a{
  color: none; /*цвет букв выпадающего меню (белый)*/
  text-decoration: brown; /* коричневый*/
  
}

.menu li:hover ul{
  display: block;
  text-decoration: amber;/*янтарный*/
  
}

.menu li:hover li{
  display: block;
  text-decoration: gold; /*золотой*/ 
  text-align: left;
}



.brand
{
position: absolute;
top: 150px;
left: 50%;
width: 150px;
height: 50px;
margin: 13px 0 0 -605px;
z-index:1;
}

body
{
margin: 0;
background-color: none;
}

header
{
background-image:url("backgrounds/1.png");
background-repeat: repeat-x;
height: 130px;
}

section
{
background-image:url("backgrounds/4.png");
background-repeat: repeat-x;
position: relative;
top: -4px;
left: 0%;
}

.product
{
display: inline-block;
padding: 0px 50px; 
margin: 15px;
}

.product img 
{
border-radius: 25px; 
box-shadow: 15px 15px 30px rgba(0,0,0,0.6); <!--тени-->
}

.product p
{
text-align: center;
}

.price2
{
color: rgb(229, 142, 18);
text-align: center;
}

.form
{
display: block;
}

footer
{
background-image:url("backgrounds/5.png");
background-repeat: repeat-x;
width: 100%;
height: 320px;
position: relative;
top: 0px;
left: 0%;
}

footer p
{
position: relative;
top: 25px;
left: 0%;
text-align:center;
margin: 0.5%;
font-size: 14pt;
color: rgb(130, 50, 80);
}

.picture
{
text-align: center;

}

</style>
		 
		 </head>

<body>

	<header>
<nav class="menu">
  <ul>
    <li><a href="#">ГЛАВНАЯ</a>
	<b><ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
      </ul></b>
    </li>
	<li><a href="#">МЕНЮ</a>
	<b><ul>
        <li><a href="http://ruvera.ru/russian_ban">Русская баня</a></li>
        <li><a href="http://irinazaytseva.ru/tureckaya-banya-xamam-polza-i-vred-pravila-poseshheniya.html">Турецкая сауна</a></li>
        <li><a href="http://blogobane.ru/solyanaya-sauna-chto-eto-takoe/">Солянная сауна</a></li>
        <li><a href="http://olympiaperm.ru/services/pool/">Бассейн</a></li>
		<li><a href="http://www.lushusa.com/spa/">SPA</a></li>
      </ul></b>
	</li>
	<li><a href="#">ЗАКАЗ МЕСТА</a>
	<b><ul>
        <li><a href="#">На одного</a></li>
        <li><a href="#">На двоих</a></li>
        <li><a href="#">На компанию</a></li>
    </ul></b>
	<li><a href="#">МЕРОПРИЯТИЯ</a>
      <b><ul>
        <li><a href="#">Отдых выходного дня</a></li>
        <li><a href="#">Корпоратив</a></li>
    </ul></b>
    </li>
	<li><a href="#">КОНТАКТЫ</a>
	<b><ul>
        <li><a href="#">Lorem.2</a></li>
        <li><a href="#">Eveniet.2</a></li>
        <li><a href="#">Omnis.2</a></li>
        <li><a href="#">Beatae.2</a></li>
      </ul></b>
    </li>
	<li><a href="#">ВХОД</a>
	<ul class="submenu">
	 <form action="testreg.php" method="post" class="reg">
		<li> E-mail <input type="text" name="login" placeholder="Логин" value="<?=$_POST['email']?>" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"> </li>
		<li> Password <input type="text" name="password" placeholder="Пароль" value="<?=$_POST['password']?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> </li>
		<li><button type="submit" name="sumbit"> Войти </button> </li>
	 <?php
					if (empty($_SESSION['login']) or empty($_SESSION['id']))
					{ echo "<a href=''> </a>"; }
					else
					{ echo "<a href=''> ".$_SESSION['login']."</a>"; }
				?>
	 
	 
	 </form>
	</ul>
	</li>
	
	<li><a href="#">РЕГИСТРАЦИЯ</a>
		<ul class="submenu">
			<form action="save_user.php" method="post" class="reg">
			<li> E-mail <input type="text" name="login" placeholder="Логин" value="<?=$_POST['email']?>" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"> </li>
			<li> Password <input type="text" name="password" placeholder="Пароль" value="<?=$_POST['password']?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> </li>
			<li><button type="submit" name="sumbit">Зарегистрироваться</button></li>
			</form>
		</ul>
	</li>
			
  </ul>
  
</nav>
<div class="brand">
			
			<?php echo "<img src='backgrounds/8.png'>"; ?><!--содержимое-->
		</div>
	</header>

	<div class="picture"> 
		<?php echo "<img src='backgrounds/9.png'>"; ?><!--содержимое-->
	
	</div>
	
<section> 

	<div class="product">
		<?php echo "<img src='ramk_and_prod/11.png'>"; ?><!--содержимое-->
	    <p style="color: rgb(153, 96, 21);">Русская баня</p>  <!--название товара-->
	</div >
	
	<div class="product">
		<?php echo "<img src='ramk_and_prod/14.png'>"; ?><!--содержимое-->
	    <p style="color: rgb(53, 96, 21);">Турецкая сауна</p>  <!--название товара-->
	</div >
	
	<div class="product">
		<?php echo "<img src='ramk_and_prod/10.png'>"; ?><!--содержимое-->
	    <p style="color: rgb(50, 96, 21);">Солянная сауна</p>  <!--название товара-->
	</div >
	
	<div class="product">
		<?php echo "<img src='ramk_and_prod/12.png'>"; ?><!--содержимое-->
	    <p style="color: rgb(53, 96, 21);">Бассейн</p>  <!--название товара-->
	</div >
	
		<div class="product">
		<?php echo "<img src='ramk_and_prod/13.png'>"; ?><!--содержимое-->
	    <p style="color: rgb(53, 96, 21);">SPA</p>  <!--название товара-->
	</div >
 <footer>
	
<p>  
<?php
//откуда будем парсить информацию
$content = file_get_contents('http://www.vorontsovskie-bani.ru/articles/155-banya-eto-sostoyanie-dushi');
// Определяем позицию строки, до которой нужно все отрезать
$pos = strpos($content, 'itemprop="articleBody"');
//Отрезаем все, что идет до нужной нам позиции
$content = substr($content, $pos);
// Точно таким же образом находим позицию конечной строки
$pos = strpos($content, '</div>');
// Отрезаем нужное количество символов от нулевого
$content = substr($content, 0, $pos);
//если в тексте встречается текст, который нам не нужен, вырезаем его
$content = str_replace('itemprop="articleBody">','', $content);
// выводим спарсенный текст.
echo $content;
//echo "вставляем сюда завершающий код";
?>
</p>
</footer>
 
</body>


</html>
