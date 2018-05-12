<?php

  // Require composer autoloader
  require __DIR__ . '/vendor/autoload.php';

  require __DIR__ . '/dotenv-loader.php';

  include_once __DIR__ . "/scripts/connect_DB.php";

  use Auth0\SDK\Auth0;


  $domain        = getenv('AUTH0_DOMAIN');
  $client_id     = getenv('AUTH0_CLIENT_ID');
  $client_secret = getenv('AUTH0_CLIENT_SECRET');
  $redirect_uri  = getenv('AUTH0_CALLBACK_URL');
  $audience      = getenv('AUTH0_AUDIENCE');

  if($audience == ''){
    $audience = 'https://' . $domain . '/userinfo';
  }

  $auth0 = new Auth0([
    'domain' => $domain,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'audience' => $audience,
    'scope' => 'openid profile',
    'persist_id_token' => true,
    'persist_access_token' => true,
    'persist_refresh_token' => true,
  ]);

  $userInfo = $auth0->getUser();


?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Головна сторінка</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_c.css">
    <link rel="alternate stylesheet" type="text/css" href="stylecab.css" id="cab_style">
    <link rel="icon" 
          type="image/ico" 
          href="images/favicon.ico">

    <script src="js/jquery-3.3.1.slim.js" type="text/javascript"></script>
    <script type="text/javascript" src = "js/cabinetScript.js"> </script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
    
    <?php if(!$userInfo): ?>
      <!-- ************************************************************************* -->
      <!-- ***********************FIRST VISIT PAGE********************************** -->
      <script>
        document.getElementById("cab_style").setAttribute('rel', 'alternate stylesheet');
      </script>
    <div class="block1" id="block1">
      <div class = "buttons">
        <p class = "logo-main">  </p>
        <li><a href="login.php">
          <ul class="in">
            
          </ul>
         </a></li>
        <li><a  href="login.php">
          <ul class="reg">

          </ul>
         </a></li>
      </div>
      <div class="sbtn">
        <li><a href="#block1" class="btn1"></a></li>
        <li><a href="#block2" class="btn2"></a></li>
        <li><a href="#registrationFormBlock" class="btn3"></a></li>
      </div>
      <ul class="img1">
          <ul class="message">
            Тут может быть каокое-то сообщене, ссылка, или кнопка
          </ul>
        </ul>
      <div class = "text"> 
        <p class="head">OlimpProject</p>
        <p> В наш час школярам дуже важко зрозуміти ким вони хочуть стати, і як вірно вибрати професію. Всі ці складнощі під час вступної компанії дуже збивають з пантилику. Якщо ж і ви потрапили у таку ситуацію, наш квест допоможе вам її вирішити."</p>
      </div>
      <a href = "#registrationFormBlock">
        <ul class="row">

        </ul>
      </a>
    </div>
  </div>


    <div class = "block2" id="block2">
      <ul class="img2">
          <ul class="message1">
            Кстати таким, или похожим образом, еще немного допиленым, можно реализовать анимацию в квесте
          </ul>
        </ul>
      <div class = "text"> 
        <p class="head">Що ви дізнаєтесь завершивши наш квест?</p>
        <p> По закінченню цього квесту ви зможете вирішити де вчитися, зрозумієте як подавати заявку на вступ , будете розуміти свої шанси поступити на бюджет та ознайомитесь з майбутнью професією.</p>
      </div>
    </div>

    <div class = "block3" id="registrationFormBlock">
      <div class = "registrationFormBlock"> 
        <p> Щоб почати квест - увійдіть у свій аккаунт або зареєструйте новий</p>
        <div class= "registrationFormSwitchButtons">
          <a href="login.php">
          <ul class="in1" id="in1">
            
          </ul>
          </a>
          <a href="login.php">
            <ul class="reg1">
              
          </ul>
          </a>
        </div>
        <form class = "registrationForm">
	
					<div class = "orline">
						
					</div>
					<div class="socshare">
						Поділіться з друзями в соц-мережах
					</div>
					<div class="soc">
						<a href="https://www.facebook.com/"><li class="fb"></li></a>
						<a href="https://twitter.com/login?lang=ru"><li class="tw"></li></a>
						<a href="https://myaccount.google.com/?hl=ru"><li class="goo"></li></a>
					</div>
				</form>
      </div>
    </div>
   
    <!-- ***********************FIRST VISIT PAGE********************************** -->
    <!-- ************************************************************************* -->
    <?php else: ?>
    <!-- ************************************************************************* -->
    <!-- ******************************CABINET************************************ -->
    <script>
      document.getElementById("cab_style").setAttribute('rel', 'stylesheet');
    </script>
    
	<ul class="out">
									
			</ul>
			<ul class="form">
				<li>
					<img src="images/comp.png">	
					<h2>Комп'ютер</h2>
					В комп'ютері починається перший етап квесту, вибір професії.
				</li>
				<li>
					<img src="images/nout.png">
					<h2>Ноутбук</h2>
					Ноутбук відповідає за вибір ВНЗ на карті України, залежить від проіесії.
				</li>
				<li>
					<img src="images/board.jpg">
					<h2>Дошка</h2>
					Дошка показує вам інформацію про ваші останні дії та вибори.
				</li>
				<li>
					<img src="images/bag.png">
					<h2>Портфель</h2>
					Портфель потрібен для того щоб побачити список доступних і пройдених квестів.
				</li>
				<li>
					<img src="images/zno.png">
					<h2>Збірник ЗНО</h2>
					В збірнику тестів ЗНО ви зможете підготуватись до здачі, здавши екзамени потрібні для вашого вступу.
				</li>
			</ul>
			<ul class="compscreen">
				<ul class="next" id="next1">Наступна професія</ul>
				<ul class="next" id="next2">Наступна професія</ul>
				<ul class="next" id="next3">Наступна професія</ul>
				<ul class="slider">
					<li class="prof1">
						<img src="images/prof1.jpg">
						<p>
							Юрист - це фахівець в галузі права. Він знає закони і правові норми, вміє їх використовувати і здатний навчати їх основам інших. Це експерт в області юриспруденції, який може займати будь-яку правову посаду, від адвоката до судді. Для цього необхідно отримати вищу юридичну освіту.
						</p>
						<ul class="menu">
						<ul class="choose" id="choose1">
							Обрати професію
						</ul>
					</ul>
					</li>
					<li class="prof2">
						<img src="images/prof2.jpg">
						<p>
							Програміст - це фахівець, який займається розробкою програмного забезпечення для персональних, вбудованих, промислових і інших різновидів комп'ютерів, тобто програмуванням. Прикладний - це фахівець, який здійснює розробку і налагодження програм для вирішення різних завдань.
						</p>
						<ul class="menu">
						<ul class="choose" id="choose2">
							Обрати професію
						</ul>
					</ul>
					</li>
					<li class="prof3">
						<img src="images/prof3.jpg" class="bigimg">
						<p>
							Механік - кваліфікований робітник, який має професійну освіту і зайнятий обслуговуванням, ремонтом технічних засобів (необов'язково пов'язаних з механізмами), наприклад: автомеханік, авіамеханік, електромеханік, радіомеханік, механік по ремонту побутової техніки і т. Д.
						</p>
						<ul class="menu">
						<ul class="choose" id="choose3">
							Обрати професію
						</ul>
					</ul>
					</li>
				</ul>
			

			</ul>
			<div class="noutscreen">
				<p id = "title"> Оберіть ВНЗ </p>
				<div id = "map"> </div>
				<div hidden id = "dialog">
					<p> <output id = "name"> </output> </p> 
					<img id = "image">
					<p> <output id = "description"> </output> </p>
					<button onclick = "VNZSelected()" class = "vnzbtn" id = "choiseadd"> Обрати цей ВНЗ </button>
					<button onclick = "backToMap()" class = "vnzbtn"> Повенутися до мапи </button>
				</div>
				<script
					src = "js/MapInCabinetScript.js"> </script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhB6Pq1U-G2R70VstNVDnESvSCePbjQd0&callback=initMap"> </script>
			</div>

			<div class="znoscreen">
				<h3>Іспити ЗНО</h3>
				<p>Тут ви можете здати ЗНО з потрібних вам предметів, які зазначені у вікні вибору ВНЗ, але й пройти усі ці екзамени буде корисно для кожного. Онлайн тестування не містить деяких завдань, максимальна оцінка за укр.мову 180 балів(відсутній твір), з математики - 190 балів(відсутнє відкрите завдвння).</p>
				<div class="bookshelf">
				<li id = "book1"><a href="https://zno.osvita.ua/ukrainian/281/">Українська мова та література</a></li>
				<li id = "book2"><a href="https://zno.osvita.ua/mathematics/290/">Математика</a></li>
				<li id = "book3"><a href="https://zno.osvita.ua/ukraine-history/282/">Історія України</a></li>
				<li id = "book4"><a href="https://zno.osvita.ua/english/283/">Англійська мова</a></li>
				<li id = "book5"><a href="https://zno.osvita.ua/physics/291/">Фізика</a></li>
			</div>
			</div>

			<div class="out1">

			</div>
			<div class="mesform">

			</div>

			<div class="mom">
				<ul class="talk">
					
				</ul>
			</div>

			<div class="dad">
				<ul class="talk1">

				</ul>
			</div>

			<div class="help">
			Підказка
		</div>
		<div class = "room">
			<div>
			<p class = "title"> Кімната </p>
			<a href="" class="support">Підтримка vnzquest@gmail.com</a>
			<a href="StartPageRaedy.html">
			<div class="logo">
		</div>
	</a>
		</div>
			<div class="board" id = "table">
				<div class="prof">
					
				</div>
				<div class="vnz">
					
				</div>
				<div class="cbal">
					
				</div>
		</div>

			<div class="comp" id = "computer">
		</div>

			<div class="laptop" id = "laptop">
		</div>

			<div class="zno" id = "ZNO">
		</div>

			<div class="bag" id = "briefcase">
		</div>

		</div>
		<div class = "back">
			Назад
		</div>
		<a class="link" href = "calculator.html">
			Розрахунок конкурсного балу
			</a>
		<a href="StartPageRaedy.html">
		<div class="exit">

		</div>
	</a>


    <!-- ************************************************************************* -->
    <!-- **************************END CABINET************************************ -->
    <?php endif ?>
</body>
</html>
