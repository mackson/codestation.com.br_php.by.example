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
            <h1>PHP Certification <small>Anatomy of a PHP Script</small></h1>
        </article>
        
        <article class="container-fluid">
            <section class="row-fluid">
                 <?php 
                    require('../../inc/menu.php');
                 ?>
               
                <section class="span9 well">
                  <?php
                  
                    $semicolon = "This variable e.g(semicolon in the end)";
                    echo "<h4>Comments</h4>";
                    /*
                     * Block Comment
                     * @author Mackson Araujo
                     * @param string foo
                     */
                    
                    function foo($name)
                    {
                        echo "Comment Funcions and Scripts " .$name;
                    }
                    
                    
                    # Single Line Comment\n 
                    // Single Line Comment
                    foo("Hello World\n Hello2");
                    
                    echo "<h4>Echo is not an function however does have not return a value</h4>";
                    print("<h4>Print is an Function and Returns values of complex scripts</h4>");
                    
                    
                    echo "<h4>Language Constructors for terminate scripts</h4>";
                    die();
                    exit();
     
                    
                  ?>
                  
                </section>
            </section>
        </article>

        <!-- Bootstrap -->
        <script src="../../bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>