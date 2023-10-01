<?php 

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"):
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = htmlspecialchars($_POST['pass']);
    $hashedPass = sha1($pass);

    // $stmt = $connect->prepare("SELECT * FROM `users` WHERE email = '$email' AND password = '$hashedPass ");
    $stmt = $connect->prepare("SELECT id , email , password FROM `users` WHERE email = ? AND password = ? ");
    $stmt->execute([$email, $hashedPass]);
    $info = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count > 0):

        $_SESSION['id'] = $info['id'];

        ?> 
        
        <div class="alert alert-success text-center"> جارى تسجيل الدخول </div> 

        <script>
            setTimeout(() => {
                window.location.href = 'admin_panel/index.php';
            } , 2000);
        </script>
        
        <?php

    else :

        ?> <div class="alert alert-danger text-center"> لقد ادخلت بيانات غير صحيحة </div> <?php

    endif;

endif;

?>