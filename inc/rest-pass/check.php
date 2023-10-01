<?php 

session_start();

// For Connect To DB
include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"):

    $code  = $_POST['activate'];

    $stmt = $connect->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([ $_SESSION['email']]);
    $info = $stmt->fetch();

    if ($code == $info['activate_code']):
        
        $_SESSION['reset'] = $_SESSION['email'];

        ?>

        <script> 
            window.location.href='reset-pass.php';
        </script>
        
        <?php

    else:
        
        ?> <div class="alert alert-danger text-center"> لقد ادخلت رمز تحقق غير صحيح </div> <?php

    endif;

endif;

?>