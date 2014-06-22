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
               
                <section class="span9">
                  <!--Body content-->
                  <div class="well span7">
                    <h2>Algoritms</h2>
                    <p>
                      PHP syntax predominantly derived and influencied by (C and Perl)  
                    </p>
                    <p>
                      PHP syntax with object-oriented aditions influence (Java)
                    </p>

                    <pre class="prettyprint linenums">
                        <b>Semicolon</b>

                        <b>&lt;?php echo "Standard Tags"; ?&gt;</b>
                        
                    </pre>
                                       
                    <h3>
                      Comments
                    </h3>
                    
                    <?php
                        // Single Line Comment
                        # Single Line Comment
                        /*
                         * Multi Line Comment
                         * @param
                         * @author
                         * 
                         */
                    
                    ?>
                    
                    <h3>
                      Whitespace
                    </h3>
                    
                    <h3>
                      Code Block
                    </h3>
                    
                    <h3>
                      Language Constructs
                    </h3>
                    
                  </div>
                  
                  <div class="well span5">
                    <h2>Words and Notes</h2>
                    <ol>
                        <li>Statements, assignments, </li>
                       
                    </ol>
                  </div>
                  
                  
                </section>
            </section>
        </article>

        <!-- Bootstrap -->
        <script src="../../bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>