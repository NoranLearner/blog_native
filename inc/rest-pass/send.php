<?php 

session_start();

// For Connect To DB
include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"):

    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

    $stmt = $connect->prepare("SELECT * FROM `users` WHERE email = '$email' ");
    $stmt->execute();
    $count = $stmt->rowCount();

    // Generate activate_Code
    $activate_code = 'code_' . rand(10000, 100000);

    // For activate_code Msg
    $headers = 'From: Avatar <info@avatar.com>' . "\r\n". 'Content-type: text/html; charset=utf-8' . "\r\n";
    $subject = 'استعاده كلمه المرور';
    $message = '
                <html>
                <head> 
                </head>
                <body>
                    <h3>  مرحبا  </h3>
                    <h3> لقد تلقينا طلبا لاستعاده كلمه مرور حسابك على افاتار .</h3>
                    <h3 style="text-align:center">رمز التحقق الخاص بك هو  : </h3><br>
                    <h1 style="text-align:center" >'.$active_code.'</h1>
                </body>
                </html>
                '; 

    if ($count > 0):

        $stmt = $connect->prepare("UPDATE users SET activate_code = '$activate_code' WHERE email = '$email' ");
        $stmt->execute();

        mail($email,$subject,$message,$headers);

        $_SESSION['email'] = $email;

        ?>

        <script >
            window.location.href='reset_activate.php';
        </script>

        <?php

    else:

        ?> <div class="alert alert-danger text-center"> لقد ادخلت بريد الكترونى غير صحيح </div> <?php

    endif;
    
endif;

?>