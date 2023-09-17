<?php

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $hashedPass = MD5($pass);

    // $stmt = $connect->prepare("SELECT * FROM `users` WHERE email = '$email' AND password = '$pass' ");
    $stmt = $connect->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? ");
    $stmt->execute([$email, $pass]);
    $info = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count > 0) {

        $_SESSION['id'] = $info['id']; 
        
?>

        <div class="alert alert-success text-center"> جارى تسجيل الدخول </div>

        <script>
            setTimeout(() => {
                window.location.href = 'admin_panel/index.php';
            }
                , 3000);
        </script>

<?php

    } else { 
    
?>

        <div class="alert alert-danger text-center"> لقد ادخلت بيانات غير صحيحة </div>

<?php 

    }

}

?>