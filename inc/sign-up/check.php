<?php
session_start();
include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $activate  = $_POST['activate'];

    $stmt = $connect->prepare("SELECT * FROM users WHERE email = ? AND activate_code = ? ");
    $stmt->execute([ $_SESSION['email'] , $activate ]);
    $info = $stmt->fetch();
    $count = $stmt->rowCount();

    if($count > 0){

        $_SESSION['id'] = $info['id']; 

        $stmt = $connect->prepare("UPDATE users SET active_status = 'active' WHERE id = " . $_SESSION['id'] . " ");
        $stmt->execute();

?>

        <div class="alert alert-success text-center"> لقد تم تفعيل الحساب </div>

        <script> 
            setTimeout(() => {
                window.location.href = 'admin_panel/index.php';
            }
                , 3000);
        </script>

<?php

    } else {

?>

        <div class="alert alert-danger text-center"> لقد ادخلت رمز تحقق غير صحيح </div>

<?php

    }

}

?>