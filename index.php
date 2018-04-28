<?php

  // Require composer autoloader
  require __DIR__ . '/vendor/autoload.php';

  require __DIR__ . '/dotenv-loader.php';

  require __DIR__ . "/scripts/connect_DB.php";

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
    <script src="http://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    
    <?php if(!$userInfo): ?>
      <!-- ************************************************************************* -->
      <!-- ***********************FIRST VISIT PAGE********************************** -->
    <div class="block1" id="block1">
      <div class = "buttons">
        <p class = "logo">  </p>
        <li><a href="#registrationFormBlock">
          <ul class="in">
            
          </ul>
         </a></li>
        <li><a href="#registrationFormBlock">
          <ul class="reg">

          </ul>
         </a></li>
      </div>
      <div class="sbtn">
        <li><a href="#block1" class="btn1"></a></li>
        <li><a href="#block2" class="btn2"></a></li>
        <li><a href="#registrationFormBlock" class="btn3"></a></li>
      </div>
      <div class = "text"> 
        <p class="head">OlimpProject</p>
        <p> Тут должен быть какой-то текст про нелегкую судьбу школьников, которые никак не могут решить в какой институт подавать заявку, или вообще даже не умеют ее подавать. А в конце типа "Якщо ві потрапили у таку ситуацію, наш квест допоможе вам її вирішити."</p>
        <ul class="img1">
          <ul class="message">
            Тут может быть каокое-то сообщене, ссылка, или кнопка
          </ul>
        </ul>
      </div>
      <a href = "#registrationFormBlock">
        <ul class="row">

        </ul>
      </a>
    </div>
  </div>


    <div class = "block2" id="block2">
      <div class = "text"> 
        <p class="head">Що ви дізнаєтесь завершивши наш квест?</p>
        <p> Ну и тут собственно про возможности нашего квеста. Равным образом начало повседневой работы по формированию играет важную роль в формировании форм развития. Товарищи! Новая модель организационной деятельрости позволяет выполнять важные задания по разработке направлений прогрессивного развития. С другой стороны</p>
        <ul class="img2">
          <ul class="message1">
            Кстати таким, или похожим образом, еще немного допиленым, можно реализовать анимацию в квесте
          </ul>
        </ul>
      </div>
    </div>

    <div class ="block3" id="registrationFormBlock">
      <div class ="registrationFormBlock"> 
        <p> Щоб почати квест - увійдіть у свій аккаунт або зареєструйте новий</p>
        <div class= "registrationFormSwitchButtons">
          <a href="login.php" for="email">
          <ul class="in1" id="in1">
            
          </ul>
        </a>
        <ul class="out">
                  
        </ul>
          <a href="login.php">
            <ul class="reg1">
              
            </ul>
          </a>
        </div>

      </div>
    </div>
   
    <!-- ***********************FIRST VISIT PAGE********************************** -->
    <!-- ************************************************************************* -->
    <?php else: ?>
      <img class="avatar" src="<?php echo $userInfo['picture'] ?>"/>
      <h2>Welcome <span class="nickname"><?php echo $userInfo['nickname'] ?></span></h2>
      <a href="logout.php">logout</a>
      <?
        $query = "SELECT `id` FROM `users` WHERE `token` = '".$userInfo['sub']."'";
        $result = mysqli_query($DB_CONNECTION, $query);
        if (mysqli_num_rows($result) == 0) {
          echo "  <form action=\"scripts/createUser.php\" method=\"POST\">
                      First visit form <br>
                    <input type=\"name\" name=\"name\" placeholder=\"Name\" /> <br>
                    <input type=\"surname\" name=\"surname\" placeholder=\"surname\" /> <br>
                    <input type=\"submit\">
                  </form>";
        }
      ?>
    <?php endif ?>
</body>
</html>
