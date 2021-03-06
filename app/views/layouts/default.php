<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title><?php echo $pageTitle ?></title>
  <?php
  
  if (isset($requiredCss)) {
    foreach ($requiredCss as $css => $use) {
      echo '<link rel="stylesheet" href="' . WWW_CSS_PATH . $css . '" type="text/css" media="all" charset="utf-8" />' . "\n";
    }
  }
  
  if (isset($requiredJs)) {
    foreach ($requiredJs as $js => $use) {
      echo '<script type="text/javascript" language="javascript" charset="utf-8" src="' . WWW_JS_PATH . $js . '"></script>' . "\n";
    }
  }
  
  ?>
</head>
<body>
  <div id="wrapper">
    <header>
      <a href="/">Gestion des Activités de la Société de Service</a>
    </header>
      <?php if($connected) { ?>
<div id="loginInfos">
  <span class="message">Connecté en tant que <a class="name" href="/client/profile">NOM Prénom</a></span>
  <a class="logout" href="/client/auth">Déconnection</a>
</div>
      <?php } ?>
    
		<!-- TODO -->
    <nav><?php 
    foreach ($nav as $link => $n) {
      echo '<a href="'.$link.'">'.$n.'</a> ';
    }?></nav>
    
    <div id="content">
      <?php echo $layoutContent ?>
    </div>

    <footer>
      par Gaetan Renaudeau et Nicolae Namolovan
    </footer>
  </div>
</body>
</html>
