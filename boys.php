<?php
    $conn = mysqli_connect('localhost', 'root', '', 'restyle');
    session_start();
?>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
<style>
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
		.hidden{
			display: none;
		}
		*{
			margin: 0;
			padding: 0;
		}
		html body{
			font-size: 15px;
			width: 100%;
			height: 100%;
		}
		.items a{
			text-decoration: none;
			color: black;
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
		.main .name{
			margin-right: 50px;
			text-decoration-line: none;
			color: black;
		}
		.items{
			list-style-type: none;
			display: block;
			margin-bottom: 15px 0px;

			background: white;

		}
		.vhod i{
			list-style-type: none;
			display: inline-flex;
			justify-content: space-around;
			margin-bottom: 15px;
			background: white;
			margin-left: 10px;
			padding-top: 20px;

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
			display: inline-flex;
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
		.items li:hover ul.dropdown{display: block; z-index: 500;}
		.vhod li:hover ul.dropdown{display: block; z-index: 500;}
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
		.Name a{
			color: black;
			text-decoration-line: none;
			font-size: 30px;
			font-family: 'Sirin Stencil', cursive;
		}
		.it{
			text-align: center;
			font-size: 12px;
			font-family: 'Sirin Stencil', cursive;
			height: 100px;
		}
	.www1{
		width: 15%;
		height: 100%;
		text-align: left;
		position: relative;
		left: 10px;
		top: 0px;
	}
	.www1 {
		font-size: 20px;
		padding: 10px;
	}
	.www1co a{
		padding: 50px;
		font-size: 30px;
		position: relative;
		top:5px;
		bottom: 5px;
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
		display: flex;
		color: black;
		text-decoration-line: none;
		font-size: 13px;
	}
	.odezhda a{
		color: black;
		text-decoration-line: none;
		font-size: 13px;
	}
	.aksessuary a{
		color: black;
		text-decoration-line: none;
		font-size: 13px;
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
		top: 0px;
		display: flex;
		flex-wrap: wrap;
	}
	.namee p{
		text-align: center;
	}
	.namee {
		display: inline-block;
		justify-content: space-around;
		text-align: center;
		width: 400px;
		height: 600px;
	}
	.www{
		height: 0px;
	}
	.namee img {
  		transition: transform .2s;
  		margin: 0 auto;
	}

	.namee img:hover {
  		-ms-transform: scale(1.3); 
  		-webkit-transform: scale(1.3); 
  		transform: scale(1.3); 
	}
	.overlay a{
		color: black;
		text-decoration-line: none;
	}
	@media screen and (max-width: 480px) {
		body{margin: 0px;padding: 0px;width: 100%;height: 100%;}
		.Name a{
			font-size: 10px;
		}
		.item{
			font-size: 5px;
		}
		.vhod a{
			font-size: 15px;
		}
		.pp a{
			font-size: 5px;
		}
		.items li:hover ul.dropdown{display: none;}
		.cveta{display: none;}
		.razmer{display: none;}
		.namee img{
			width: 170px;
			height: 200px;
			display: flex;
  			transition: transform .2s;
  			margin: 0 auto;

		}
		.namee{
			position: relative;
			left: 40px;
		}
		.namee img:hover{-ms-transform: scale(1); 
  		-webkit-transform: scale(1); 
  		transform: scale(1);}
  		.www{width: 100%; height: 0;}
		.www1 h3{
			font-size: 12px;
		}
		.www1 p{
			font-size: 8px;
		}

	}
	@media screen and (max-width: 667px){
		.items{
			margin-left: 30px;
		}
	}
	@media screen and (max-width: 854px){
		body{margin: 0px;padding: 0px;width: 100%;height: 100%;}
		.Name a{
			font-size: 20px;
		}
		.item{
			font-size: 10px;
		}
		.vhod a{
			font-size: 20px;
		}
		.pp a{
			font-size: 10px;
		}
		.items li:hover ul.dropdown{display: none;}
		.cveta{display: none;}
		.razmer{display: none;}
		.namee img{
			width: 250px;
			height: 250px;
			display: flex;
		}
		.namee{
			position: relative;
			left: 40px;
		}
		.namee img:hover{-ms-transform: scale(1); 
  		-webkit-transform: scale(1); 
  		transform: scale(1);}
  		.www{width: 100%; height: 0;}
		.www1 h3{
			font-size: 15px;
		}
		.www1 p{
			font-size: 13px;
		}

	}	
	.kupit a{
		color: black;
		text-decoration-line: none;
	}
</style>
	<div class="main">
		<div class="Name">
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
						<li><a href="">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="womans.php?name=Пальто">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="womans.php?name=Платья">Платья</a></li>
								<li><a href="">Комбинезоны</a></li>
								<li><a href="">Кардиганы и свитеры</a></li>
								<li><a href="womans.php?name=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="">Брюки</a></li>
								<li><a href="womans.php?name=Джинсы">Джинсы</a></li>
								<li><a href="">Топы</a></li>
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
						<li><a href="">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="man.php?name=Пальто">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="">Толстовки</a></li>
								<li><a href="">Кожа</a></li>
								<li><a href="man.php?name=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="man.php?name=Брюки">Брюки</a></li>
								<li><a href="man.php?name=Джинсы">Джинсы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="man.php?name=Обувь">Обувь</a></li>
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
						<li><a href="">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="girls.php?name=Платья">Платья</a></li>
								<li><a href="">Комбинезоны</a></li>
								<li><a href="">Кардиганы и свитеры</a></li>
								<li><a href="girls.php?name=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="">Брюки</a></li>
								<li><a href="girls.php?name=Брюки">Джинсы</a></li>
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
						<li><a href="">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="">Пальто</a></li>
								<li><a href="">Куртки</a></li>
								<li><a href="">Костюмы</a></li>
								<li><a href="">Комбинезоны</a></li>
								<li><a href="">Кардиганы и свитеры</a></li>
								<li><a href="boys.php?name=Рубашки">Рубашки</a></li>
								<li><a href="">Футболки и топы</a></li>
								<li><a href="boys.php?name=Брюки">Брюки</a></li>
								<li><a href="boys.php?name=Джинсы">Джинсы</a></li>
								<li><a href="">Пижамы</a></li>
							</ul>
						</li>
						<li><a href="">Аксессуары</a>
							<ul class="dropdownTwo">
								<li><a href="boys.php?name=Обувь">Обувь</a></li>
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
		</div></div>
		<hr>
	<div class="it">Бесплатная доставка от KZT 11 500</div>
<div class="www">
	<div class="www1">
		<div class="www1co">
		<div class="odezhda">
			<h3>ОДЕЖДА</h3>
			<a href=""><p>Пальто</p></a>
			<a href=""><p>Куртки</p></a>
			<a href=""><p>Костюмы</p></a>
			<a href=""><p>Толстовки</p></a>
			<a href=""><p>Комбинезоны</p></a>
			<a href=""><p>Футболки</p></a>
			<a href=""><p>Свитеры</p></a>
			<a href="boys.php?name=Рубашки"><p>Рубашки</p></a>
			<a href=""><p>Футболки</p></a>
			<a href="boys.php?name=Брюки"><p>Брюки</p></a>
			<a href="boys.php?name=Джинсы"><p>Джинсы</p></a>
		</div>
		<div class="aksessuary">
			<h3>АКСЕССУАРЫ</h3>
			<a href="boys.php?name=Обувь"><p>Обувь</p></a>
			<a href=""><p>Сумки</p></a>
			<a href=""><p>Шарфы</p></a>
			<a href=""><p>Солнцезащитные очки</p></a>
			<a href=""><p>Ремни</p></a>
			<a href=""><p>Шапки и перчатки</p></a>
		</div></div>
		<div class="cveta">
			<h3>ЦВЕТА</h3>
			<form action="action.php" method="get">
				<div class="item">
					<input type="checkbox" id="a" value="Черные" name="action">
					<label for="a">Черные</label>
				</div>
				<div class="item">
					<input type="checkbox" id="b" value="Белые" name="action">
					<label for="b">Белые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="c" value="Красные" name="action">
					<label for="c">Красные</label>
				</div>
				<div class="item">
					<input type="checkbox" id="d" value="Серые" name="action">
					<label for="d">Серые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="e" value="Синие" name="action">
					<label for="e">Синие</label>
				</div>
				<div class="item">
					<input type="checkbox" id="f" value="Бежевые" name="action">
					<label for="f">Бежевые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="g" value="Зеленые" name="action">
					<label for="g">Зеленые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="h" value="Коричневые" name="action">
					<label for="h">Коричневые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="i" value="Кремовые" name="action">
					<label for="i">Кремовые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="j" value="Розовые" name="action">
					<label for="j">Розовые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="k" value="Желтые" name="action">
					<label for="k">Желтые</label>
				</div>
				<div class="item">
					<input type="checkbox" id="l" value="Фиолетовые" name="action">
					<label for="l">Фиолетовые</label>
				</div></form>
		</div>
		<div class="razmer">
			<h3>Размер</h3>
			<form action="action.php">
				<div class="item">
					<input type="checkbox" id="m">
					<label for="m">XS</label>
				</div>
				<div class="item">
					<input type="checkbox" id="n">
					<label for="n">S</label>
				</div>
				<div class="item">
					<input type="checkbox" id="o">
					<label for="o">M</label>
				</div>
				<div class="item">
					<input type="checkbox" id="p">
					<label for="p">L</label>
				</div>
				<div class="item">
					<input type="checkbox" id="q">
					<label for="q">XL</label>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="www">
	<div class="www2">
		<?php
			$type=[["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020613_77_D1.jpg?ts=1530791370950&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010614_76-99999999_01.jpg?ts=1536834792970&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33010614_94_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33071048_37-99999999_01.jpg?ts=1535535140756&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33013046_99_D1.jpg?ts=1533116125224&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055720_77_D1.jpg?ts=1535708194222&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043043_36_D1.jpg?ts=1531758887956&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090590_92.jpg?ts=1528979730394&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33047682_65_D1.jpg?ts=1538562793887&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055726_54_D5.jpg?ts=1538055203988&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083034_92-99999999_01.jpg?ts=1532422937377&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063024_99.jpg?ts=1536076859053&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33053033_16-99999999_01.jpg?ts=1535027779600&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063024_76_D1.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063023_28.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063023_56-99999999_01.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33038809_99.jpg?ts=1538562793887&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055726_92_D1.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33067656_43_D1.jpg?ts=1536076859053&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33060623_01-99999999_01.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33053743_70.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33047657_99-99999999_01.jpg?ts=1542302039005&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060623_56.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33070625_01_D1.jpg?ts=1529502659683&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33013037_16.jpg?ts=1533724400141&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060623_59.jpg?ts=1533739701716&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33050448_52_D4.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070655_TM-99999999_01.jpg?ts=1530261534927&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070911_TN-99999999_01.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080724_TO_D1.jpg?ts=1531758887956&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040656_TU-99999999_01.jpg?ts=1543836819752&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060762_BL.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33003018_TO_D1.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33003018_TG.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063771_TS-99999999_01.jpg?ts=1533728527480&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070655_TM-99999999_01.jpg?ts=1530261534927&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090816_56_B.jpg?ts=1529322757426&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090756_01_B.jpg?ts=1524756833041&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095003_69_B.jpg?ts=1533220563343&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T2/fotos/S20/23063606_76_B.jpg?ts=1511890641560&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080795_37_B.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095003_69_B.jpg?ts=1533220563343&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063029_01_B.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33015005_20_B.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33093028_99_B.jpg?ts=1533555427669&imwidth=287&imdensity=1.25","price"=>"KZT 10990"]];

		if(isset($_GET['name'])){
			$name =  $_GET['name'];
			foreach($type as $element){
				if($element['name'] == $name)
					echo "<div class=\"namee\">
								<a href =\"#\"><img src=\"" . $element['img'] ."\"/></>
								<div class=\"overlay\"><a href=\"dobavit.php\">"."Добавить в корзину"."
								"."</a></div>
								<div class=\"\">". $element['price'] ."</div>
								<div class=\"kupit\"><a href=\"buy.php\">"."Купить"."
								"."</a></div>
							</div>";
			}
		}
	?>
</div>
</div>
