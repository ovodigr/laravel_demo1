<html>
    <head>
        <title>Біттернет</title>
        <link rel="stylesheet" href="/css/page.css" type="text/css">
    </head>
    <body>
		<h3>Привіт, 
			<div class="div">
				<div class="page">
					<h3>
						<button style="height:50px" onclick="m=show('menu',m);">Показати меню</button>
						<button align="right" style="height:50px" onclick="window.location.reload();">Обновити</button>
						<div class='menu'>
							<p class="l"><a  href='/a/1ab.php'>База   </a></p>
							<p class="l"><a  href='/l_w.php'>Наряд</a></p>
							<p class="l"><a  href='/w.php'>Статистика</a></p>
							<p class="l"><a  href='/option.php'>Настройки</a></p>
							<p class="l"><a  href='/l_k.php'>Комутатори</a></p>
							<p class="l"><a  href='/refresh_rao.php'>Комутатори PAO</a></p>
							<p class="l"><a  href='/refresh_ch_rao.php'>Список комутаторів</a></p>
							<p class="l"><a  href='/open_port.php'>Відкрити порт  </a></p>
							<p class="l"><a  href='modules/kurs.php'>Курс валют </a></p>
						</div>
					</h3>
					<script type="text/javascript">
					m=false;
					function show(a,b)
					{	
						var h = document.getElementsByClassName(a), i;
						for (var i = 0; i < h.length; i ++)
						{
							if(!b)
							h[i].style.display = "none";
							else
							h[i].style.display = "block";
						}
							if (b)
							b=false
							else
							b=true;
							return b
					}

					m=show("menu",m); 
					</script>


					<h3>
					<p align="center">Наряд</p>
					</h3>

					<button onclick="b=show('h',b);">Показати коментарі</button>
					<hr size=10 noshade color="00FF00">

					@yield('content')

					<hr size=10 noshade color="00FF00">
				</div>	
			
				<script type="text/javascript">
						 b=true;
						 b=show("h",!b); 
				</script>	
			</div>
		</h3>
    </body>
</html>
