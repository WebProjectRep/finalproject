<?php
    $conn = mysqli_connect('localhost', 'root', '', 'restyle');
    session_start();
    if(isset($_POST['log'])){
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM users WHERE login='" . $login . "'";
        $user = mysqli_query($conn, $query)->fetch_assoc();

        if($user['password'] == $pass){
            $_SESSION['auth'] = $user;
            header('Location: main.php');
        }
        else {print('Неверный логин или пароль!');}
    }

?>

<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link href="https://fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	<style>
		.hidden{
			display: none;
		}

		#logout{
			position: absolute;
			background-color: white;
			padding: 10px;
			right: 0;
			top: 0;
		}
		*{
			margin: 0;
			padding: 0;
		}
		html body{
			font-size: 18px;
			width: 100%;
			height: 100%;
		}
		.items a{
			text-decoration: none;
			color: black;
			font-family: 'Caveat', cursive;
		}
		.vhod a{
			text-decoration: none;
			color: black;
		}
		.main{
			display: flex;
			justify-content: space-around;
			max-width: 1200px;
			margin:0 auto;
			width:100%;
		}
		.name{
			margin-right: 50px;

		}
		.items{
			z-index: 2000;
			list-style-type: none;
			display: block;
			margin-bottom: 15px 0px;

			background: white;

		}
		.vhod{
			list-style-type: none;
			display: block;
			margin-bottom: 15px 0;
			background: white;
			margin-left: 10px;
			padding-top: 20px;
			font-family: 'Caveat', cursive;

		}
		.items ul{
			list-style-type: none;
			margin:0;
			padding: 5;
			display: block;
			word-spacing: 5em;
		}
		.items ul ul{
			display: none;
		}
		.items ul li:hover > ul{
			display: block;
		}
		.items ul ul ul{
			margin-left: 200px;
			top:0px;
			position: absolute;
		}

		.vhod ul{
			list-style-type: none;
			margin:0;
			padding: 0;
			display: block;
		}
		.items li{
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: inline-block;
			position: relative;
			font-size: 14px;
			color: #def1f0;
			position: relative;
		}
		.vhod li{
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: inline-block;
			position: relative;
			font-size: 14px;
			color: #def1f0;
		}
		.items li a{
			padding: 15px 20px;
			font-size: 14px;
			display: inline-block;
			outline: 0;
			font-weight: 400;
		}
		.vhod li a{
			padding:15px 20px;
			font-size: 14px;
			display: inline-block;
			outline: 0;
			font-weight: 400;
		}
		.items li:hover ul.dropdown{display: block;}
		.vhod li:hover ul.dropdown{display: block;}
		.items li ul.dropdown{
			position: absolute;
			display: none;
			width: 200px;
			background:lightgrey;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
			padding-top: 0;
		}
		.vhod li ul.dropdown{
			position: absolute;
			display: none;
			width: 200px;
			background:lightgrey;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
			padding-top: 0;
		}
		.items li ul.dropdownTwo{
			position: absolute;
			display: none;
			width: 200px;
			background:lightgrey;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
			padding-top: 0;
		}
		.items li ul.dropdown li{
			display: block;
			list-style-type: none;
		}
		.items li ul.dropdownTwo li{
			display: block;
			list-style-type: none;
		}
		.vhod li ul.dropdown li{
			display: block;
			list-style-type: none;
		}
		.items li ul.dropdown li a{
			padding: 15px 20px;
			font-size: 15px;
			color: #fff;
			display: block;
			font-weight: 400;
		}
		.items li ul.dropdownTwo li a{
			padding: 15px 20px;
			font-size: 15px;
			color: #fff;
			display: block;
			font-weight: 400;
		}
		.vhod li ul.dropdown li a{
			padding: 15px 20px;
			font-size: 15px;
			color: #fff;
			display: block;
			font-weight: 400;
		}
		.items li ul.dropdown li:last-child a{border-bottom: none;}
		.items li ul.dropdownTwo li:last-child a{border-bottom: none;}
		.vhod li ul.dropdown li:last-child a{border-bottom: none;}
		.items li:hover a{
			background:lightgrey;
			color: #fff !important;
		}
		.vhod li:hover a{
			background:lightgrey;
			color: #fff !important;
		}
		.items li:first-child:hover a{border-radius: 3px 0 0 3px;}
		.vhod li:first-child:hover a{border-radius: 3px 0 0 3px;}
		.items li ul.dropdown li:hover a{background: rgba(0,0,0,0.1);}
		.items li ul.dropdownTwo li:hover a{background: rgba(0,0,0,0.5);}
		.vhod li ul.dropdown li:hover a{background: rgba(0,0,0,0.1);}
		.items li ul.dropdown li:first-child:hover a{border-radius: 0;}
		.vhod li ul.dropdown li:first-child:hover a{border-radius: 0;}
		.vhod li ul.dropdownTwo li:first-child:hover a{border-radius: 0;}
		.items li:hover .arrow-down{border-top: 5px solid black;}
		.vhod li:hover .arrow-down{border-top: 5px solid black;}
		.arrow-down{
			width: 0;
			height: 0;
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
			top: 15px;
			right: -5px;
			content: '';
		}
		.dropdownTwo{
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
		}

		.name a{
			color: black;
			text-decoration-line: none;
			font-size: 30px;
			font-family: 'Sirin Stencil', cursive;
		}
		.it{
			text-align: center;
			font-size: 12px;
			font-family: 'Sirin Stencil', cursive;
		}
		.image1{
			width: 30%;
		}
		.image2{
			width: 30%;
		}
		.image1 img{
			float: left;
		}
		.image2 img{
			float: right;
		}
		.images{
			display: inline-flex;
			height: 1200px;
		}
		.text{
			width: 40%;
			text-align: center;
			position: relative;
			top: 100px;
		}
		.text a{
			color: black;
			text-decoration-line: none;
			font-size: 12px;
			font-family: 'Sirin Stencil', cursive;
			position: relative;

		}
		.text .p1 p{
			font-size: 60px;
			padding-bottom: 50px;
		}
		.a{
			word-spacing: 2em;
			padding-bottom: 30px;
		}
		.p2{
			position: relative;
			top: 150px;
		}
		.p2 p{
			font-size: 20px;
			padding-bottom: 30px;
		}
		.p2 .a2{
			word-spacing: 2em;
			padding-bottom: 100px;
		}

		.PP{
			text-align: center;
			display: flex;
			flex-direction: column;
			position: relative;
			top: 70px;
			padding-bottom: 50px;
		}
		.PP a{
			font-size: 40px;
			padding: 20px;
			font-family: bold;
			padding-bottom: 20px;
		}
		footer{
			background-color: rgb(252,250,252);
			position: relative;
			height: 150px;
			bottom: 0px;
			clear: both;
			text-align: center;
			word-spacing: 2em;
		}
		footer i{
			position: relative;
			top: 90px;
			word-spacing: 4em;
		}
		footer a{
			color: black;
		}
		.end{
			position: relative;
			top: 130px;
		}
		.www1{
			width: 15%;
			height: 100%;
			text-align: left;
			position: relative;
			left: 10px;
			top: 110px;
			padding:15px;
		}
		.www1 h3{
			font-size: 25px;
			font-family: 'Pacifico', cursive;
		}
		.cveta{
			display: flex;
			flex-direction: column;
		}
		.razmer{
			display: flex;
			flex-direction: column;
		}
		.item{
			display: inline-flex;
			color: black;
			text-decoration-line: none;
			font-size: 18px;
			font-family: 'Caveat', cursive;
		}
		.odezhda a{
			color: black;
			text-decoration-line: none;
			font-size: 18px;
			padding: 15px;
			font-family: 'Caveat', cursive;
		}
		.aksessuary a{
			color: black;
			text-decoration-line: none;
			font-size: 18px;
			padding: 15px;
			font-family: 'Caveat', cursive;
		}
		input[type="checkbox"] {
			display: none;
		}
		label {
			color: #000;
			cursor: default;
			font-weight: normal;
			line-height: 30px;
			padding: 10px 0;
			vertical-align: middle;
		}
		label:before {
			content: " ";
			color: #000;
			display: inline-block;
			font: 20px/30px FontAwesome;
			margin-right: 15px;
			position: relative;
			text-align: center;
			text-indent: 0px;
			width: 30px;
			height: 30px;
			background: #F4F0F4;
			border: 1px solid #e3e3e3;
			border-image: initial;
			vertical-align: middle;
		}
		input:checked + label:before {
			content: "\f00c";
		}
		input:disabled + label:before {
			background: #eee;
			color: #aaa;
		}
		.www2{
			width: 85%;
			height: 100%;
			position: relative;
			left: 15%;
			top: 110px;
			display: flex;
			flex-wrap: wrap;
		}
		.names p{
			text-align: center;
		}
		.names {
			display: inline-block;
			justify-content: space-around;
			text-align: center;
			width: 400px;
			height: 600px;
		}
		.www{
		height: 0px;
		}
		.names img {
	  		transition: transform .2s;
	  		margin: 0 auto;
		}

		.names img:hover {
	  		-ms-transform: scale(1.5); 
	  		-webkit-transform: scale(1.5); 
	  		transform: scale(1.5); 
		}
		.overlay a{
			color: black;
			text-decoration-line: none;
		}

		#overlays{ 
			position: fixed; 
			right: 10px; 
			bottom: 1px; 
			z-index: 25000;
			} 
		.overlaycontent img{ 
			padding: 0px 400px 200px 0px;
			height: 300px; 
			width: 600px;
		} 
		.overlaycontent div{
			position: absolute;
			bottom: 200px;
			text-align: center;
			padding: 150px 0px 50px 20px;
			font-family: 'Pacifico', cursive;
			font-size: 23px;

		}
		.overlaycontent a{
			padding-top: 100px;
		}


	</style>
