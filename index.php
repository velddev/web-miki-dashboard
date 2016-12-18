<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
  <header>
    <div class="logo"/>
    </div>
  </header>

        <?php

        include 'vendor/autoload.php';

        include __DIR__ . '/../credentials.php';

        ini_set('display_errors', '1');

        // TODO: fix this

  /*      if(!isset($_SESSION['token']))
        {
          if (!isset($_GET['code']))
          {
    //          echo '
    //          <center>
      //        <div class="title"> Miki Dashboard</div>
        //      <div class="description"> Control your account in this web app! </div>
          //    <input type="button" class="discord" onclick="location.href=`'.$provider->getAuthorizationUrl(['scope' => ['identify', 'guilds',],]).'`" value="Login with Discord"/>
            //  </center>';
          }
          else
          {
              session_start();

                $token = $provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);
                $_SESSION['token'] = $token;
              }

              // Get a refresh token
              $refresh = $provider->getAccessToken('refresh_token', [
                  'refresh_token' => $_SESSION['token']->getRefreshToken(),
              ]);
          }
        else
        {
          $_SESSION['token'] = $provider->getAccessToken('authorization_code', [
              'code' => $_SESSION['token']
          ]);
        }

        // Get the user object.
        //$user = $provider->getResourceOwner($_SESSION['token']);
        //$_SESSION['user'] = $user;

        if(isset($_SESSION['user']))
        {
          echo '
          <center>
            <div class="avatar"><img src='.$_SESSION['user']->avatar'></img></div>
            <div class="title"> Welcome '.$_SESSION['user']->username.'</div>
            <div class="description"> Here are your buttons to press. (coming soon)</div>
            <input type="button" value="link with patreon"/>
          </center>
          ';
        }*/
        ?>

  <footer>
   v0.1 | report bugs to
    <a href="https://github.com/velddev/web-miki-patreon/issues">github</a>
  </footer>
</body>
