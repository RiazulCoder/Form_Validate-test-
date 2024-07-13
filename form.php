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
                <form method = "post" action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <table style="text-align: justify;">
                        <tr>
                            <td>Name </td>
                            <td><input Type = "text" name = "name" required></td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td><input Type = "email" name = "email" required></td>
                        </tr>
                        <tr>
                            <td>Website </td>
                            <td><input Type = "text" name = "web" required></td>
                        </tr>
                        <tr>
                            <td>Date of Birth </td>
                            <td><input Type = "date" name = "dob" required></td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td>
                                <input Type = "radio" name = "gender" value="Male" required> Male
                                <input Type = "radio" name = "gender" value="Female" required>Female
                            </td>
                        </tr>
                        <tr>
                            <td>Comment </td>
                            <td><textarea Type = "text" name = "cmnt" rows="5" cols="50" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input Type = "submit" name = "submit" value="submit"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button><a href="index.php" style ="text-decoration:none; color: black;">Home</a></button></td>
                        </tr>
                        
                    </table>
                </form>
            <hr>

            <?php 
                $name   = "";
                $email  = "";
                $web    = "";
                $dob    = "";
                $cmnt   = "";

//Create a user defined function for validate the form. Here's the function name is 'validate()'
                function validate($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);

                    return ($data);
                };

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = validate($_POST['name']);
                    $email = validate($_POST['email']);
                    $web = validate($_POST['web']);
                    $dob = validate($_POST['dob']);
                    $cmnt = validate($_POST['cmnt']);

                    echo "Your Name : " . $name . "<br>";
                    echo "Your Email : " . $email . "<br>";
                    echo "Your Date Of Birth : " . $dob . "<br>";
                    echo "Your Website : " . $web . "<br>";
                    echo "Your Comment : " . $cmnt . "<br>";
                }


            ?>

            
            
            
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