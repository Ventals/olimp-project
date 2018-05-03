<?php

  // Require composer autoloader
  require __DIR__ . '/vendor/autoload.php';

  require __DIR__ . '/dotenv-loader.php';

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_c.css">
    <link rel="alternate stylesheet" type="text/css" href="stylecab.css" id="cab_style">
    <script src="js/jquery-3.3.1.slim.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/script1.js"></script>
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
        <li><a href="#registrationFormBlock">
          <ul class="in">
            
          </ul>
         </a></li>
        <li><a  href="#registrationFormBlock">
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
          <input type = "text" class="input" placeholder="Ваше пошта" id="email">
          <input type = "password" class="input" placeholder="Пароль" id="pass">
          <div class = "orline"></div>
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
      На комп'ютері ви зможете побачити карту квесту...
    </li>
    <li>
      <img src="images/nout.png">
      <h2>Ноутбук</h2>
      На ноутбуці ви знайдете...
    </li>
    <li>
      <img src="images/board.jpg">
      <h2>Дошка</h2>
      Дошка показує вам...
    </li>
    <li>
      <img src="images/bag.png">
      <h2>Портфель</h2>
      Портфель потрібен для того щоб...
    </li>
    <li>
      <img src="images/zno.png">
      <h2>Збірник ЗНО</h2>
      В збірнику тестів ЗНО ви зможете підготуватись до здачі...
    </li>
    </ul>
    <div class="help">
    Підказка
    </div>
    <div class = "room">
    <div>
      <p class = "title"> Кімната </p>
      <a href="logout.php">
    <div class="logo">
    </div>
    </a>
    </div>
    <div class="board" id = "table"
    onmouseover = "tableMouseOver()" onmouseout = "tableMouseOut()" onclick = "tableClick()">

    </div>

    <div class="comp" id = "computer"
    onmouseover = "computerMouseOver()" onmouseout = "computerMouseOut()"onclick = "computerClick()">
    </div>

    <div class="laptop" id = "laptop"
    onmouseover = "laptopMouseOver()" onmouseout = "laptopMouseOut()" onclick = "laptopClick()">
    </div>

    <div class="zno" id = "ZNO"
    onmouseover = "ZNOMouseOver()" onmouseout = "ZNOMouseOut()" onclick = "ZNOClick()">
    </div>

    <div class="bag" id = "briefcase"
    onmouseover = "briefcaseMouseOver()" onmouseout = "briefcaseMouseOut()" onclick = "briefcaseClick()">
    </div>

    </div>
    <a class="link" href = "calculator.html">
    Розрахунок конкурсного балу
    </a>


    <!-- ************************************************************************* -->
    <!-- **************************END CABINET************************************ -->
    <?php endif ?>
</body>
</html>
