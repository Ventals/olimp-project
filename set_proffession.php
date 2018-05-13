<?php
  require __DIR__ . '/vendor/autoload.php';
  require __DIR__ . '/dotenv-loader.php';
  include_once __DIR__.'/scripts/connect_DB.php';
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

 if (isset($_GET["choise_sphere"]) {
  $sphere = $_GET["choise_sphere"];
  $token = $auth0->getUser()["sub"];
  setProfession($link, $token, )
 } else {
  echo "Не обрано професію";
 }