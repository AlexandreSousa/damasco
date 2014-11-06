<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title></title>
    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ERROR | E_PARSE | E_WARNING );
    require ('lib/config.php');
    require ('lib/autoload.php');
    require ('lib/plugin/load_css.php');
    require ('lib/plugin/load_js.php');
    require ('lib/plugin/load_bootstrap.php');
    ?>
</head>
<body>
    <?php
    require ('App/viel/topo.php');
    ?>
    <div class="geral">
    <?php
    require ('App/viel/menu.php');
    echo '<br>';

    require ('query.php');

    $fom = new Tform;
    $fom->setTtipe('date');
    $fom->Tinput();


    ?>


    <input type="text" list="cidades" autocomplete="on">
    <datalist id="cidades">
        <option value="Brasília">
        <option value="Rio de Janeiro">
        <option value="São Paulo">
    </datalist>




    </div>
</body>
</html>