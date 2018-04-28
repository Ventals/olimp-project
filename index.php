<?php

    // includes
    require __DIR__ . '/scripts/connect_DB.php';

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

    #####################


    #####################

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
    if (isset($_GET['accessToken'])) {
        $auth0->convert_access_token_to_user($_GET['accessToken']);
        $userInfo = $auth0->getUser();
    }

?>
<html>
<head>
    <script src="http://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awesome from BootstrapCDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="public/app.css" rel="stylesheet">
</head>
<body class="home">
    <div class="container">
        <div class="login-page clearfix" id="auth-container">
            <? if (!$userInfo): ?>
            <script src="https://cdn.auth0.com/js/lock/11.3.0/lock.min.js"></script>
            <script>
                // Initializing our Auth0Lock
                if (typeof localStorage.profile !== 'undefined' && typeof localStorage.accessToken !== 'undefined') {
                    console.log("123");
                    var options = {
                        container: 'auth-container',
                        redirect: false,
                        additionalSignUpFields: [{
                            name: "Nickname",
                            placeholder: "Ваш Нікнейм",
                            // The following properties are optional
                            validator: function(address) {
                                return {
                                valid: address.length != 0,
                                hint: "Це поле є обовязковим" // optional
                                };
                            }
                        }]
                    };
                    var lock = new Auth0Lock(
                        '4p3SIDzPf50lm2pZx9RDI1gDsdHacbme',
                        'vnzquest.eu.auth0.com',
                        options
                    );

                    // Listening for the authenticated event
                    lock.on("authenticated", function(authResult) {
                        // Use the token in authResult to getUserInfo() and save it to localStorage
                        lock.getUserInfo(authResult.accessToken, function(error, profile) {
                            if (error) {
                            // Handle error
                            console.log("oops");
                            return;
                            }

                            document.getElementById('nick').textContent = profile.nickname;

                            localStorage.setItem('accessToken', authResult.accessToken);
                            localStorage.setItem('profile', profile);
                        });
                    });
                    console.log("show");
                    lock.show();
                } else {
                    var accessToken = localStorage.getItem("accessToken");
                    var profile     = localStorage.getItem("profile");
                    <? if (!isset($_GET['sent']) & !$_GET['sent']): ?>
                        console.log("location set");
                        window.location.href = 'http\://olimp-project-backend/?sent=true&accessToken=' + accessToken;
                        console.log("location set 2");
                    <? endif ?>
                }  
            </script>
            <? else: ?>
                <img scr="<?= $userInfo['picture']; ?>" width="100px" >
                <p>Nikcname - <?= $userInfo['nickname'] ?></p>
                <a href="logout.php">logout</a>

            <? endif ?>

            </div>
        <div id="nick"></div>
    </div>
</body>
</html>
