<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title></title>
    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ERROR | E_PARSE );
    require ('lib/config.php');
    require ('lib/autoload.php');
    require ('lib/plugin/load_css.php');
    require ('lib/plugin/load_bootstrap.php');
    ?>
</head>
<body>
    <?php
    require ('App/viel/topo.php');
    $teste  = new Init(fulano,sapato);

    $teste->acao = 'fsdfsd';

    $fom = new Tform;
    $fom->Tinput();
    $fom->setTtipe('date');

    ?>
</body>
</html>