</head>
<body>
	<div id="overlays">
	  	<div class="overlaycontent">
	    	<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDw0NDQ8NDQ0NDQ0NDg0NDQ8NDQ0NFREWFhURExUYHSggGBolGxMTITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALEBHAMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAQIDBAf/xAAhEAEBAAICAgIDAQAAAAAAAAAAAQIRAxMxURIhYZGhQf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD7hXKx1rNgOcxi6a0mgZ+ETrjrF0DhOH7XpegB4suH7ax4Z6eqsg43inqOeXHJ/j0ZOeUBw6cfTphxYzxFkdJATrjOXG6xdA82XG11709Exa+IPHnx/TPVvz+HtuLHwgOXVPTllwYvVY5ZA4dU9T9fxrHhjbeIJOKM3jd4lgPPePxpvr2744xvQPJnx+PaTh3rft6rifEHG8U9J1SO9jGQMXCVceKNRvEDHFoigJpQGdI0mgIqaXQCooIljSAzYxY66ZsBzka0ul0CRQgNRUigVmtIDFc8o61mwHLTchpqARQBrFpmNAIUBKxWqlBnTeLMbgLFAAAAAAAAAAAAAEStIDOl0qgigAACM2NpoGNGmtGgQXRoBpNKAigM1K0lgMyNxNLAUAAAAAAAAAAAAAAAAAAAAAAABFAAAAAAAAARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k="/>
	    	<div>
		    	<p>Дорогой покупатель!</p>
			    <p>Пожалуйста, войдите в ваш аккаунт!</p>
			    <p>Если у вас нет аккаунта пожалуйста зарегистрируйтесь.</p>
			    <p>Спасиобо!!!</p>
			    <a href="login.php"><spane class="a1"></spane>Вход</a>
	   		 </div>
	 	 </div>

	</div>
	<div class="main">
		<div class="name">
			<a href="main.php">RESTYLE</a>
		</div>
		<div class="items">
			<ul>
				<li><a href=""><strong>Распродажа<span class="arrow-down"></span></strong></a>
					<ul class="dropdown">
						<li><a href="">Женская</a></li>
						<li><a href="">Мужская</a></li>
						<li><a href="">Девочки</a></li>
						<li><a href="">Мальчики</a></li>
					</ul>
				</li>
				<li><a href="main.php"><strong>Женская<span class="arrow-down"></span></strong></a>
					<ul class="dropdown">
						<li><a href="womans.php">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="womans.php?names=Пальто">Пальто</a></li>
								<li><a href="womans.php?names=Куртки">Куртки</a></li>
								<li><a href="womans.php?names=Костюмы">Костюмы</a></li>
								<li><a href="womans.php?names=Платья">Платья</a></li>
								<li><a href="womans.php?names=Комбинезоны">Комбинезоны</a></li>
								<li><a href="womans.php?names=Кардиганы">Кардиганы</a></li>
								<li><a href="womans.php?names=Рубашки">Рубашки</a></li>
								<li><a href="womans.php?names=Футболки">Футболки</a></li>
								<li><a href="womans.php?names=Юбки">Юбки</a></li>
								<li><a href="womans.php?names=Джинсы">Джинсы</a></li>
								<li><a href="womans.php?names=Топы">Топы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="">Обувь</a></li>
								<li><a href="">Сумки</a></li>
								<li><a href="">Бижутерия</a></li>
								<li><a href="">Кошельки и бумажники</a></li>
								<li><a href="">Платки и шарфы</a></li>
								<li><a href="">Солнцезащитные очки</a></li>
								<li><a href="">Ремни</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="men.php"><strong>Мужская<span class="arrow-down"></span></strong></a>
					<ul class="dropdown">
						<li><a href="man.php">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="man.php?names=Пальто">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="">Толстовки</a></li>
								<li><a href="">Кожа</a></li>
								<li><a href="man.php?names=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="man.php?names=Брюки">Брюки</a></li>
								<li><a href="man.php?names=Джинсы">Джинсы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="">Обувь</a></li>
								<li><a href="">Сумки</a></li>
								<li><a href="">Часы</a></li>
								<li><a href="">Бумажники</a></li>
								<li><a href="">Галстуки</a></li>
								<li><a href="">Солнцезащитные очки</a></li>
								<li><a href="">Ремни</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="girl.php"><strong>Девочки<span class="arrow-down"></span></strong></a>
					<ul class="dropdown">
						<li><a href="girls.php">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="girls.php?names=Платья">Платья</a></li>
								<li><a href="girls.php?names=Толстовки">Толстовки</a></li>
								<li><a href="">Кардиганы и свитеры</a></li>
								<li><a href="girls.php?names=Рубашки">Рубашки</a></li>
								<li><a href="girls.php?names=Юбки">Юбки</a></li>
								<li><a href="">Брюки</a></li>
								<li><a href="girls.php?names=Джинсы">Джинсы</a></li>
								<li><a href="">Пижамы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="">Обувь</a></li>
								<li><a href="">Сумки</a></li>
								<li><a href="">Бижутерия</a></li>
								<li><a href="">Шапки и шарфы</a></li>
								<li><a href="">Солнцезащитные очки</a></li>
								<li><a href="">Ремни</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="boy.php"><strong>Мальчики<span class="arrow-down"></span></strong></a>
					<ul class="dropdown">
						<li><a href="boys.php">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="boys.php?names=Толстовки">Толстовки</a></li>
								<li><a href="">Кардиганы и свитеры</a></li>
								<li><a href="boys.php?names=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="boys.php?names=Брюки">Брюки</a></li>
								<li><a href="boys.php?names=Джинсы">Джинсы</a></li>
								<li><a href="">Пижамы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="">Обувь</a></li>
								<li><a href="">Сумки</a></li>
								<li><a href="">Бижутерия</a></li>
								<li><a href="">Кошельки и бумажники</a></li>
								<li><a href="">Шапки и шарфы</a></li>
								<li><a href="">Солнцезащитные очки</a></li>
								<li><a href="">Ремни</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			
		</div>
		<div class="vhod">
            <?php
                if($_SESSION['auth'] != 0){
                    $user = $_SESSION['auth'];
                    echo '<p id="username">' . $user['name'] . ' ' . $user['surname'] . '</p>';
                    echo '<a href="logout.php">Выйти</a>';
                }

                else {
                    echo '<a href="login.php">Вход</a>';
                }
            ?>
			<a href=""><i class="fa fa-shopping-cart"></i></a>
		</div>
	</div>
	<hr>
	<div class="www">
	<div class="www1">
		<div class="odezhda">
			<h3>У нас найдёте: </h3>
			<a href="womans.php"><p>Женские одеждый</p></a>
			<a href="man.php"><p>Мужские одеждый </p></a>
			<a href="girls.php"><p>Детске одеждый</p></a>
			<a href="girls.php"><p>Одежда для мальчиков</p></a>
			<a href="boys.php"><p>Одежда для девочек</p></a>
		</div>
		<div class="aksessuary">
			<h3>АКСЕССУАРЫ</h3>
			<a href=""><p>Обувь</p></a>
			<a href=""><p>Сумки</p></a>
			<a href=""><p>Бижутерия</p></a>
			<a href=""><p>Кошельки и бумажники</p></a>
			<a href=""><p>Платки и шарфы</p></a>
			<a href=""><p>Солнцезащитные очки</p></a>
			<a href=""><p>Ремни</p></a>
			<a href=""><p>Шапки и перчатки</p></a>
		</div>
	</div>
</div>

</div>
<script>
</script>

