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
	.kupit a{
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
						<li><a href="womans.php">Одежда</a>
							<ul class="dropdownTwo">
								<li><a href="womans.php?name=Пальто">Пальто</a></li>
								<li><a href="womans.php?name=Куртки">Куртки</a></li>
								<li><a href="womans.php?name=Костюмы">Костюмы</a></li>
								<li><a href="womans.php?name=Платья">Платья</a></li>
								<li><a href="womans.php?name=Комбинезоны">Комбинезоны</a></li>
								<li><a href="womans.php?name=Кардиганы">Кардиганы</a></li>
								<li><a href="womans.php?name=Рубашки">Рубашки</a></li>
								<li><a href="womans.php?name=Футболки">Футболки</a></li>
								<li><a href="womans.php?name=Юбки">Юбки</a></li>
								<li><a href="womans.php?name=Джинсы">Джинсы</a></li>
								<li><a href="womans.php?name=Топы">Топы</a></li>
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
			<a href="womans.php?name=Пальто"><p>Пальто</p></a>
			<a href="womans.php?name=Куртки"><p>Куртки</p></a>
			<a href="womans.php?name=Костюмы"><p>Костюмы</p></a>
			<a href="womans.php?name=Платья"><p>Платья</p></a>
			<a href="womans.php?name=Комбинезоны"><p>Комбинезоны</p></a>
			<a href="womans.php?name=Кардиганы"><p>Кардиганы</p></a>
			<a href="womans.php?name=Рубашки"><p>Рубашки</p></a>
			<a href="womans.php?name=Футболки"><p>Футболки</p></a>
			<a href="womans.php?name=Юбки"><p>Юбки</p></a>
			<a href="womans.php?name=Джинсы"><p>Джинсы</p></a>
			<a href="womans.php?name=Топы"><p>Топы</p></a>
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
			$type=[["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33025720_09-99999999_01.jpg?ts=1531839191559&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31035730_69.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33085760_70.jpg?ts=1535563950083&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31028815_99.jpg?ts=1534873106726&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31055004_99.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33097010_94_D3.jpg?ts=1536928440657&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31060796_96.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33095756_CG-99999999_01.jpg?ts=1535643397220&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33035006_65.jpg?ts=1534926801923&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43090613_99.jpg?ts=1541773990395&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41050808_92-99999999_01.jpg?ts=1541576034199&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41070842_99-99999999_01.jpg?ts=1541420711937&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41040739_02-99999999_01.jpg?ts=1542220614050&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43050975_99.jpg?ts=1542728007847&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43090745_05-99999999_01.jpg?ts=1542306785714&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41085736_99-99999999_01.jpg?ts=1542303229497&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43010753_01-99999999_01.jpg?ts=1541576034199&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43090566_01.jpg?ts=1540827230027&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31057028_08_D2.jpg?ts=1537542543261&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31088807_85_D1.jpg?ts=1536309181965&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31093765_50.jpg?ts=1530295208802&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31090919_09-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33087668_82-99999999_01.jpg?ts=1543948571752&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31065776_92_D2.jpg?ts=1541759814350&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33013830_02-99999999_01.jpg?ts=1531406117577&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31080759_85.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33065802_TG-99999999_01.jpg?ts=1535463160984&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33013713_TM-99999999_01.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055772_TG-99999999_01.jpg?ts=1535455958058&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31005720_78-99999999_01.jpg?ts=1531762661819&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33073644_TO-99999999_01.jpg?ts=1537169601074&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33093744_TO-99999999_01.jpg?ts=1530636222298&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010593_01-99999999_01.jpg?ts=1522863418350&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055708_TS-99999999_01.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33000601_TM-99999999_01.jpg?ts=1529056044147&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33067640_TG-99999999_01.jpg?ts=1536773532978&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33037653_02-99999999_01.jpg?ts=1531849074182&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040467_TM-99999999_01.jpg?ts=1525365215839&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043645_TN.jpg?ts=1529340588473&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31073796_99-99999999_01.jpg?ts=1532003565381&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31067032_05_D2.jpg?ts=1537195055451&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063695_TN-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33073762_91-99999999_01.jpg?ts=1531402500073&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083696_TS-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31077009_70.jpg?ts=1533659913014&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTX7RF_B8_m?&wid=287&imdensity=1.25","price"=>"KZT 50500"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTWEE2_01_m?&wid=287&imdensity=1.25","price"=>"KZT 61000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTXXU5_30_m?&wid=287&imdensity=1.25","price"=>"KZT 75000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTXQFD_40_m?&wid=287&imdensity=1.25","price"=>"KZT 79000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTVS1D_01_m?&wid=287&imdensity=1.25","price"=>"KZT 81000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTW4ZG_01_m?&wid=287&imdensity=1.25","price"=>"KZT 81000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTWEE2_01_m?&wid=287&imdensity=1.25","price"=>"KZT 80000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTXQFD_10_m?&wid=287&imdensity=1.25","price"=>"KZT 76000"],["name"=>"Куртки","img"=>"https://neimanmarcus.scene7.com/is/image/NeimanMarcus/NMTVS1G_03_m?&wid=287&imdensity=1.25","price"=>"KZT 80000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31090942_52-99999999_01.jpg?ts=1531416916426&imwidth=287&imdensity=1.25","price"=>"KZT 27000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33973702_30-99999999_01.jpg?ts=1530520451876&imwidth=287&imdensity=1.25","price"=>"KZT 25000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31063053_12-99999999_01.jpg?ts=1529340588473&imwidth=287&imdensity=1.25","price"=>"KZT 24000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31083797_05-99999999_01.jpg?ts=1531741652352&imwidth=287&imdensity=1.25","price"=>"KZT 26000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31093761_99-99999999_01.jpg?ts=1532093678429&imwidth=287&imdensity=1.25","price"=>"KZT 26000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31070891_52.jpg?ts=1525877299783&imwidth=287&imdensity=1.25","price"=>"KZT 26000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31083797_05-99999999_01.jpg?ts=1531741652352&imwidth=287&imdensity=1.25","price"=>"KZT 28700"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31075734_69-99999999_01.jpg?ts=1534156405825&imwidth=287&imdensity=1.25","price"=>"KZT 25000"],["name"=>"Костюмы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055805_52-99999999_01.jpg?ts=1537885996015&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070441_99-99999999_01.jpg?ts=1522319608661&imwidth=287&imdensity=1.25","price"=>"KZT 15000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31041021_02-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 18000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080799_52.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 17500"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090777_02_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 14000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33081034_TM-99999999_01.jpg?ts=1529409588264&imwidth=287&imdensity=1.25","price"=>"KZT 16400"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31083050_56-99999999_01.jpg?ts=1529508235870&imwidth=287&imdensity=1.25","price"=>"KZT 14000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055032_56-99999999_01.jpg?ts=1534156405825&imwidth=287&imdensity=1.25","price"=>"KZT 17000"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33043793_99-99999999_01.jpg?ts=1528911284888&imwidth=287&imdensity=1.25","price"=>"KZT 15400"],["name"=>"Комбинезоны","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063809_65-99999999_01.jpg?ts=1533577422543&imwidth=287&imdensity=1.25","price"=>"KZT 18000"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33085801_56-99999999_01.jpg?ts=1537522398365&imwidth=287&imdensity=1.25","price"=>"KZT 9000"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33097631_81-99999999_01.jpg?ts=1538670821529&imwidth=287&imdensity=1.25","price"=>"KZT 7000"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33085801_43-99999999_01.jpg?ts=1537293867755&imwidth=287&imdensity=1.25","price"=>"KZT 8500"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095712_35.jpg?ts=1533552549917&imwidth=287&imdensity=1.25","price"=>"KZT 6800"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33090550_07-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 5500"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33075746_70.jpg?ts=1530547613026&imwidth=287&imdensity=1.25","price"=>"KZT 7500"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S6/33095724_05.jpg?ts=1531151561998&imwidth=287&imdensity=1.25","price"=>"KZT 8000"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S6/33063697_76-99999999_01.jpg?ts=1533229075952&imwidth=287&imdensity=1.25","price"=>"KZT 5500"],["name"=>"Кардиганы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33037650_37.jpg?ts=1532943520678&imwidth=287&imdensity=1.25","price"=>"KZT 7000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S6/33003801_02.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 3000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010522_85-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 3500"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33020550_92-99999999_01.jpg?ts=1529401177463&imwidth=287&imdensity=1.25","price"=>"KZT 4500"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33030947_02.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 5000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070704_20-99999999_01.jpg?ts=1532346159886&imwidth=287&imdensity=1.25","price"=>"KZT 4000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33015791_01-99999999_01.jpg?ts=1532596202462&imwidth=287&imdensity=1.25","price"=>"KZT 6000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33041067_40-99999999_01.jpg?ts=1531416916426&imwidth=287&imdensity=1.25","price"=>"KZT 4500"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33080703_02-99999999_01.jpg?ts=1528908162308,/T3/fotos/S20/33080703_02.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 5000"],["name"=>"Футболки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33035773_01.jpg?ts=1534260844698&imwidth=287&imdensity=1.25","price"=>"KZT 4000"],["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31050771_99_D2.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 2500"],["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33060582_05-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 2500"],["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040997_02-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 2700"],["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31050771_99-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 2500"],["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33090847_01-99999999_01.jpg?ts=1529058987379&imwidth=287&imdensity=1.25","price"=>"KZT 2300"],
			["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S6/31040946_37.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 5000"],
			["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33031133_01-99999999_01.jpg?ts=1530520451876&imwidth=287&imdensity=1.25","price"=>"KZT 2000"],
			["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S6/33060666_85.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 4000"],
			["name"=>"Топы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S6/33030617_87.jpg?ts=1525271733883&imwidth=287&imdensity=1.25","price"=>"KZT 4500"]];
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













































