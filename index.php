<!-- PHP Variable -->
<?php 
    $font = "Arial";
    $bgcolor = "#ddd";
    $fcolor = "#FC8C41";
    $mytext = "PHP Form Validation";
//Data Type Name
    $dt1 = "String";
    $dt2 = "Integer";
    $dt3 = "Float";
    $dt4 = "Boolean";
    $dt5 = "Array";
    $dt6 = "Object";
    $dt7 = "Null";
    $dt8 = "Resource";
?>
<!-- PHP Variable End -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation || PHP SYNTAX</title>

    <style>
        body{font-family: <?php echo $font; ?>;}
        .body{width: 1000px; margin: 0 auto; background: <?php echo $bgcolor;?>;}
        .header, .footer{background: #444; color: <?php echo $fcolor;?>; padding: 20px; text-align: center;}
        .header h2, .footer h2{margin: 0px;}
        .maincontent{min-height: 400px; padding: 10px; text-align: center;}
        .maincontent h3{margin: 0px;}
        .maincontent button {border: 1px solid red; background-color:black;  min-height: 30px;}
        .maincontent button a {text-decoration:none; color: white; height: 30px;}
        .maincontent button:hover{background-color: white; color: red; font-weight: bold;}
        .maincontent button a:hover{color: red; font-weight: bold;}
    </style>
</head>

<body>
    <div class="body">
        <section class="header">                        <!--Header Content -->
            <h2>
                <?php
                    echo "PHP Training Start";
                ?>
            </h2>
        </section>                                     <!--Header Content End -->

        <section class="maincontent">                  <!--Main Content -->
            <hr>
            <strong>
            <?php
                echo $mytext ;
            ?>
           </strong> 
              
            <hr>
                <h2>Welcome to Form Validation (testing Page)</h2>   
            <hr>

                <button>
                    <a href="#">Home</a>
                </button>

                <button>
                    <a href="form.php">Check Validate</a>
                </button>
            
            
        </section>                                  <!--Main Content End -->

        <section class="footer">                  <!--Footer Content -->
            <h2>
                <?php
                    echo "www.riazulislam.com";
                ?>
            </h2>
        </section>                                 <!--Footer Content End -->

    </div>
</body>
</html>