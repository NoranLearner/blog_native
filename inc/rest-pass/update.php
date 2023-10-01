<?php 

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"):

    $email = $_SESSION['reset'];
    $password = htmlspecialchars($_POST['password']);
    $passCount = mb_strlen($password, 'utf-8');
    $confPass = htmlspecialchars($_POST['confpass']);
    $hashedPass = sha1($confPass);

    $errors = array();

    if ($password !== $confPass):
        $errors[] = 'كلمتا المرور غير متطابقتين';
    endif;

    if ($passCount < 8 || $passCount > 20):
        $errors[] = 'يجب ان يكون الحد الادنى لكلمه المرور 8 احرف و الحد الاقصى له 16 حرف';
    endif;

    if (empty($errors)):

        $stmt = $connect->prepare("SELECT id FROM  users WHERE email = ? ");
        $stmt->execute([$email]);
        $info = $stmt->fetch();

        $stmt = $connect->prepare("update users SET password = ? WHERE email = ? ");
        $stmt->execute([$hashedPass, $email]);

        if ($stmt):

            $_SESSION['id'] = $info['id']; 

            ?>
            
            <div class="alert alert-success text-center"> جارى تسجيل الدخول... </div>

            <script>
                setTimeout(() => {
                window.location.href = 'admin_panel/index.php';
            } , 2000);
            </script>
            
            <?php

        endif;

    else:

        foreach ($errors as $error):

            ?>
            <div class="alert alert-danger text-center">
                <?php echo $error; ?>
            </div>
            <?php

        endforeach;

    endif;

endif;

?>