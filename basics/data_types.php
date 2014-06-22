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
            <h1>PHP Certification <small>Data Types - Numerics</small></h1>
        </article>
        
        <article class="container-fluid">
            <section class="row-fluid">
                 <?php 
                    require('../../inc/menu.php');
                 ?>
               
                <section class="span9 well">
                  <?php
                    /*Boolean*/
                  
                    echo "<h3>Scalar Data Types</h3>";
                    
                    echo "<h4>Boolean</h4>";
                    $value_true = true;
                    $value_true2 = (bool)1;
                    $value_false = false;
                    $value_false2 = (bool)"";
                    $value_false3 = (bool)0;
                    $value_false4 = (bool)null;
                   
                    var_dump($value_true);
                    var_dump($value_true2);
                    var_dump($value_false);
                    var_dump($value_false2);
                    var_dump($value_false3);
                    var_dump($value_false4);
                    
                    echo "<h4>Integers Numeric Values</h4>";
                    $integer_decimal_positive = 10;
                    $integer_decimal_negative = -130;
                    $integer_octal = 0666;//zero in the start
                    $integer_octal2 = 0120;;//for UNIX permissions
                    $integer_hexadecimal = 0x123;
                    $integer_hexadecimal2 = 0xF89;
                    
                    var_dump($integer_decimal_positive);
                    var_dump($integer_decimal_negative);
                    var_dump($integer_octal);
                    var_dump($integer_octal2);
                    var_dump($integer_hexadecimal);
                    var_dump($integer_hexadecimal2);
                    
                    echo "<h4>Floating Point Numeric Values or Doubles</h4>";
                    $float_decimal_positive = 0.15;//Floating point
                    $float_decimal_negative = -.50;
                    $float_exponential = 2E7;
                    $float_exponential2 = 1.2e2;//mantissa

                    var_dump($float_decimal_positive);
                    var_dump($float_decimal_negative);
                    var_dump($float_exponential);
                    var_dump($float_exponential2);
                    
                    echo "<h4>Floating Point Bug</h4>";
                    echo (int) ( (0.1 + 0.7) * 10 )."<br />"; // = 7 because this result is stored internally as 7.99999.. and PHP Truncate value
                    echo ( (0.1 + 0.7) * 10);
                    
                    echo "<h4>Strings</h4>";
                    /*
                     * Strings are in fact ordered collections of binary data
                     * Text, Contents of image, a spreadsheet or music recording.
                     */
                    var_dump("This is a string");
                    echo "<p>This is a string</p>";
                    
                    echo "<h3>Compound Data Types</h3>";
                    
                    echo "<h4>Arrays</h4>";
                    $data_array = array("Definition" => "Arrays are containers of ordered data elements, stores other data types");
                    print_r($data_array);
                    
                    echo "<h4>Objects</h4>";
                    
                    class animal 
                    {
                        public $force;

                        public function features()
                        {
                            if($this->force > 2)
                            {
                                echo "Win";
                            }
                            else
                            {
                                echo "Loose";
                            }
                        }
                    }
                    
                    $animal = new animal();
                    $force = $animal->force = 8;
                    $animal->features($force);
                    
                    echo "<h3>Other data Types</h3>";
                    
                    echo "<h4>NULL</h4>";
                    $value_null = null;
                    var_dump($value_null);

                    echo "<h3>Converting Between Data Types</h3>";
                    
                    echo "<h4>Type conversion operators</h4>";
                    $x = 10.8998;
                    $y = (10/14);
                    echo (int)$x."<br />";
                    echo (float)$y."<br />";
                    echo (bool)$x."<br />";
                    
                  ?>
                </section>
            </section>
        </article>

        <!-- Bootstrap -->
        <script src="../../bootstrap/js/jquery-1.9.0.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
       
    </body>
</html>