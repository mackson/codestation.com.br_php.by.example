<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            PHP Certification | Anatomy of a PHP Script
        </title>
       
        <!-- Bootstrap -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../../bootstrap/css/prettify.css" rel="stylesheet" media="screen">
    </head>
    <body>

        <article class="page-header">
            <h1>PHP Certification <small>Variables</small></h1>
        </article>
        
        <article class="container-fluid">
            <section class="row-fluid">
                 <?php 
                    require('../../inc/menu.php');
                 ?>
               
                <section class="span9 well">
                  <?php
                  
                    echo "<h3>Variables</h3>";
                    
                    echo "<h4>Rules of Variables</h4>";
                    $var = "Valid One";
                    $_var = "Valid Two";
                    $_var1 = "Valid Three";
                    //$1name = "Invalid";
                    
                    echo "<h4>Variable Variables</h4>";
                    $one = "var1";
                    $$one = "var2";//references a new variable with the value
                    echo $var1."<br />";
                    
                    $two = "123";
                    $$two = "456";
                    
                    echo ${"123"};//variable with start number
                  ?>
                </section>
            </section>
        </article>

        <!-- Bootstrap -->
        <script src="../../bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>