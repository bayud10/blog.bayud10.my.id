<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'bayudmyi_phpcrud';
    $DATABASE_PASS = 'passwords12345';
    $DATABASE_NAME = 'bayudmyi_phpcrud';
    try {
    	return  new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Project UTS - BayuD</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" 
    integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" 
    crossorigin="anonymous"/>
    		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" 
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" 
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" 
  integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" 
  crossorigin="anonymous"></script>
  
  
    <style type="text/css">
    .footer.segment {
      padding: 5em 0em;
    }
  </style>
  
  </head>


<body>
    <!-- MENU DISINI GAN -->
<div class="ui inverted segment">
  <div class="ui inverted secondary pointing menu">
    <a class="item" href="/">
      Home
    </a>
    <a class="item" href="/blogs.php">
      Blogs
    </a>
      <a class="active item" href="/read.php">
      Contributors
    </a>
  <div class="right menu">
    <div class="ui buttons">
        <button onclick="window.location.href='/login.php';" class="ui blue button">Login</button>
        <div class="or"></div>
        <button onclick="window.location.href='/register.php';" class="ui positive button">Register</button>
        </div>
        </div>
        </div>
    </div>
EOT;
}

function template_footer() {
echo <<<EOT
    <div class="ui hidden divider"></div>
<div class="ui hidden divider"></div>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="seven wide column">
          <h4 class="ui inverted header">Project UTS</h4>
          <p>© Bayu Dwinata Putra, 2020</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
EOT;
}

function neutral_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Project UTS - BayuD</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" 
    integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" 
    crossorigin="anonymous"/>
    		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" 
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" 
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" 
  integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" 
  crossorigin="anonymous"></script>
  
  
    <style type="text/css">
    .footer.segment {
      padding: 5em 0em;
    }
  </style>
  
  </head>


<body>
    <!-- MENU DISINI GAN -->
<div class="ui inverted segment">
  <div class="ui inverted secondary pointing menu">
    <a class="item" href="/">
      Home
    </a>
    <a class="item" href="/blogs.php">
      Blogs
    </a>
      <a class="item" href="/read.php">
      Contributors
    </a>
  <div class="right menu">
    <div class="ui buttons">
        <button onclick="window.location.href='/login.php';" class="ui blue button">Login</button>
        <div class="or"></div>
        <button onclick="window.location.href='/register.php';" class="ui positive button">Register</button>
        </div>
        </div>
        </div>
    </div>
EOT;
}
?>