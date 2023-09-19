<?php

session_start();

include '../db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_SESSION['reset'];
    $password = $_POST['password'];
    $confPass = $_POST['confpass'];
    $hashedPass = sha1($confPass);

    $errors = array();

    if($password !== $confPass){
        $errors[] = 'كلمات المرور غير متطابقه';
    }
    if(mb_strlen($password,'utf-8') < 8){
        $errors[] = 'الحد الأدنى لكلمات المرور 8 أحرف';
    }
    if(mb_strlen($password,'utf-8') > 20){
        $errors[] = 'الحد الأقصى  لكلمات المرور 20 حرف';
    }

    if(empty($errors)){

        $stmt = $connect->prepare("SELECT id FROM  users WHERE email = ? ");
        $stmt->execute([$email]);
        $info = $stmt->fetch();

        $stmt = $connect->prepare("update users SET password = ? WHERE email = ? ");
        $stmt->execute([$hashedPass, $email]);

        if ($stmt) {

            $_SESSION['id'] = $info['id']; 

?>

            <div class="alert alert-success text-center"> جارى تسجيل الدخول... </div>

            <script>
                setTimeout(() => {
                window.location.href = 'admin_panel/index.php';
            }
                , 3000);
            </script>

<?php

        }

    } else {

        foreach($errors as $error){

?>

            <div class="alert alert-danger text-center" ><?php echo $error; ?></div>  

<?php

        }

    }

}

?>