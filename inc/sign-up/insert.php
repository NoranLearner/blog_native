<?php

session_start();

// For Connect To DB
include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"):

    // Get Date From Form
    $name = htmlspecialchars($_POST['name']);
    $nameCount = mb_strlen($name, 'utf-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = htmlspecialchars($_POST['pass']);
    $passCount = mb_strlen($pass, 'utf-8');
    $confPass = htmlspecialchars($_POST['confirm']);
    $hashed = sha1($pass);

    // Generate activate_Code
    $activate_code = 'code_' . rand(10000, 100000);

    // For activate_code Msg
    $headers = 'From: Avatar <info@avatar.com>' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n";
    $subject = 'رمز التحقق';
    $message = '
                <html>
                <head> 
                </head>
                <body>
                    <h3>  مرحبا  </h3>
                    <h3> لقد تلقينا طلبا لتفعيل حسابك الجديد على افاتار .</h3>
                    <h3 style="text-align:center">رمز التحقق الخاص بك هو  : </h3><br>
                    <h1 style="text-align:center" >' . $active_code . '</h1>
                </body>
                </html>
                ';

    // Check If Email Is Found In DB Or Not
    $stmt = $connect->prepare("SELECT email FROM `users` WHERE email = ? ");
    $stmt->execute([$email]);
    $count = $stmt->rowCount();

    // If Email Is Found In DB
    if ($count > 0):

        ?>
        <div class="alert alert-danger text-center">هذا الحساب مسجل من قبل شخص اخر</div>
        <?php

        // If Email Is Not Found In DB
    else:

        // For Validation
        $errors = array();

        if ($nameCount < 3):
            $errors[] = 'الحد الأدنى للاسم 3 أحرف';
        endif;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $errors[] = 'لقد ادخلت بريد الكترونى غير صالح';
        endif;

        if ($pass !== $confPass):
            $errors[] = 'كلمتا المرور غير متطابقتين';
        endif;

        if ($passCount < 8 || $passCount > 20):
            $errors[] = 'يجب ان يكون الحد الادنى لكلمه المرور 8 احرف و الحد الاقصى له 16 حرف';
        endif;

        if (empty($errors)):

            // Store Data And Activate_code in DB
            $stmt = $connect->prepare("insert into `users` (username,email,password,activate_code) value (?,?,?,?) ");
            $stmt->execute([$name, $email, $hashed, $activate_code]);

            if ($stmt):

                mail($email, $subject, $message, $headers);

                $_SESSION['email'] = $email;

                ?>

                <script>
                    window.location.href = "activate.php";
                </script>

                <?php

            endif;

        else:

            // Show Validation Errors
            foreach ($errors as $error):

                ?>
                <div class="alert alert-danger text-center">
                    <?php echo $error; ?>
                </div>
                <?php

            endforeach;

        endif;


    endif;

endif;

?>