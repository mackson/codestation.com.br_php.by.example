<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            PHP Certification | Source Files and PHP Tags
        </title>
       
        <!-- Bootstrap -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../../bootstrap/css/prettify.css" rel="stylesheet" media="screen">
        
    </head>
    <body>

        <article class="page-header">
            <h1>PHP Certification <small>Source Files and PHP Tags</small></h1>
        </article>
        
       <article class="container-fluid">
            <section class="row-fluid">
                 <?php 
                    require('../../inc/menu.php');
                 ?>
                <section class="span9 well">
                  <?php
                    echo "<h4>Printing the result in Standards Tags</h4>";
                  ?>
                  <?
                    echo "<h4>This is Short Tags</h4>";
                    $variable = "Printing the result directly to the script's output";
                  ?>
                  <?=$variable ?>
                    
                  <script language="php">
                      echo "<h4>Print result of script tag</h4>";
                  </script>
                </section>
            </section>
        </article>

        <!-- Bootstrap -->
        <script src="../../bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>